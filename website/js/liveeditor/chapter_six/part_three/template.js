

var HTMLiveCodeTemplate = '<!DOCTYPE html>\n\
<html>\n\
	<head>\n\
		<meta charset="utf-8" \/>\n\
		<title>LiveCode<\/title>\n\
		<style type="text\/css">\n\
			\n\
		<\/style>\n\
		<script>\n\
		\n\
		<\/script>\n\
	<\/head>\n\n\
	<body>\n\
	\n\
	<div id="myID"></div>\n\
	<div name="myName"></div>\n\
	<div class="myClass"></div>\n\
	\n\
	<script>\n\
		document.getElementById("myID").innerHTML = "by ID";\n\
        document.getElementsByName("myName")[0].innerHTML = "by Name";\n\
        document.getElementsByClassName("myClass")[0].innerHTML = "by Class";\n\
	<\/script>\n\
	<\/body>\n\
<\/html>';