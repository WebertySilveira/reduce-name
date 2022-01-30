<?php

namespace Src\Core;

class User
{
    private $name;

    public function __construct($name)
    {
        $name = filter_var($name, FILTER_SANITIZE_STRING);
        $this->setName($name);
    }

    private function setName($name)
    {
        $this->name = $name;
    }

    public function reduceName()
    {
        if (strlen($this->name) > 13)
        {
            $arrayName = explode(" ", $this->name);
            $lastName = end($arrayName);
            
            for($i = strlen($lastName); $i > 0; $i--)
            {
                $lastName[$i] = ' ';
            }
            $arrayName[3] = trim($lastName, ' ');
            $arrayName[3] = $arrayName[3].'.';
        }
        
        return implode(' ', $arrayName);
    }
}