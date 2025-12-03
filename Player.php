<?php 
class Player {
    public $name;
    public $health;
    public $power;
    public $respect;
    
    public function __construct($name){
        $this->name = $name;
        $this->health = 100;
        $this->power = 0;
        $this->respect = 0;

    }

    public function beg(){
        $this->power += 5;
        $this->respect -= 10;
        echo "stats for " . $this->name . " health: " . $this->health . " Power:" . $this->power . " respect: " . $this->respect . "<br>";
    }

    public function Weakfight(){
        if($this->power > rand(0,10)){
            $this->power += 10;
            echo "won the fight" . "<br>";
        } else {
            $this->health -= 10;
            echo "lost the fight" . "<br>";
        }
        $this->respect -= 10;
        echo "stats for " . $this->name . " health: " . $this->health . " Power:" . $this->power . " respect: " . $this->respect . "<br>";
    }
    public function Mediumfight(){
        if($this->power > rand(10,30)){
            $this->power += 30;
            echo "won the fight" . "<br>";
        } else {
            $this->health -= 30;
            echo "lost the fight" . "<br>";
        }
        if ($this->health < 0){
            echo "your character died" . "<br>";
        }
        echo "stats for " . $this->name . " health: " . $this->health . " Power:" . $this->power . " respect: " . $this->respect . "<br>";
    }
    public function Strongfight(){
        if($this->power > rand(30,50)){
            $this->power += 50;
            echo "won the fight" . "<br>";
        } else {
            $this->health -= 50;
            echo "lost the fight" . "<br>";
        }
        $this->respect += 30;
        if ($this->health < 0){
            echo "your character died" . "<br>";
        }
        echo "stats for " . $this->name . " health: " . $this->health . " Power:" . $this->power . " respect: " . $this->respect . "<br>";
    }
    public function TheFinalFight(){
        if($this->power > rand(100,1000)){
            $this->power += 1000;
            echo "won the fight" . "<br>";
        } else {
            $this->health -= 1000;
            echo "lost the fight" . "<br>";
        }
        $this->respect += 1000;
        if ($this->health < 0){
            echo "your character died" . "<br>";
        }
        echo "stats for " . $this->name . "health: " . $this->health . " Power:" . $this->power . " respect: " . $this->respect . "<br>";
    }
    public function FinishStory(){
        if($this->power<100){
            echo "your character was a weakling" . "<br>";
        } elseif ($this->power>100 && $this->power<100){
            echo "your character was a strong guy" . "<br>";
        } elseif ($this->power>1000){
            echo "your character was a superhero" . "<br>";
        }
        if ($this->respect<100){
            echo "noone knows or cares about your character" . "<br>";
        } elseif ($this->respect>100 && $this->respect<100 ){
            echo "your character was a good guy" . "<br>";
        }  elseif ($this->respect>1000){
            echo "your character was a hero!" . "<br>";
        }
        if ($this->health < 0){
            echo "your character is a ghost or zombie or demon or angel" . "<br>";
        }
        echo "stats for " . $this->name . " health: " . $this->health . " Power:" . $this->power . " respect: " . $this->respect . "<br>";
    }
}
    
    

