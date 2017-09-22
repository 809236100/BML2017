<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title> </title>
</head>
<body>
<?php

    header("Content-type:text/html;charset=utf-8");    
    if(!empty($_POST['sub'])){  //获取漫画
        $bookName = $_POST['bookName'];
        $myfile = fopen("text/".$bookName.".txt", "r") or die("Unable to open file!");
        echo fread($myfile,filesize("text/".$bookName.".txt"));
        fclose($myfile);
        
        
    $dir = "img/";  //要获取的图片
    if (is_dir($dir)){
        if ($dh = opendir($dir)){
            $filePath = "img/".$bookName.".jpg";
            echo "<img src='".$filePath."'/>";
            closedir($dh);
        }
    }
}
    
    $submit = $_POST['submit'];
    

?>
</body>
</html>


