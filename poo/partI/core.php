<?php
/* my custom function to load all files from custom classes*/
$dirFiles = scandir('myClasses');
foreach ($dirFiles as $file){
    if (str_contains($file,'php')){
        require 'myClasses/'.$file;
    }
}