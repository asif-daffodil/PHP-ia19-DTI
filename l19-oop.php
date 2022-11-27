<?php
class myClass
{
    public $myTeam = "Brazil";
    protected $msg = "This is protected message";
    private $dti = "DTI is a big institute";

    public function __construct()
    {
        echo "<br>This is a text from inside a construct<br>";
    }

    public function __destruct()
    {
        echo "<br>This is a text from inside a destruct<br>";
    }

    public function argentina()
    {
        return $this->msg . " " . $this->dti;
    }
}

class myChieldClass extends myClass
{
    public function souduArabia()
    {
        return $this->myTeam . "<br>" . $this->argentina() . "<br>" . $this->msg;
    }
}

$obj = new myClass;
// echo $obj->msg;
// echo $obj->dti;
echo $obj->myTeam;
echo "<br>";
echo $obj->argentina();
echo "<br>";

$myChieldClassObj = new myChieldClass;
echo $myChieldClassObj->souduArabia();
