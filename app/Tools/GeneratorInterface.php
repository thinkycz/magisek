<?php

namespace App\Tools;

interface GeneratorInterface
{
    public function beginGenerate($file);

    public function generateItem(ItemInterface $item);

    public function endGenerate();

    public function flush();
}
