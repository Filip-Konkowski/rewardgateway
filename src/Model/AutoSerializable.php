<?php
declare(strict_types=1);

namespace App\Model;

use Serializable;

trait AutoSerializable
{
    /**
     * @param array $values
     * @return array Values of properties that should be serialized
     */
    public function serialize(array $values): array
    {
        $serializedData = [];

        foreach ($values as $property => $value) {
            if (is_array($value)) {
                $value = self::serialize($value);
            }

            if ($value instanceof Serializable) {
                $value = $value->serialize();
            }

            $serializedData[$property] = $value;
        }

        return $serializedData;
    }

    /**
     * Override this function if specific properties contain objects that need to be deserialized as well. Return an
     * array of which each key corresponds to an existing property and each value is a callable which handles the
     * deserialization:.
     *
     *   [
     *     'property' => [DesiredClass::class, 'deserialize']
     *   ]
     *
     * @return array
     */
    protected static function deserializationCallbacks(): array
    {
        return [];
    }
}
