<?php
declare(strict_types=1);

namespace App\Model;


interface ValueObject
{
    /**
     * @return mixed
     */
    public function value();
}