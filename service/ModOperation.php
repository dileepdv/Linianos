<?php namespace Service;
include('IModOperation.php');
include('IMultiplable.php');

class ModOperation implements IModOperation, IMultiplable
{
    /**
     * Is the $digit disivible by $mod_number
     */
    public function modFunction($digit, $mod_number)
    {
        return $digit % $mod_number;
    }
    
    /**
     * Is the $digit disivible by both $mod1 and $mod2
     */
    public function isMultiplable($digit, $mod1, $value, $mod2 = 1)
    {        
        if($digit % $mod1 == 0 && $digit % $mod2 == 0){
             return $value;
        }
        return $digit;
    }
}
