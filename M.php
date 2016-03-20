<?php

abstract class M {
    /** @var string 日付フォーマット */
    protected $limit;
    /** @var DateTime */
    protected $diff;

    /**
     * M constructor.
     * @param $limit string 日付フォーマット
     */
    public function __construct($limit)
    {
        $limit = new DateTime($limit);
        $now   = new DateTime();
        $this->diff  = $now->diff($limit);
    }

    /**
     * @return string
     */
    abstract public function message();
}
