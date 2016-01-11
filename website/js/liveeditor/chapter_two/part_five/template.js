

var HTMLiveCodeTemplate = '<!DOCTYPE html>\n\
<html>\n\
	<head>\n\
		<meta charset="utf-8" \/>\n\
		<title>LiveCode<\/title>\n\
		<style type="text\/css">\n\
			\n\
		<\/style>\n\
		<script type="text\/javascript">\n\
		var badFriend = false; \n\
		var goodFriend = true;\n\
		\n\
		<\/script>\n\
	<\/head>\n\n\
	<body>\n\
		\n\
		<script>document.write(typeof fullNumber + " " + fullNumber);</script>\n\
		<br>\n\
		<script>\n\
        if(badFriend) {\n\
            document.write("Do not trust him!!1!");\n\
        } if(goodFriend) {\n\
            document.write("Trust him with your life!");\n\
        }\n\
        </script>\n\
	<\/body>\n\
<\/html>';