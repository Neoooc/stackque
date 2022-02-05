<?php

function najveci()
{
    global $polje;
    
    for($i=0; $i<4; $i++)
    {
        for($j=$i+1; $j<4; $j++)
        {
            if($polje[$i]<$polje[$j])
            {
                $temp = $polje[$i];
                $polje[$i] = $polje[$j];
                $polje[$j] = $temp;
            }
            
        }
    }
    echo $polje[0];
}



?>
