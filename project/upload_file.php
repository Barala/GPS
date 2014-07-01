<?php
ini_set('post_max_size', '64M');
ini_set('upload_max_filesize', '64M');
for ($i=1; $i < 5 ; $i++) { 
  # code...
if ($_FILES["file".$i]["error"] > 0) {
    echo "Return Code: " . $_FILES["file".$i]["error"] . "<br>";
  } else {
    //echo "Upload: " . $_FILES["file".$i]["name"] . "<br>";
    //echo "Type: " . $_FILES["file".$i]["type"] . "<br>";
    //echo "Size: " . ($_FILES["file".$i]["size"] / 1024) . " kB<br>";
    //echo "Temp file: " . $_FILES["file".$i]["tmp_name"] . "<br>";
    if (file_exists("/var/www/html/project3/project/shellscript/" . $_FILES["file".$i]["name"])) {
      echo $_FILES["file".$i]["name"] . " already exists. ";
    } else {
      move_uploaded_file($_FILES["file".$i]["tmp_name"],
      "/var/www/html/project3/project/shellscript/" . $_FILES["file".$i]["name"]);
      echo "Stored in: " . "/var/www/html/project3/project/shellscript/" . $_FILES["file".$i]["name"];
    }
  }
}

?>