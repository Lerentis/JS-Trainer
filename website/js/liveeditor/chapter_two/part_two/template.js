

var HTMLiveCodeTemplate = '<!DOCTYPE html>\n\
<html>\n\
	<head>\n\
		<meta charset="utf-8" \/>\n\
		<title>HTMLiveCode<\/title>\n\
		<style type="text\/css">\n\
			\n\
		<\/style>\n\
		<script type="text\/javascript">\n\
		var number = 5;\n\
		var str = "Hello"; \n\
		var array = ["Saab", "Volvo", "BMW"];\n\
		var obj = new String("This is now a string object");\
		\n\
		<\/script>\n\
	<\/head>\n\n\
	<body>\n\
		\n\
		<script>document.write(typeof number);</script>\n\
		<br>\n\
		<script>document.write(typeof str);</script>\n\
		<br>\n\
		<script>\n\
        if(array.constructor === Array) {\n\
            document.write("array");\n\
        } else {\n\
            document.write("something else");\n\
        }\n\
        </script>\n\
		<br>\n\
		<script>document.write(typeof obj);</script>\n\
		\n\
	<\/body>\n\
<\/html>';