<?php

namespace MongoDB\BSON;

use JetBrains\PhpStorm\Deprecated;
use JsonSerializable;
use MongoDB\Driver\Exception\InvalidArgumentException;
use Stringable;

/**
 * BSON type for the "Undefined" type. This BSON type is deprecated, and this class can not be instantiated. It will be created
 * from a BSON undefined type while converting BSON to PHP, and can also be converted back into BSON while storing documents in the database.
 *
 * @link https://secure.php.net/manual/en/class.mongodb-bson-undefined.php
 */
#[Deprecated]
final class Undefined implements JsonSerializable, Type, Stringable
{
    final private function __construct() {}

    /**
     * Returns a representation that can be converted to JSON
     * @since 1.2.0
     * @link https://www.php.net/manual/en/mongodb-bson-undefined.jsonserialize.php
     * @return mixed data which can be serialized by json_encode()
     * @throws InvalidArgumentException on argument parsing errors
     */
    final public function jsonSerialize(): mixed {}

    /**
     * Returns the Undefined as a string
     * @return string Returns the string representation of this Symbol.
     */
    final public function __toString(): string {}
}
