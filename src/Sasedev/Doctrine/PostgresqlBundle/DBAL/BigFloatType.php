<?php

namespace Sasedev\Doctrine\PostgresqlBundle\DBAL;

use Doctrine\DBAL\Platforms\AbstractPlatform;
use Doctrine\DBAL\Types\Type;

/**
 *
 * @author sasedev <seif.salah@gmail.com>
 */
class BigFloatType extends Type
{

	/**
	 *
	 * @var string
	 */
	const BIGFLOAT = 'bigfloat';

	/**
	 *
	 * {@inheritDoc} @see Type::getName()
	 */
	public function getName()
	{
		return self::BIGFLOAT;
	}

	/**
	 *
	 * {@inheritDoc} @see Type::getSQLDeclaration()
	 */
	public function getSQLDeclaration(array $fieldDeclaration, AbstractPlatform $platform)
	{
		return "float8";
	}

	/**
	 *
	 * {@inheritDoc} @see Type::convertToPHPValue()
	 */
	public function convertToPHPValue($value, AbstractPlatform $platform)
	{
		return (null === $value) ? null : (double) $value;
	}
}
