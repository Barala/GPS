<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="mystyle.css">
</head>
<body>

<?php

/*ini_set('display_errors', 1);
error_reporting(E_ALL); */ //for error check //

$l=intval($_POST['mode1']);   //Assiggning value for Correction Mode
$p=$_GET['id1'];

if($p>=0&&$p<=7&&$l==2)
{ ?>
	<div class ="neo">
		<form action = "barala.php?id1=<?php echo $p;?>&&id2=<?php echo $l;?>" method = "POST" enctype="multipart/form-data">  <!-- Form for input files -->
			<div class="trin">	
					<table><tr>	<td><label for="file">Rover Obs file</label></td>
					<td><input type="file" name="file1" id="file1"></td></tr>
					<tr><td><label for="file">Rover Nav file</label></td><td>
					<input type="file" name="file2" id="file2"></td></tr>
					<tr><td><label for="file">Base Station Obs file</label></td>
					<td><input type="file" name="file3" id="file3"></td></tr>
					<tr><td><label for="file">Base Station Nav file</label></td>
					<td><input type="file" name="file4" id="file4"></td></tr></table><br>
					<input type="submit" style="width:100px" name="submit" value="Submit"> </div>
		</form>
		</div>

<?php
}
else
{
	if($p>=0&&$p<=5&&$l==1)
	{?>
		<div class ="neo">
		<form action = "barala.php?id1=<?php echo $p;?>&&id2=<?php echo $l;?>" method = "POST" enctype="multipart/form-data">  <!-- Form for input files -->
			<div class="trin">	
					<table><tr>	<td><label for="file">Rover Obs file</label></td>
					<td><input type="file" name="file1" id="file1"></td></tr>
					<tr><td><label for="file">Rover Nav file</label></td><td>
					<input type="file" name="file2" id="file2"></td></tr>
					<tr><td><label for="file">Base Station Obs file</label></td>
					<td><input type="file" name="file3" id="file3"></td></tr>
					<tr><td><label for="file">Base Station Nav file</label></td>
					<td><input type="file" name="file4" id="file4"></td></tr>
					<tr><td><label for="number">Base Station Lat.</label></td>
					<td><input type="text" name="lat" id="lat"></td></tr>
					<tr><td><label for="number">Base Station Log.</label></td>
					<td><input type="text" name="long" id="long"></td></tr>
					<tr><td><label for="number">Base Station Height(m.)</label></td>
					<td><input type="text" name="height" id="height"></td></tr></table><br>
					<input type="submit" style="width:100px" name="submit" value="Submit"> </div>
		</form>
		</div>
<?php
	}
	elseif ($p>=6&&$p<=7&&$l==1) 
	{
		echo "There is no need of base station position in PPP mode";
	}
}
?>

</body>
</html>
