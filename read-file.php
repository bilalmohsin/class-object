<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form method="post" enctype="multipart/form-data">
    <input type="file" name="file" />
    <br/><br/>
    <button>Read File</button>
    </from>
</body>
</html>
<?php
if(isset($_FILES['file'])){
    $fileName = $_FILES['file']['tmp_name'];
    $file = fopen($fileName,"r");
    echo fread($file,filesize($fileName));
    fclose($file);
}
?>