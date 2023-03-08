<?php

declare(strict_types=1); //first declare

namespace Hugo; //namespace is like a virtual directory //its recommended use same namespace as folder structure

use DateTime;
use myClasses\Email;
use myClasses\Transaction as Trans;

//avoids \DateTime();
class Transaction {

    public function __construct()
    {
        echo "<br>";
        echo "Hugo/:::";
        varDump(new \CustomerProfile());   // \ is needed to load , \ means go to global namespace instead of Hugo
        varDump(new DateTime());   // \ is needed to load or use DateTime;
                                    //  , if not \, php tries to load from the namespace Hugo

        varDump(new \DateTime2());

        varDump(new Email());

        varDump(new Trans(20,"ttttt"));
    }

}