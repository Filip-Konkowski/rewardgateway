<?php
declare(strict_types=1);

namespace App\Model\Employee;

use App\Model\AutoSerializable;
use App\Model\CanBeRepresentedAsString;
use App\Model\StringValueObjectTrait;
use App\Model\ValueObject;

class Title implements ValueObject, CanBeRepresentedAsString
{
    use StringValueObjectTrait;
    use AutoSerializable;
}