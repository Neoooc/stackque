<?php

// Queue.php

class Queue 
{
    private $queue = array();

    public function Enqueue($item)
    {
        $this->queue[] = $item;
    }

    public function Top(){
        return $this->queue[0];
    }
    public function Dequeue()
    {
        if($this->Size() < 1)
        {
            return null;
        }

        $lastKey = $this->getLastKey();

        $item = null;

        for($k=0; $k<=$lastKey; $k++)
        {
            if($k == 0)
            {
                $item = $this->queue[$k]; // FIFO
            }
            else
            {
                $new_k = $k - 1;

                $this->queue[$new_k] = $this->queue[$k];
            }
        }

        unset($this->queue[$lastKey]);

        return $item;
    }

    public function Size()
    {
        return count($this->queue);
    }

    private function getLastKey()
    {
        $lastKey = (int)$this->Size() - 1;

        if($lastKey < 0)
        {
            $lastKey = 0;
        }

        return $lastKey;
    }    
}

?>