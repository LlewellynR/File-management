
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>File Management</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<form action="upload.php" method="post" enctype="multipart/form-data">
<h1>File Management</h1>
<label for="fileToUpload" class="upload-file">Select File
    <!--input type file is really odd,its changes based on browser and the style cannot be editted accordingly-->
    <input type="file" name="fileToUpload" id="fileToUpload">
</label>
    <input type="submit" value="Upload Image" name="submit">
</form>
</body>
</html>
