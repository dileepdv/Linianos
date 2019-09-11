<?php namespace src;
include('service\ModOperation.php');
include('variables.php');
use Service\ModOperation;
use src\Variables;

class Linio extends Variables
{
    
    public $generated_array = [];

    function __construct(){
        $this->mod_operation = new ModOperation();
    }

    /**
     * To determine the if the numbers from 1 to 100 is divisble by 3 or 5 or both
     */
    public function linioOrIt()
    {
        $array = [];
        for ($i=1; $i <= $this->count; $i++) {
            foreach ($this->flags as $flag) {
                $this->generated_array[] = $this->mod_operation->isMultiplable($i, $flag['mod1'], $flag['value'], $flag['mod2']);     
            }
        }

        return implode($this->generated_array, ', ');
    }

    public function printResult($result)
    {
        echo $result;
    }

    private function dd($anything)
    {
        echo "<pre>";
        var_dump($anything);
        echo "</pre>";
        die(1);
    }
}


$linio = new Linio();
$result = $linio->linioOrIt();
$linio->printResult($result);
?>