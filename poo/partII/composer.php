<?php

/* psr php standart recommendations PSR !!!! */
//https://www.php-fig.org/psr/psr-4/        //psr for autoloading

/* use composer instead of spl_autoload_register() */
/* composer is a tool for dependency managers
/* https://packagist.org/   to find packages to install and use with composer
/* Example : composer require ramsey/uuid
// can use composer init to touch composer.json
// composer.json  "ramsey/uuid": "^4.7"
// composer lock , lock dependencies to versions
// composer update to update dependencies
// vendor directory with all the files from the composer
// generates an autoload.php, a more extend autoload_register like poo/partI
*/

require __DIR__.'/vendor/autoload.php';

$id = new \Ramsey\Uuid\UuidFactory();

echo $id->uuid4();  //generates uuid f145d7d2-567d-41f7-b8dd-125df49c77c4

$vendorDir = dirname(__DIR__);
$baseDir = dirname($vendorDir);
echo "<hr>";
echo $baseDir;
echo "<hr>";
echo $vendorDir;


var_dump(new Aaaa());

//composer dump-autoload
//composer dump-autoload -o optimized (slower)
//
