<?php
declare(strict_types=1);

namespace App\Model;

use Assert\Assertion;

trait StringValueObjectTrait
{
    /**
     * @var string
     */
    protected $value;

    public function __construct(string $value)
    {
        $this->value = $value;

        $this->validate();
    }

    /**
     * @param $value
     * @return static
     */
    public static function fromString($value)
    {
        return new static($value);
    }

    /**
     * @return string
     */
    public function value(): string
    {
        return $this->value;
    }

    /**
     * @throw InvalidArgumentException
     */
    protected function validate(): void
    {
        // todo here validation for generic value object
    }

    /**
     * @return string
     */
    public function toString(): string
    {
        return (string) $this->value();
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toString();
    }
}