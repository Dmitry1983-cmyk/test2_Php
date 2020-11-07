<?php

include_once "RenderMini.php";
class RenderFull
{
    public $r_mini=[];

    public function __construct($r_mini)
    {
        for($i=0;$i<count($r_mini);$i++)
        {
            array_push($this->r_mini,(new RenderMini($r_mini[$i])) );
        }
    }

    public function Render()
    {
        $tmp='';
        for ($i=0;$i<count($this->r_mini);$i++)
        {
            $tmp =$tmp.$this->r_mini[$i]->Render();
        }
        //return $tmp;
        return '<div class="cards">'.$tmp.'</div>';
    }
}

?>
