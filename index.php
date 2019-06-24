<?php 
		$msg = "";
		if(isset($_POST['upload'])){
			// the path to stroe the uploaded image
			$target = "im/".basename($_FILES['image']['name']);

			//connect to the database
			$db = mysqli_connect("localhost", "root", "","image");

			//Get all the submitted data from the form
			$image = $_FILES['image']['name'];
			$text = $_POST['text'];

			$sql = "INSERT INTO im(image,text) VALUES('$image', '$text')";
			mysqli_query($db, $sql);

			//Now let's move the uploaded image into the folder: images
			if(move_uploaded_file($_FILES['image']['tmp_name'], $target)){
				$msg = "Image uploaded successfilly";
			}else{
				$msg = "Ther was a problem uploading image";
			}
		}

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Image Upload</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div id="content">
		<?php 
			$db = mysqli_connect("localhost", "root", "","image");
			$sql = "SELECT * FROM im";
			$result = mysqli_query($db, $sql);

			while($row = mysqli_fetch_array($result)){
				echo "<div id = 'img_div'>";
					echo "<img src= 'im/".$row['image']."'>";
					echo "<p>".$row['text']."</p>";
				echo "</div>";
			}

		 ?>
		<form action="index.php" method="post" enctype="multipart/form-data">
			<input type="image" name="size" value="1000000">
			<div>
				<input type="file" name="image">
			</div>
			<div>
				<textarea name="text" cols="40" rows="4" placeholder="Say something about this image....."></textarea>
			</div>
			<div>
				<input type="submit" name="upload" value="Upload Image">
			</div>
		</form>
	</div>
</body>
</html>