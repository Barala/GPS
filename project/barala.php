<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);  //for error check//

$t1 = microtime(get_as_float);
for ($i=1; $i < 5 ; $i++) 
{ 
  if ($_FILES["file".$i]["error"] > 0) 
  {
    echo "Return Code: " . $_FILES["file".$i]["error"] . "<br>";
  } 
  else 
  {
    if (file_exists("/var/www/html/project3/project/shellscript/" . $_FILES["file".$i]["name"])) 
    {
      //echo $_FILES["file".$i]["name"] . " already exists. ";
    } 
    else 
    {
      move_uploaded_file($_FILES["file".$i]["tmp_name"],
      "/var/www/html/project3/project/shellscript/" . $_FILES["file".$i]["name"]);
      //echo "Stored in: " . "/var/www/html/project3/project/shellscript/" . $_FILES["file".$i]["name"];
    }
  }
}
  //storing file names in variables so we can pass them to our bash shell script//

$id1=$_GET['id1'];
$id2=$_GET['id2'];
$ro= $_FILES['file1']["name"];
$rn= $_FILES['file2']["name"];
$bn= $_FILES['file3']["name"];
$bo= $_FILES['file4']["name"];
echo $id2;

// changing present directory to directory which contains shell script
chdir('shellscript');
// command to execute shell sscript and passing arguments 
if($id2==1)
{ echo "inside";
  $lat=$_POST['lat'];
  $long=$_POST['long'];
  $height=$_POST['height'];
  $output=shell_exec("./my_script3 $lat $long $height $id1 $ro $rn $bn $bo");
}
else
{
  echo "else";
  $output=shell_exec("./my_script $id1 $ro $rn $bn $bo"); 
}

$file = "output.txt";


 	if($output == NULL || filesize($file)==0)
 	{
 		echo "oops!! something went wrong, Make sure you have entered correct files.";
 	}
  else
 	{ 
		$lines = count(file($file));  // counting the total no. of lines in output.txt file 
    $line_string = file($file); // this is an array which contains all lines of .txt file as an indivudal string with line no. 
    $string = $line_string[$lines-1]; //Reading Last Line od .txt file
    $data=explode('  ', $string); // It will break a line after space(' ') into strings which will not be having spaces
 		
    echo "Latitude = ".$lat = $data[1];
 	  echo "\n <br>Longitude = ".$lon = $data[2];
 	  
    if($data[3] == NULL)
 		{
 			echo "\n <br>Height = ".$height = $data[4];
 		}
 		else 
 		{
 			echo "\n <br>Height = ".$height = $data[3];
 		}
  }

  //-----Download text file 
		header('Content-type: text/plain');
		header('Content-Length: '.filesize($file));
		header('Content-Disposition: attachment; filename='.$file);
		readfile($file);

	

shell_exec("./my_script2 $file");
$t2 = microtime(get_as_float);
echo "<br>";
$t = $t2-$t1;
var_dump($t);


?>	 				