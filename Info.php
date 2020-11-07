<?php

class Info
{
    public $arr_image_url;
    private $name;
    private $duration;
    private $rating;
    private $order;

    public function __construct($arr_image_url,$name,$duration,$rating,$order)
    {
        $this->arr_image_url=$arr_image_url;
        $this->order=$order;
        $this->duration=$duration;
        $this->rating=$rating;
        $this->name=$name;
    }
    public function GetArr()
    {
        return $this->arr_image_url;
    }
    public function GetOrder()
    {
        return $this->order;
    }
    public  function GetName()
    {
        return $this->name;
    }
    public  function GetDuration()
    {
        return $this->duration;
    }
    public function GetRating()
    {
        return $this->rating;
    }

}
?>
