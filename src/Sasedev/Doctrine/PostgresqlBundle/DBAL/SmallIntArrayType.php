<?php
namespace Sasedev\Doctrine\PostgresqlBundle\DBAL;

/**
 *
 * @author sasedev <seif.salah@gmail.com>
 *
 */
class SmallIntArrayType extends AbstractArrayType
{
	const SMALLINTARRAY = 'smallint[]';

	protected $name = self::SMALLINTARRAY;

	protected $innerTypeName = 'smallint';
}
