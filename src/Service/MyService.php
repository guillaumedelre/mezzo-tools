<?php

namespace App\Service;

class MyService
{
    /**
     * @var array
     */
    protected $data = [];

    /**
     * @param string $key
     * @param array  $data
     */
    public function setDataBy(string $key, array $data)
    {
        $this->data[$key] = $data;
    }

    /**
     * @param string $key
     *
     * @return mixed
     */
    public function getDataByKey(string $key)
    {
        if (!isset($this->data[$key])) {
            throw new \LogicException();
        }

        return $this->data[$key];
    }
}
