<?php
declare(strict_types=1);

namespace App\Formatter\Interfaces;


interface AvatarFormatter
{
    /**
     * @param string $data
     * @return bool
     */
    public static function isAvatarFormatHttp(string $data): bool ;
}