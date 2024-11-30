<?php
if(isset($_POST["btn"])){
    // $file = $_FILES['filename'];
    $file = $_FILES["filename"]["name"];
    $temp_name = $_FILES["filename"]["tmp_name"];
    $img = "image/";
    $file_size = $_FILES["filename"]["size"];
    $kb = $file_size/1024;

    if($kb>500){
        echo"File is too large";
    }else{
        move_uploaded_file("$temp_name","$img".$file);
    }
    
}
?> 


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
</head>
<body>
    <form action="#" method="post" enctype="multipart/form-data">
        <input type="file" name="filename"><br>
        <input type="submit" name="btn">
    </form>
</body>
</html>

<?php
echo "<img src='$img.$file' alt='' width='400'>"

?>