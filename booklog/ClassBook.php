<?php

class Book{
    private $BookName;
    private $BookCat;
    private $BookURL;
    private $BookImg;
    private static $count=0;

    public function __construct($BookName, $BookCat, $BookURL, $BookImg){
        $this->BookName=$BookName;
        $this->BookCat=$BookCat;
        $this->BookURL=$BookURL;
        $this->BookImg=$BookImg;
        self::$count+=1;

    }
    public static function findByName($Books, $name){
        foreach($Books as $book){
            if($book->BookName==$name){
                return $book;
            }
        }
    }

    public function getBookName(){
        return $this->BookName;
    }
    public function getBookCat(){
        return $this->BookCat;
    }
    public function getBookURL(){
        return $this->BookURL;
    }
    public function getBookImg(){
        return $this->BookImg;
    }

}


?>