<?php
class User{
    //Properties
    public $name;
    private $age;
    public $gender;
    public $hobby;

    //Constructor
    public function __construct($name, $age, $gender="none", $hobby ="none" ){
        $this->name = $name;
        $this->age = $age;
        $this->gender = $gender;
        $this->hobby = $hobby;
    }
    public function getInfo(){
        return "Name: " . $this->name . ", Age: " . $this->age . ", Gender: " . $this->gender;
}
}

$user1 = new User("Floxy", "16", "female","dancing"); 
$user2 = new User("Mark", "31", "male");

echo $user1->getInfo() ."<br>";

echo $user2->getInfo();