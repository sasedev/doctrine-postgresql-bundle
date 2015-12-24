<?php
namespace Sasedev\Doctrine\PostgresqlBundle\DBAL;

/**
 *
 * @author sasedev <seif.salah@gmail.com>
 *
 */
class BooleanArrayType extends AbstractArrayType
{

	const BOOLEANARRAY = 'boolean[]';

	protected $name = self::BOOLEANARRAY;

	protected $innerTypeName = 'boolean';
}
