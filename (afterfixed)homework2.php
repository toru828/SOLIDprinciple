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

class HumanWorker implements workerInterface
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

class RobotWorker extends HumanWorker
{
    public  function work()
    {
        if ($this->hasPower()) {
       parent::work();
        }
    }
    
    public  function hasPower()
    {
        // return true if robot have power, otherwise false.
    }
}

?>