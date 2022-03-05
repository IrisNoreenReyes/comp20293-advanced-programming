<?php
class Maze
{

    private $numMaze;
    
    public function __construct($numMaze)
    {
        $this->numMaze = $numMaze;
    }

    public function modNum($divisor)
    {
        if($divisor > $this->numMaze)
        {
            throw new \InvalidArgumentException("Divisor should not be greater than dividend.");
        }
        else if(!is_numeric($divisor))
        {
            throw new \InvalidArgumentException("Divisor is not a number.");
        }
        return $this->numMaze % $divisor;
    }
}