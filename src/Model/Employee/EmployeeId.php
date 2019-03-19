<?php
declare(strict_types=1);

namespace App\Model\Employee;

use App\Model\AutoSerializable;
use App\Model\CanBeRepresentedAsString;
use App\Model\StringValueObjectTrait;
use App\Model\ValueObject;
use Assert\Assertion;

class EmployeeId implements ValueObject, CanBeRepresentedAsString
{
    use StringValueObjectTrait;
    use AutoSerializable;

    protected function validate()
    {
        Assertion::uuid($this->value, 'ID (%s) is not valid.');
    }
}