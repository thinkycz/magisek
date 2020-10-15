<?php

namespace App\Tools;

use Exception;
use InvalidArgumentException;

abstract class BaseItem implements ItemInterface
{
    /** @var array */
    protected $row = [];

    /** @var array */
    protected $required = array();

    /**
     * Check if required fields are set up.
     * @throws Exception
     */
    public function checkRequired()
    {
        $diff = array_diff_key(array_flip($this->required), $this->row);

        if ($diff) {
            throw new InvalidArgumentException('These elements are required and have not been set: ' . implode(array_keys($diff), ","));
        }
    }

    /**
     * @return array
     * @throws Exception
     */
    public function getRow()
    {
        $this->checkRequired();
        return $this->row;
    }
}
