

var HTMLiveCodeTemplate = '<!DOCTYPE html>\n\
<html>\n\
	<head>\n\
		<meta charset="utf-8" \/>\n\
		<title>HTMLiveCode<\/title>\n\
		<style type="text\/css">\n\
			\n\
		<\/style>\n\
		<script>\n\
        function validateForm() {\n\
            var x = document.forms["myForm"]["fname"].value; \n\
            if (x == null || x == "") {\n\
                alert("Name must be filled out");\n\
                return false;\n\
            } else { \n\
            alert(x);\n\
            }\n\
        }\n\
		<\/script>\n\
		<\/script>\n\
	<\/head>\n\
	<body>\n\
	<form name="myForm" \n\
    onsubmit="return validateForm()">\n\
    Name: <input type="text" name="fname">\n\
    <input type="button" value="Submit" onClick="validateForm()">\n\
    </form>\n\
	<\/body>\n\
<\/html>';