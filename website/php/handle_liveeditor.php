<?php
/**
 * Created by PhpStorm.
 * User: lerentis
 * Date: 10/12/15
 * Time: 3:57 PM
 */

	ini_set("display_errors", 1);
	$content = $_POST["content"];
	echo $_POST["content"];
	$filename = "../js/myscript.js";
	$content=str_replace("#43", "+", $content);
	if($handle = fopen($filename, "w"))
    {
        fwrite($handle, $content);
    }
?>
