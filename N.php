<?php

require_once './M.php';

class N extends M
{

    /**
     * @param $days
     * @return int
     */
    private function week($days)
    {
        return intval($days / 7);
    }

    /**
     * @return int
     */
    private function month()
    {
        return $this->diff->m;
    }

    /**
     * @return int
     */
    private function days()
    {
        return $this->diff->days;
    }

    /**
     * @return string
     */
    public function message()
    {
        $month = $this->month();
        $days  = $this->days();
        $week  = $this->week($days);

        $msg = "残り / {$week}週 / {$month}ヶ月 / {$days}日";
        return $msg;
    }
}
