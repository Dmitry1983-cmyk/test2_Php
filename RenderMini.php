<?php

include_once "Info.php";

class RenderMini
{
    public $info;


    public function __construct($info)
    {
        $this->info=$info;
    }
    public function Render()
    {
        return'
                <a href="Restaurant.php?id='.$this->info->GetName().'" class="card wow animate__animated animate__fadeInUp" data-wow-delay="0.2s">
                    <img src="'.$this->info->GetArr().'" alt="image" class="card-omage" />
                    <div class="card-text">
                        <div class="card-heading">
                            <h3 class="card-title">'.$this->info->GetName().'</h3>
                            <span class="card-tag tag">'.$this->info->GetDuration().'</span>
                        </div>
                        <div class="card-info">
                            <div class="rating">
                                <img src="img/star.svg" alt="rating">
                                '.$this->info->GetRating().'</div>
                            <div class="price">'.$this->info->GetOrder().'</div>
                            <div class="category"></div>
                        </div>
                    </div>
                </a>
                <!-- /.card -->
        ';
    }

}

?>