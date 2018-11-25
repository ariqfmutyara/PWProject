<?php
    if(isset($_POST['upload'])){
        $target = "images/".basename($_FILES['image']['name']);
        $db = mysqli_connect("localhost","root","","photos");

        $image = $_FILES['image']['name'];
        $text = $_POST['text'];

        $sql = "INSERT INTO images (image, text) VALUES ('$image','$text');
        mysqli_query($db, $sql);

        if(move_uploaded_file($_FILES['name']['tmp_name'],$target)){
            $msg = "Image uploaded succesfully";
        }
        else{
            $msg = "There was a problem uploading image";
        }
?>


<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="contohuploadfoto.css">
    </head>
<body>
<div id="content">
<?php
    $db = mysqli_connect("localhost","root","","photos");
    $sql = "SELECT * FROM images;
    $result = msqli_query($db, $sql);
    while ($row = mysqli_fetch_array($result)){
        echo "<div id ='img_div'>";
        echo "<img src= '.$row['image'].*' >";
        echo "<p>".$row['text']."</p>";
        echo "</div>";
    }
?>
    <form method="POST" action="index.php" enctype="multipart/form-data">
    <input type="hidden" name="size" value="1000000">
    <div>
        <input type="file" name="image">
    </div>
    <div>
        <textarea name = "text" cols="40" rows="4" placeholder="say something"></textarea>
    </div>
    <div>
        <input type="submit" name="upload" value="upload image">
    </div>
    </form>
</div>
</body>
</html>