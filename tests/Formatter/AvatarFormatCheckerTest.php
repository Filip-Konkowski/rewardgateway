<?php
declare(strict_types=1);

namespace App\Tests\Formatter;

use App\Formatter\AvatarFormatChecker;
use PHPUnit\Framework\TestCase;

class AvatarFormatCheckerTest extends TestCase
{
    public function testCheckForHttpFormat()
    {
        $avatarFromUrl = "http://httpstat.us/503";

        $formatter = new AvatarFormatChecker();
        $result = $formatter->isAvatarFormatHttp($avatarFromUrl);

        $this->assertTrue($result);
    }

    public function testCheckForBase64Format()
    {
        $avatarFromBase64 = "data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAADsklEQVRYR63Xdwincx";
        $formatter = new AvatarFormatChecker();
        $result = $formatter->isAvatarFormatHttp($avatarFromBase64);

        $this->assertFalse($result);
    }
}