<?php

namespace MongoDB\Driver;

use Iterator;
use MongoDB\BSON\Int64;
use MongoDB\Driver\Exception\InvalidArgumentException;

/**
 * This interface is implemented by MongoDB\Driver\Cursor but may also be used for type-hinting and userland classes.
 * @link https://www.php.net/manual/en/class.mongodb-driver-cursorinterface.php
 * @since 1.6.0
 */
interface CursorInterface extends Iterator
{
    public function current(): array|object|null;

    /**
     * Returns the cursor ID associated with this cursor. A cursor ID uniquely identifies the cursor on the server.
     * @return Int64 Returns the cursor ID for this cursor.
     * @throws InvalidArgumentException
     * @link https://www.php.net/manual/en/mongodb-driver-cursorinterface.getid.php
     */
    public function getId(): Int64;

    /**
     * Returns the MongoDB\Driver\Server associated with this cursor.
     * This is the server that executed the MongoDB\Driver\Query or MongoDB\Driver\Command.
     * @link https://www.php.net/manual/en/mongodb-driver-cursorinterface.getserver.php
     * @return Server Returns the MongoDB\Driver\Server associated with this cursor.
     * @throws InvalidArgumentException
     */
    public function getServer(): Server;

    /**
     * Checks whether the cursor may have additional results available to read.
     * @link https://www.php.net/manual/en/mongodb-driver-cursorinterface.isdead.php
     * @return bool Returns TRUE if additional results are not available, and FALSE otherwise.
     * @throws InvalidArgumentException
     */
    public function isDead(): bool;

    public function key(): ?int;

    /**
     * Sets a type map to use for BSON unserialization
     * @link https://www.php.net/manual/en/mongodb-driver-cursorinterface.settypemap.php
     * @param array $typemap Type map configuration.
     * @throws InvalidArgumentException
     */
    public function setTypeMap(array $typemap): void;

    /**
     * Iterates the cursor and returns its results in an array.
     * MongoDB\Driver\CursorInterface::setTypeMap() may be used to control how documents are unserialized into PHP values.
     * @return array Returns an array containing all results for this cursor.
     * @throws InvalidArgumentException
     */
    public function toArray(): array;
}
