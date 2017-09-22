<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title> </title>
</head>
<body>
    <?php
    $filepath="text/";
    if(is_dir($filepath)){   //判断是不是文件夹
        $ch=opendir($filepath);  //打开文件夹的句柄
        if($ch){
            while(($filename=readdir($ch))!=false){  //判断是不是有子文件夹或者文件夹
                $filetype=substr($filename,strripos($filename,".")+1);
                if($filetype=="txt"&&is_file($filepath."/".$filename)){ //判断是不是txt
                    echo $filepath."/".$filename."内容如下："."<br/>";
                    $f=fopen($filepath."/".$filename,"r");  //打开文件
                    while(!feof($f)){  //循环输出
                        $line=fgets($f);
                        echo $line." ";
                        echo "<br/>";
                        
                    }
                    fclose ($f);
                }
            }
            closedir ($ch);
        }
    }
    
    
   
    ?>
</body>
</html>