<?php
//------Download text file 
		$file = "output.txt";
		header('Content-type: text/plain');
		header('Content-Length: '.filesize($file));
		header('Content-Disposition: attachment; filename='.$file);
		readfile($file); 	
?>