<?php

class Mazikeen
{

    private $empName;
    private $empAge;
    private $empFaveColor;

    public function setEmpName($empName)
    {
        $this->empName = $empName;
    }

    public function setEmpAge($empAge)
    {
        $this->empAge = $empAge;
    }

    public function setEmpFaveColor($empFaveColor)
    {
        $this->empFaveColor = $empFaveColor;
    }

    public function setInput($empName, $empAge, $empFaveColor)
    {
        $this->empName = $empName;
        $this->empAge = $empAge;
        $this->empFaveColor = $empFaveColor;

    }

    public function getEmpName()
    {
        if(!ctype_alpha($this->empName))
        {
            throw new \InvalidArgumentException("Input must be an Alphabet.");
        }
        return $this->empName;
    }

    public function getEmpAge()
    {
        if(!is_numeric($this->empAge))
        {
            throw new \InvalidArgumentException("Input must be an Alphabet.");
        }
        return $this->empAge;
    }
      
    public function getEmpFaveColor()
    {
        if(!ctype_alpha($this->empFaveColor))
        {
            throw new \InvalidArgumentException("Input must be an Alphabet.");
        }
        return $this->empFaveColor;
    }

    public function getInput()
    {
        return $this->empName;
        return $this->empAge;
        return $this->empFaveColor;
    }
}