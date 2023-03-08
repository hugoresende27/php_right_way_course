<?php

namespace Hugo;

class Overwrite
{

    public function __construct()
    {
        varDump(\explode (',','Hello,World')); // \ calls global php funtion explode, better performance
        varDump(explode (',','Hello,World'));  //if not exist local function, search global
    }


}

function explode ($separator, $string){
    return "Foo";
}