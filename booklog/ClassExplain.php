<?php

class Explain{
    private $bookName;
    private $bookTarget;
    private $bookPoint;

    public function __construct($bookName, $bookTarget, $bookPoint){
        $this->bookName=$bookName;
        $this->bookTarget=$bookTarget;
        $this->bookPoint=$bookPoint;
    }
    public static function findByName($Explains, $name){
        foreach($Explains as $explain){
            if($explain->bookName==$name){
                return $explain;
            }
        }
    }

    public function getbookName(){
        return $this->bookName;
    }
    public function getbookTarget(){
        return $this->bookTarget;
    }
    public function getbookPoint(){
        return $this->bookPoint;
    }
}
?>