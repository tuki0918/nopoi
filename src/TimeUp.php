<?php

namespace App\Classes;

use \DateTime;

abstract class TimeUp {
    /** @var string 日付フォーマット */
    protected $end;
    /** @var DateTime */
    protected $diff;

    /**
     * TimeUp constructor.
     * @param $end string 日付フォーマット
     */
    public function __construct($end)
    {
        $end = new DateTime($end);
        $now = new DateTime();
        $this->diff  = $now->diff($end);
    }

    /**
     * @return string
     */
    abstract public function message();
}
