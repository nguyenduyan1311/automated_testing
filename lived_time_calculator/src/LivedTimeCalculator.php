<?php


class LivedTimeCalculator
{
    public $a;
    public $b;
    public $c;
    public function __construct($a,$b,$c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }
    function check()
    {
        if ($this->checkDate()) {
            return $this->getLivedHours();
        }
        return "Không định dạng được";
    }

    public function getLivedHours()
    {
        $tz  = new DateTimeZone('Asia/Bangkok');
        $birthday = DateTime::createFromFormat('m/d/Y', $this->a . '/' . $this->b . '/' . $this->c, $tz);
        $time_now = new DateTime('now');
        return "Bạn đã sống được: " . $time_now->diff($birthday)->y . " năm, " . floor(($time_now->diff($birthday)->days)/30) . " tháng, " . floor(($time_now->diff($birthday)->days)/7) . " tuần, " . $time_now->diff($birthday)->days . " ngày, " . ($time_now->diff($birthday)->days)*24 . " giờ";
    }
    public function checkDate(): bool
    {
        return checkdate($this->a,$this->b,$this->c);
    }
}