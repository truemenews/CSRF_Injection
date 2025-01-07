<?php

class BeforeLog 
{
    protected $remove = ['link', 'group_link'];

    protected $results = [];

    public function parse($voucher=[])
    {
        foreach ($voucher as $key => $value) {
            if (in_array($key, $this->remove)) continue;

            $this->results[$key] = $value;
        }

        return $this->results;
    }
}