

var HTMLiveCodeTemplate = '<!DOCTYPE html>\n\
<html>\n\
	<head>\n\
		<meta charset="utf-8" \/>\n\
		<title>HTMLiveCode<\/title>\n\
		<style type="text\/css">\n\
			\n\
		<\/style>\n\
		<script type="text\/javascript">\n\
		var text = "";\n\
        for (i = 0; i < 5; i++) {\n\
            text += "The number is " + i + "<br>";\n\
        }\n\
		\n\
		<\/script>\n\
	<\/head>\n\n\
	<body>\n\
		<script>\n\
        document.write(text);\n\
		</script>\n\
	<\/body>\n\
<\/html>';