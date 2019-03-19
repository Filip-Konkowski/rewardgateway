<?php
declare(strict_types=1);

namespace App\Formatter;


use App\Formatter\Interfaces\AvatarFormatter as AvatarFormatterInterface;

class AvatarFormatChecker implements AvatarFormatterInterface
{
    /**
     * @param string $data
     * @return bool
     */
    public static function isAvatarFormatHttp(string $data): bool
    {
        return strpos($data, 'http://httpstat.us/503') !== false;
    }
}