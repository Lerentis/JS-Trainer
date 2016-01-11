

var HTMLiveCode = function() {
	var settings = arguments[0] || {},
	_codeMirrorInstance = null,
	_livePreview = document.createElement("iframe"),
	_resizeBar = document.createElement("div"),
	_resizeArea = document.createElement("div"),
	_fontsizeStylesheet = document.createElement("style"),
	_introTooltip = document.getElementById("intro-tooltip"),
	_initialized = false,
	_resizeBarMouseDown = false,
	_resizeBarStartPosition = null,
	_resizeBarWidth = 6,
	_codeView = null,
	_codeViewStartWidth = null,
	_codeViewWidthRatio = 50,
	_livePreviewWidthRatio = 50,
	_browserWidth = parseInt(window.innerWidth),
	_browserHeight = parseInt(window.innerHeight),
	_imageProxyPath = settings.imageProxyPath || null,
	_jsLintResult = null,
	_editorStorageSettings = {},
	_editorDefaultSettings = {
		theme: settings.theme || "bright",
		fontSize: 1,
		wordWrap: settings.wordWrap !== false,
		gutter: settings.gutter !== false,
		imageProxyPath: _imageProxyPath,
		codeViewWidth: parseInt(window.innerWidth) / 2,
		livePreviewWidth: (parseInt(window.innerWidth) / 2) - _resizeBarWidth
	};

	var _updateViews = function() {
		var codeMirrorContent = _codeMirrorInstance.getValue(),
		livePreview = _livePreview.contentDocument || _livePreview.contentWindow.document;
		livePreview.open();

		if (_imageProxyPath !== null && typeof _imageProxyPath !== "undefined") {
			_imageProxyPath = _imageProxyPath.replace(/\\/g, "/");
			if (_imageProxyPath.match(/^file:\/\/\//g) === null) _imageProxyPath = "file:///" + _imageProxyPath;
			if (_imageProxyPath.substr(-1) !== "/") _imageProxyPath = _imageProxyPath + "/";
			codeMirrorContent = codeMirrorContent.replace(/url\(['"]{0,}(.+?)['"]{0,}\)/g, "url('" + _imageProxyPath + "$1?" + new Date().getTime() + "')");
			codeMirrorContent = codeMirrorContent.replace(/<img([^>]*)\ssrc=(['"])(.*?)\2(.*?)>/gi, "<img$1 src=$2" + _imageProxyPath + "$3?" + new Date().getTime() + "$2 $4>");
		}
		
		var codeMirrorContentTrimmed = codeMirrorContent.replace(/[\r\n\t]+/gm, ""),
		codeMirrorContentScripts = codeMirrorContentTrimmed.match(/<\s*script(?:.*)>(.*)<\/\s*script\s*>/i);

		if (codeMirrorContentScripts !== null) {
			try {
				_jsLintResult = JSLINT("/*jslint anon:true, bitwise:true, cap:true, css:true, debug:true, devel:true, eqeq:true, es5:true, evil:true, forin:true, fragment:true, newcap:true, nomen:true, on:true, passfail:true, plusplus:true, regexp:true, undef:true, unparam:true, sloppy:true, sub:true, vars:true, white:true */" + codeMirrorContentScripts[1]);
				if (_jsLintResult) livePreview.write(codeMirrorContent);
			} catch(e) {}
		} else {
			livePreview.write(codeMirrorContent);
		}

		livePreview.close();
	};
	
	var _foldFunc = CodeMirror.newFoldFunction(CodeMirror.tagRangeFinder);
	
	var _fadeOut = function(obj, duration) {
		obj.style.opacity = 1;

		var alphaDifference = parseFloat((1 / duration) * 13),
		fadeOutTimer = setInterval(function(){
			var alpha = obj.style.opacity;

			if (alpha - alphaDifference > 0) {
				obj.style.opacity -= alphaDifference;
			} else {
				obj.style.opacity = 0;
				obj.style.display = "none";
				clearInterval(fadeOutTimer);
			}
		}, 13);
	};
	
	var _cloneObject = function(obj) {
		if (typeof obj !== "object" || obj === null) {
			return obj;
		} else {
			var objClone = obj.constructor();

			for (var property in obj) {
				if (obj.hasOwnProperty(property)) objClone[property] = obj[property];
			}

			return objClone;
		}
	};
	
	var _settingsController = {
		updateStorageSetting: function(settingKey, settingValue) {
			_editorStorageSettings[settingKey] = settingValue;
			localStorage.setItem("htmlivecodeSettings", JSON.stringify(_editorStorageSettings));
		},
		checkStorageSetting: function(settingValue) {
			return (settings[settingValue] !== null && typeof settings[settingValue] !== "undefined") ? settings[settingValue] : (_editorStorageSettings[settingValue] !== null && typeof _editorStorageSettings[settingValue] !== "undefined") ? _editorStorageSettings[settingValue] : _editorDefaultSettings[settingValue];
		},
		applySettings: function() {
			_codeMirrorInstance.setOption("lineNumbers", _settingsController.checkStorageSetting("gutter"));
			_codeMirrorInstance.setOption("lineWrapping", _settingsController.checkStorageSetting("wordWrap"));
			_codeMirrorInstance.setOption("gutter", _settingsController.checkStorageSetting("gutter"));
			_codeMirrorInstance.setOption("theme", _settingsController.checkStorageSetting("theme"));
			_imageProxyPath = _settingsController.checkStorageSetting("imageProxyPath");
			_updateViews();
			_codeView.style.width = _settingsController.checkStorageSetting("codeViewWidth") + "px";
			_livePreview.style.width = _settingsController.checkStorageSetting("livePreviewWidth") + "px";
			_codeViewWidthRatio = (parseInt(_codeView.style.width) / _browserWidth) * 100;
			_livePreviewWidthRatio = (parseInt(_livePreview.style.width) / _browserWidth) * 100;
			_resizeController.finishResizeAreas();
			_fontsizeStylesheet.removeChild(_fontsizeStylesheet.childNodes[0]);
			_fontsizeStylesheet.appendChild(document.createTextNode(".CodeMirror{font-size:" + parseFloat(_editorStorageSettings.fontSize) + "em;}"));
			_codeMirrorInstance.refresh();
		}
	};
	
	var _resizeController = {
		init: function() {
			window.addEventListener("mouseup", function() {
				_resizeBarMouseDown = false;
				_codeViewWidthRatio = (parseInt(_codeView.style.width) / _browserWidth) * 100;
				_livePreviewWidthRatio = (parseInt(_livePreview.style.width) / _browserWidth) * 100;
				_resizeArea.style.display = "none";
				window.removeEventListener("mousemove", _resizeController.resizeMouseMoveHandler);
			});
			
			window.addEventListener("mouseout", function() {
				if (!_resizeBarMouseDown) document.body.style.cursor = "default";
			});
			
			window.addEventListener("resize", function() {
				_resizeController.resizeAreas();
			});
		},
		resizeAreas : function() {
			_browserWidth = parseInt(window.innerWidth);
			_browserHeight = parseInt(window.innerHeight);

			if (_codeView.style.width == "") {
				_codeView.style.width = (_browserWidth / 2) + "px";
				_livePreview.style.width = (_browserWidth / 2) - _resizeBarWidth + "px";
			} else {
				_codeView.style.width = ((_codeViewWidthRatio / 100) * _browserWidth) + "px";
				_livePreview.style.width = (_browserWidth - parseFloat(_codeView.style.width) - _resizeBarWidth) + "px";
			}

			_resizeController.finishResizeAreas();
		},
		finishResizeAreas: function() {
			if (parseInt(_codeView.style.width) <= 200) {
				_codeView.style.width = "200px";
				_livePreview.style.width = (_browserWidth - 200 - _resizeBarWidth) + "px";
			}

			if (parseInt(_codeView.style.width) >= (_browserWidth - 200 - _resizeBarWidth)) { 
				_codeView.style.width = (_browserWidth - 200 - _resizeBarWidth) + "px";
				_livePreview.style.width = "200px";
			}

			_settingsController.updateStorageSetting("codeViewWidth", parseFloat(_codeView.style.width));
			_settingsController.updateStorageSetting("livePreviewWidth", parseFloat(_livePreview.style.width));
			_resizeBar.style.left = parseFloat(_codeView.style.width) + "px";
			_editorDefaultSettings.codeViewWidth = parseInt(window.innerWidth) / 2;
			_editorDefaultSettings.livePreviewWidth = (parseInt(window.innerWidth) / 2) - _resizeBarWidth;
			_codeMirrorInstance.refresh();
		},
		resizeMouseMoveHandler: function(evt) {
			var mouseDistance = parseInt(evt.pageX) - _resizeBarStartPosition;
			_codeView.style.width = (_codeViewStartWidth + mouseDistance) + "px";
			_livePreview.style.width = (_browserWidth - _codeViewStartWidth - mouseDistance) - _resizeBarWidth + "px";
			_resizeController.finishResizeAreas();
		}
	};

	return {
		init: function() {
			CodeMirror.keyMap.HTMLiveCode = {
				fallthrough: ["default"]
			};
		
			_codeMirrorInstance = CodeMirror(document.body, {
				mode: "text/html",
				indentWithTabs: true,
				lineWrapping: _editorDefaultSettings.wordWrap,
				gutter: _editorDefaultSettings.gutter,
				fixedGutter: true,
				lineNumbers: _editorDefaultSettings.gutter,
				matchBrackets: true,
				indentUnit: 4,
				tabSize: 4,
				tabMode: "indent",
				theme: _editorDefaultSettings.theme,
				keyMap: "HTMLiveCode",
				onHighlightComplete: function() {
					if (!_initialized) {
						_initialized = true;
						_codeView = _codeMirrorInstance.getWrapperElement();
						
						/*if (localStorage.getItem("htmlivecodeText") !== null) {
							_codeMirrorInstance.setValue(localStorage.getItem("htmlivecodeText"));
						} else {*/
							_codeMirrorInstance.setValue(HTMLiveCodeTemplate);
						/*}

						if (localStorage.getItem("htmlivecodeSettings") !== null) {
							_editorStorageSettings = JSON.parse(localStorage.getItem("htmlivecodeSettings"));
							_settingsController.applySettings();
						} else {*/
							localStorage.setItem("htmlivecodeSettings", JSON.stringify(_editorDefaultSettings));
							_editorStorageSettings = _cloneObject(_editorDefaultSettings);
						//}

						_resizeController.resizeAreas();
						_updateViews();
						//_menuController.init();
						_resizeController.init();
					}
				},
				onChange: function() {
					_updateViews();
					localStorage.setItem("htmlivecodeText", _codeMirrorInstance.getValue());
				},
				onGutterClick: _foldFunc
			});

			_resizeBar.setAttribute("id", "resize-control");
			document.body.appendChild(_resizeBar);
			
			_resizeArea.setAttribute("id", "resize-area");
			document.body.appendChild(_resizeArea);
			
			_livePreview.setAttribute("id", "live-preview");
			document.body.appendChild(_livePreview);

			_fontsizeStylesheet.setAttribute("type", "text/css");
			_fontsizeStylesheet.appendChild(document.createTextNode(".CodeMirror{font-size:"+ _editorDefaultSettings.fontSize +"em;}"));
			document.body.appendChild(_fontsizeStylesheet);
			
			if (localStorage.getItem("htmlivecodeText") === null) {
				_introTooltip.style.left = ((_browserWidth / 2) - 235) + "px";
				_introTooltip.style.display = "inline";
				setTimeout(function(){
					_fadeOut(_introTooltip, 2000);
				}, 3000);
			}
		},
		resizeAreas: _resizeController.resizeAreas
	}
};