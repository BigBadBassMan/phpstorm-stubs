<?php

namespace MongoDB\Driver;

use MongoDB\BSON\Serializable;
use MongoDB\Driver\Exception\InvalidArgumentException;
use stdClass;

/**
 * Class ReadPreference
 * @link https://php.net/manual/en/class.mongodb-driver-readpreference.php
 */
final class ReadPreference implements Serializable
{
    /**
     * @since 1.7.0
     */
    public const PRIMARY = 'primary';

    /**
     * @since 1.7.0
     */
    public const PRIMARY_PREFERRED = 'primaryPreferred';

    /**
     * @since 1.7.0
     */
    public const SECONDARY = 'secondary';

    /**
     * @since 1.7.0
     */
    public const SECONDARY_PREFERRED = 'secondaryPreferred';

    /**
     * @since 1.7.0
     */
    public const NEAREST = 'nearest';

    /**
     * @since 1.2.0
     */
    public const NO_MAX_STALENESS = -1;

    /**
     * @since 1.2.0
     */
    public const SMALLEST_MAX_STALENESS_SECONDS = 90;

    /**
     * Construct immutable ReadPreference
     * @link https://php.net/manual/en/mongodb-driver-readpreference.construct.php
     * @param string $mode
     * @param array|null $tagSets
     * @param array|null $options
     * @throws InvalidArgumentException if mode is invalid or if tagSets is provided for a primary read preference.
     */
    final public function __construct(string $mode, ?array $tagSets = null, ?array $options = null) {}

    public static function __set_state(array $properties) {}

    /**
     * Returns the ReadPreference's "hedge" option
     * @since 1.8.0
     * @link https://www.php.net/manual/en/mongodb-driver-readpreference.gethedge.php
     */
    final public function getHedge(): ?object {}

    /**
     * Returns the ReadPreference's "mode" option as a string
     * @since 1.7.0
     * @link https://php.net/manual/en/mongodb-driver-readpreference.getmodestring.php
     * @throws InvalidArgumentException
     */
    final public function getModeString(): string {}

    /**
     * Returns the ReadPreference's "tagSets" option
     * @link https://php.net/manual/en/mongodb-driver-readpreference.gettagsets.php
     */
    final public function getTagSets(): array {}

    /**
     * Returns an object for BSON serialization
     * @since 1.2.0
     * @link https://www.php.net/manual/en/mongodb-driver-readpreference.bsonserialize.php
     * @return object Returns an object for serializing the WriteConcern as BSON.
     * @throws InvalidArgumentException
     */
    final public function bsonSerialize(): stdClass {}

    final public function getMaxStalenessSeconds() {}
}
