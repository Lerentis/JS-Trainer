

var HTMLiveCodeTemplate = '<!DOCTYPE html>\n\
<html>\n\
	<head>\n\
		<meta charset="utf-8" \/>\n\
		<title>HTMLiveCode<\/title>\n\
		<style type="text\/css">\n\
			\n\
		<\/style>\n\
		<script type="text\/javascript">\n\
		var hello = "Hello"; \n\
		function greeting(){ \n\
            return hello + " World!"; \n\
        }\n\
        function greeting_extended(){ \n\
            return greeting() + " Drink Coffee and write Code!"; \n\
        }\n\
		\n\
		<\/script>\n\
	<\/head>\n\n\
	<body>\n\
		\n\
		<script>document.write(greeting_extended());</script>\n\
	<\/body>\n\
<\/html>';