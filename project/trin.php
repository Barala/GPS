<html>
<head>
<link rel="stylesheet" type="text/css" href="mystyle.css">
</head>
<body>
	<h1>Base Station Position</h1>
	<div class="container">

<?php $p=$_POST['mode'];?>
<form action="neo.php?id1=<?php echo $p;?>" method="POST">
			<div>
				<input type="radio" name="mode1" value="1">Known<br>
				<input type="radio" name="mode1" value="2">Unknown<br>
				<input type="submit"value="Enter"><br>
			</div>
	</div>
</form>
</body>
</html>