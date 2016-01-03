

var HTMLiveCodeTemplate = '<!DOCTYPE html>\n\
<html>\n\
	<head>\n\
		<meta charset="utf-8" \/>\n\
		<title>HTMLiveCode<\/title>\n\
		<style type="text\/css">\n\
			\n\
		<\/style>\n\
		<script>\n\
        function changeImage() {\n\
        var image = document.getElementById("myImage");\n\
        if (image.src.match("bulbon")) {\n\
            image.src = "pic_bulboff.gif";\n\
        } else {\n\
            image.src = "pic_bulbon.gif";\n\
        }\n\
        }\n\
		<\/script>\n\
	<\/head>\n\n\
	<body>\n\
	\n\
    <img id="myImage" onclick="changeImage()" src="pic_bulboff.gif" width="100" height="180">\n\
    \n\
    <p>Click the light bulb to turn on/off the light.</p> \n\
	<\/body>\n\
<\/html>';