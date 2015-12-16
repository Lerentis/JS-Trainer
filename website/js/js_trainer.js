/**
 * Created by lerentis on 10/4/15.
 */


var xmlhttp;
var content;
var id;


/**
 * @param cname the cookie to get the value from
 * @returns {*} if not found or the found value
 *
 * This function returns the first found value of a specified cookie
 */
function getCoockieValue(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for(var i=0; i<ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1);
        if (c.indexOf(name) == 0) return c.substring(name.length,c.length);
    }
    return "";
}

function loadXMLDoc(url, method, cfunc) {
    if(window.XMLHttpRequest) {
        xmlhttp=new XMLHttpRequest();
    } else {
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    }

    if(method=="POST")
    {

        xmlhttp.onreadystatechange = cfunc;
        xmlhttp.open(method, url, true);
        xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
        xmlhttp.send("content="+ content);
        var script = document.createElement("SCRIPT");
        script.src="js/myscript.js";
        document.body.appendChild(script);
    } else {
        xmlhttp.onreadystatechange = cfunc;
        xmlhttp.open(method, url, true);
        xmlhttp.send();
    }

}


function runJS() {
    loadXMLDoc("js/myscript.js", "GET",  function() {
        if (xmlhttp.readyState==4 && xmlhttp.status==200) {
            document.getElementById("output").innerHTML=main();
        }
    });

}

function submitJS() {
    content = document.getElementById("input").value;
    content = content.replace(/\+/g,"#43");
    loadXMLDoc("php/handle_liveeditor.php", "POST", function() {
    });

}