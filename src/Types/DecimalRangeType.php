<?php

declare(strict_types=1);

namespace Tpetry\PostgresqlEnhanced\Types;

use Doctrine\DBAL\Platforms\AbstractPlatform;
use Doctrine\DBAL\Types\Type;

class DecimalRangeType extends Type
{
    /**
     * The name of the type used within laravel.
     */
    public const LARAVEL_NAME = 'decimalrange';

    /**
     * Gets an array of database types that map to this Doctrine type.
     */
    public function getMappedDatabaseTypes(AbstractPlatform $platform)
    {
        return match ($platform->getName()) {
            'pgsql', 'postgres', 'postgresql' => [$this->getName()],
            default => [],
        };
    }

    /**
     * Gets the name of this type.
     */
    public function getName()
    {
        return 'numrange';
    }

    /**
     * Gets the SQL declaration snippet for a column of this type.
     */
    public function getSQLDeclaration(array $fieldDeclaration, AbstractPlatform $platform)
    {
        return 'numrange';
    }
}
