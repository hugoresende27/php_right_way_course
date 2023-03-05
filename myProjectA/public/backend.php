<?php
/**
 * @var array $files
 * @var string $root
 * @var array $transactions
 */
require "core.php";

echo "<hr>";
echo "APP_PATH is ::<strong> ".APP_PATH."</strong> <hr>";
echo "FILES_PATH is ::<strong> ".FILES_PATH."</strong> <hr>";
echo "VIEWS_PATH is ::<strong> ".VIEWS_PATH."</strong> <hr>";
echo "Project folder is ::<strong>".$root."</strong> <hr>";
echo "files to transaction:: ".var_dump($files);
echo "<hr>";

echo "<pre>";
var_dump($transactions);





