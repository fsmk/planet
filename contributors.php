<html>

<head>
	<title>Contributors to FSMK Planet</title>
</head>

<body style="background-color: #eeeeee;">

<h1 style="text-align: center;">Contributors to FSMK Planet</h1>

<p>
<?php
$dir = new DirectoryIterator(dirname("./images/hackergotchis/*.png"));
$default_hackergotchi = "babygnu.png";
foreach ($dir as $fileinfo) {
    if (!$fileinfo->isDot()) {
       	$image_name = $fileinfo->getFilename();
	if($image_name == $default_hackergotchi)
		continue;
	$index = strrpos($image_name,".png");
	if($index !== FALSE) {
		$link = "http://".substr($image_name, 0,-4);
		echo "<a href=\"".$link."\"target=\"_blank\"><img src=\"images/hackergotchis/".$image_name."\" border=\"0\" alt=\"".$link."\"></a>";
	} 
    }
}
?>
</p>
</body>
</html>
