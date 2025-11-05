<?php
$target_dir = "uploads/";
$age=10;
//ternay operator, ? is if, : is else
//print($age>18) ? "yes,user is old enough" : "user is not old enough";

//double ?? means null coalescing, this is essentially an Isset
//$file=$_POST["submit"] ?? "empty";
//echo $file;

$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);//this is really important!!!!!

//check if the file has a name/exists
if($_FILES["fileToUpload"]["name"][0]==""){
    echo "file is empty";
    exit();
}
//test if file has been uploaded
if (file_exists($target_file)) {
    echo "file already exists";
    exit();
}
//this will check the file size in BYTES
    if($_FILES["fileToUpload"]["size"] > 10000000){
        echo "Sorry, your file is too large.";
        exit();
    }
    //this will get the info on the extension and only allow certain files
    $etxt = strtolower(pathinfo($_FILES["fileToUpload"]["name"],PATHINFO_EXTENSION));
    if($etxt != "jpg" && $etxt != "png" && $etxt != "jpeg" && $etxt != "gif"){
        echo "sorry only JPG, JPEG, PNG & GIF files are allowed.";
        exit();
    }
    //this will contain an error code of what happened
    if($_FILES["fileToUpload"]["error"]){
        echo $_FILES["fileToUpload"]["error"];
        exit();
    }
    //this will upload the file tmp_name is the type here it moves the file
if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    //echo __FILE__; testing out magic constants
    header("location:filesuccess.php");
} else {
    echo "Sorry, there was an error uploading your file.";
    exit();
}
?>
