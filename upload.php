<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<body>

<form action="upload.php" method="POST" enctype="multipart/form-data">
	<input type="file" name="file">
	<button type="submit" name="submit">UPLOAD</button>
</body>
</html>

<?php
if (isset($_POST['submit'])) {
$file = $_FILES['file']; 


	$fileName = $_FILES['file']['name'];
	$fileTmpName = $_FILES['file']['tmp_name'];
	$fileSize = $_FILES['file']['size'];
	$fileError= $_FILES['file']['error'];
	$fileType = $_FILES['file']['type'];
	
	$fileEXT = explode('.', $fileName);
	$fileActualExt = strolower(end($fileExt));
	
	$allowed = array('jpg', 'jpeg', 'png', 'pdf');
	
	if (in_array($fileActualExt, $allowed )){
		if ($fileError === 0)  {
			if ($fileSize < 1000000 {
			$fileNameNew = uniqid('', true).".".$
				fileActualExt;
		$fileDestination = 'uploads/'.$fileNameNew;
		move_uploaded_file($fileTmpName, $
		fileDestination);
		header("Location: index.php");
		
	} else {
		echo "Your file is too big!";
		}
	} else { 
	echo "There was an error uploading your file!";
	
	}
	} else {
	echo "You cannot upload files of this type!";
	}
}
