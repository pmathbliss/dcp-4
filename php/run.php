<?php

class testclass 
{

    public $args = [];
    private $sequences = [];
    private $numberOfArguments = 0;

    public function __construct($args)
    {
        $this->cleanArgs($args);
        $this->numberOfArguments = count($this->args);
        
    }

    public function cleanArgs($args)
    {
        foreach($args as $key => $value)
        {
            if($key == 0)
            {
                continue;
            }
            $this->args[$key] = (int)$value;
        }
    }

    /**
     * First the first missing positive integer
     */
    public function find($args)
    {
        sort($args);
        
        $arr = array_unique($args);

        $missingInt = 1;

        foreach($arr as $value)
        {
            if(1 > $value)//ignore less than one
            {
                continue;
            }

            if($value > $missingInt)
            {
                break;
            }
            $missingInt = $value + 1;

        }
        
        return $missingInt;
    }
    
}

//$args = $argv;

$numberOfArguments = count($argv);

if($numberOfArguments < 2)
{
    die("Not enough arguments");
}

$r = new testclass($argv);
$missingInt = $r->find($r->args);
echo "First Int: " . $missingInt;
echo PHP_EOL;
