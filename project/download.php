<?php
//------Download text file
		$check=$_POST['mode'];

		if($check==1)
		{
		chdir(shellscript); 
		$file = "output.txt";
		header('Content-type: text/plain');
		header('Content-Length: '.filesize($file));
		header('Content-Disposition: attachment; filename='.$file);
		readfile($file); 
		shell_exec("./my_script2 $file");
		}
		else
		{
			echo "select the one option";

		}	
?>