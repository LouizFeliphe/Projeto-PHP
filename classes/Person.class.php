<?php 
    class Person{
        //properties and methods goes here
        public $name;
        public $eyecolor;
        public $age;
        public static $drinking = 21;

        public function __construct($name, $eyecolor, $age){
            $this->name = $name;
            $this->eyecolor = $eyecolor;
            $this->age = $age;
        }

        public function setName(string $name){
            $this->name = $name;
            return $this->name;
        }

        public function getDA() {
            return self::$drinking;
        }
       
        public static function setDrinking($newDA) {

            self::$drinking = $newDA;
           
        }
        
    }

   

?>