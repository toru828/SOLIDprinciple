<?php

// I had fixed errors not only about SOLID principle but also other errors.

interface workerInterface
{
    public  function work();
}

interface sleepInterface
{
    public  function  sleep();
}

interface hasPowerInterface
{
    public  function  hasPower();
}

class HumanWorker implements workerInterface, sleepInterface
{
    public  function work()
    {
        var_dump('works');
    }

    public  function  sleep()
    {
        var_dump('sleep');
    }

}

class RobotWorker implements workerInterface, hasPowerInterface
{
    public function work()
    {
        if ($this->hasPower()) {
            var_dump('works');
        }
    }
    
    public  function hasPower()
    {
        // return true if robot have power, otherwise false.
    }
}

?>