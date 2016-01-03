

var HTMLiveCodeTemplate = '<!DOCTYPE html>\n\
<html>\n\
	<head>\n\
		<meta charset="utf-8" \/>\n\
		<title>HTMLiveCode<\/title>\n\
		<style type="text\/css">\n\
			\n\
		<\/style>\n\
		<script>\n\
		function changeText(id) { \n\
		    if(id.innerHTML == "Click on this text!"){\n\
		        id.innerHTML = "Ooops!";\n\
		    } else {\n\
                id.innerHTML = "Click on this text!";\n\
            }\n\
        }\n\
		\n\
		<\/script>\n\
	<\/head>\n\n\
	<body>\n\
    <h1 onclick="changeText(this)">Click on this text!</h1>\n\
	<\/body>\n\
<\/html>';