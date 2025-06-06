<?php

namespace MongoDB\BSON;

use JsonSerializable;
use MongoDB\Driver\Exception\InvalidArgumentException;
use Stringable;

/**
 * Class Regex
 * @link https://php.net/manual/en/class.mongodb-bson-regex.php
 */
final class Regex implements RegexInterface, JsonSerializable, Type, Stringable
{
    /**
     * Construct a new Regex
     * @link https://php.net/manual/en/mongodb-bson-regex.construct.php
     */
    final public function __construct(string $pattern, string $flags = '') {}

    /**
     * Returns the Regex's flags
     * @link https://php.net/manual/en/mongodb-bson-regex.getflags.php
     */
    final public function getFlags(): string {}

    /**
     * Returns the Regex's pattern
     * @link https://php.net/manual/en/mongodb-bson-regex.getpattern.php
     */
    final public function getPattern(): string {}

    /**
     * Returns the string representation of this Regex
     * @link https://php.net/manual/en/mongodb-bson-regex.tostring.php
     */
    final public function __toString(): string {}

    public static function __set_state(array $properties): self {}

    /**
     * Returns a representation that can be converted to JSON
     * @since 1.2.0
     * @link https://www.php.net/manual/en/mongodb-bson-regex.jsonserialize.php
     * @return mixed data which can be serialized by json_encode()
     * @throws InvalidArgumentException on argument parsing errors
     */
    final public function jsonSerialize(): mixed {}
}
