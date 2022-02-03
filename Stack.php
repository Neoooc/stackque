<?php 

// Stack.php

class Stack
{
    private $stack = array();
    public function Push($item)
    {
        $this->stack[] = $item;
    }

    public function Top(){
        return current($this->stack);
    }

    public function Pop()
    {
        if($this->Size() < 1) // je li prazan?
        {
            return null;
        }
        $lastKey = $this->getLastKey();
        $item = $this->stack[$lastKey];
        unset($this->stack[$lastKey]);
        return $item;
    }

    public function Size() {
        return count($this->stack); // broj elemenata stacka
    }

    public function getLastKey()
    {
        $lastKey = (int)$this->Size() - 1;
        // Ako je array prazan 0 bit će -1 što ne može
        if($lastKey < 0)
        {
            $lastKey = 0;
        }
        return $lastKey;
    }
}
?>