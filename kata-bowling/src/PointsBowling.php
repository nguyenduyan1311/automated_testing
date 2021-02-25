<?php


class PointsBowling
{
    public $point_;
    public $frames = [[1,2],[1,2],[1,2],[1,2],[1,2],[1,2],[1,2],[1,2],[1,2],[1,2]];
    public function __construct($point,$frames)
    {
        $this->point = $point;
        $this->frames = $frames;
    }
    function check(){
        return $this->getPoints();
    }

    public function getPoints($frames)
    {
        for ($i=0;$i<count($frames);$i++){
            for ($j=0;$j<2;$j++){

            }
        }
    }
}