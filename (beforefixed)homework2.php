<?php

/*
About interface workerInterface. We shuld separate function "work()" and "sleep".
So, it violated Single Responsibility Principle.
*/
interface workerInterface
{
    public  function work();
    public  function sleep();
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

/*
About class RobotWorker.

First of all, we don't need to put function "sleep()".
So, this class violated Interface Segregation Principle.

Second, we should implements this class from workerInterface.
Otherwise this class will get influence from class HumanWorker.
So, this class violated Dependency Inversion Principle.

Third, we should make interface about function "hasPower()"in outside.
So, this class violated Dependency Inversion Principle again.
*/
class RobotWorker extends HumanWorker
{
    public  function work()
    {
        if ($this->hasPower()) {
       parent::work();
        }
    }

    public  function sleep()
    {
        // No need
    }
    
    public  function hasPower()
    {
        // return true if robot have power, otherwise false.
    }
}

?>