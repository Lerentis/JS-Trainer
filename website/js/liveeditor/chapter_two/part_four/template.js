

var HTMLiveCodeTemplate = '<!DOCTYPE html>\n\
<html>\n\
	<head>\n\
		<meta charset="utf-8" \/>\n\
		<title>HTMLiveCode<\/title>\n\
		<style type="text\/css">\n\
			\n\
		<\/style>\n\
		<script type="text\/javascript">\n\
		var fullNumber = 5; \n\
		var floatingpointNumber = 123e5;\n\
		var decimalNumber = 5.2;\n\
		var numberAsString = "5";\n\
		\n\
		<\/script>\n\
	<\/head>\n\n\
	<body>\n\
		\n\
		<script>document.write(typeof fullNumber + " " + fullNumber);</script>\n\
		<br>\n\
		<script>document.write(typeof decimalNumber + " " + decimalNumber);</script>\n\
		<br>\n\
		<script>document.write(typeof floatingpointNumber + " " + floatingpointNumber);</script>\n\
		<br>\n\
		<script>document.write(typeof numberAsString + " " + numberAsString);</script>\n\
	<\/body>\n\
<\/html>';