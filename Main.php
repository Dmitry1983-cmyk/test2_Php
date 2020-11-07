<?php

include_once "RenderFull.php";
class Main
{
    public $render_full=[];

    public function __construct($render_full)
    {

        for ($i=0;$i<count($render_full)/(count($render_full)/3);$i++)
        {
            $tmp=[];
            for ($j=0;$j<6;$j++)
            {
                array_push($tmp,$render_full[($i*6)+$j]);
            }
            array_push($this->render_full,(new RenderFull($tmp)));
        }
    }

    public function generatePage($page_num)
    {
        setcookie("cookie",($page_num+1));
        return $this->render_full[$page_num]->Render().'<div style="margin-top: 30px; display:flex;justify-content: center;">'.$this->addPagin().'</div>';
    }

    public function addPagin()
    {
        $tmp='';

        for ($i=0;$i<count($this->render_full);$i++)
        {
            $tmp=$tmp. '<button class="btn" name="btn" value="'.($i+(1)).'">'.($i+(1)).'</button>';
        }
        return $tmp;
    }


}
?>
