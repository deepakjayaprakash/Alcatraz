<?php
	session_start();
	session_destroy();
	header("location:keystroke_demo.php");
?>