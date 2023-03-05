<?php

/* working with filesystem */
echo "<pre>";
$dir = scandir(__DIR__);

var_dump($dir);
var_dump(is_file($dir[2]));     //bool
var_dump(is_dir($dir[3]));      //bool

/* make dir */
mkdir ('foo');  //creates dir foo in the root of script
mkdir ('foo/bar', recursive: true);  //creates dir foo in the root of script
rmdir ('foo/bar');  //creates dir foo in the root of script
rmdir ('foo');  //creates dir foo in the root of script
//echo "</pre>";
echo "<hr>";

/* put contents size is the same as fopen , fwrite and fclose combined */
if (file_exists('foo.txt')){

    echo "empty file::".filesize('foo.txt')."<br>";
//    file_put_contents('foo.txt', "mais content");//overwrite

    clearstatcache();//use this to echo 0 filesize first, otherwise cache size will be printed
    echo "written file::".filesize('foo.txt')."<br>";

} else {
    echo "not found";
}

/* fopen fgets fclose fgetcsv */

//$file = @fopen('foo1.txt', 'r');  //@fopen to supress warning not good

if (!file_exists('foo.txt')){   //good practise, check if file exists
    echo "File not found!";
    return ;
}

$file = fopen('foo.txt', 'r');
while (($line = fgets($file)) !== false){   //while loop $line = fgets($file)  not false, echo $line
    echo $line."<br>";
}
fclose($file); //always close the file

echo "<hr>";

$file = fopen('foo.txt', 'r');
while (($line = fgetcsv($file)) !== false){   //fgetcsv print array separated by comma
    print_r( $line);
}
fclose($file); //always close the file


echo "<hr>";
/* file_get_content */

$content = file_get_contents("foo.txt", offset: 20, length: 100); //put file in a var content

echo $content;

file_put_contents('foo.txt', "mais,", FILE_APPEND);//to NOT overwrite FILE_APPEND

//unlink ("foo.txt"); //unlink DELETE file

copy("foo.txt", "bar.txt"); //copy to copy file :)
//rename("foo.txt", "bar.txt"); //rename to copy file :)
