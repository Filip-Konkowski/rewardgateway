<?php
declare(strict_types=1);

namespace App\Model;


interface CanBeRepresentedAsString
{
    /**
     * @return string
     */
    public function toString(): string;

    /**
     * @return string
     */
    public function __toString();
}