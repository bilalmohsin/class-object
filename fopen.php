<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <input type="text" name="filename" placeholder="File to upload"/>
        <br />
        <br />
        <textarea name="content"></textarea>
        <br />
        <br />
        <button name="btn" value="submit">Submit</button>
    </from>
</body>
</html>

<?php
if(isset($_POST['btn'])){
    if($_POST['btn']=="submit"){
        $fileName = $_POST['filename'];
        $content = $_POST['content'];
        $file = fopen($fileName,"w");
        fwrite($file,$content);
        fclose($file);
    }
}
// $content="adadnkcaldclaksd ; sdkwoqei  djalqwi8 tuoi  wo woe t iow woi riow r";
// $file=fopen("file.txt","w");
// fwrite($file,$content);
// fclose($file);
?>