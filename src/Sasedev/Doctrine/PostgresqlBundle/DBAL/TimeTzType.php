<?php

namespace Sasedev\Doctrine\PostgresqlBundle\DBAL;

use Doctrine\DBAL\Platforms\AbstractPlatform;
use Doctrine\DBAL\Types\ConversionException;
use Doctrine\DBAL\Types\Type;

/**
 *
 * @author sasedev <seif.salah@gmail.com>
 */
class TimeTzType extends Type
{

	/**
	 *
	 * @var string
	 */
	const TIMETZ = 'timetz';

	/**
	 *
	 * {@inheritDoc} @see Type::getName()
	 */
	public function getName()
	{
		return self::TIMETZ;
	}

	/**
	 *
	 * {@inheritDoc} @see Type::getSQLDeclaration()
	 */
	public function getSQLDeclaration(array $fieldDeclaration, AbstractPlatform $platform)
	{
		return $platform->getDoctrineTypeMapping('TIMETZ');
	}

	/**
	 *
	 * {@inheritDoc} @see Type::convertToDatabaseValue()
	 */
	public function convertToDatabaseValue($value, AbstractPlatform $platform)
	{
		return ($value !== null) ? $value->format('H:i:s.uO') : null;
	}

	/**
	 *
	 * {@inheritDoc} @see Type::convertToPHPValue()
	 */
	public function convertToPHPValue($value, AbstractPlatform $platform)
	{
		if ($value === null) {
			return null;
		}
		try {
			$val = \DateTime::createFromFormat('H:i:sO', $value);
			if ($val === false) {
				throw ConversionException::conversionFailedFormat($value, $this->getName(), 'H:i:s');
			}
		} catch (\Exception $e) {
			$val = \DateTime::createFromFormat('H:i:s.uO', $value);
			if (!$val) {
				throw ConversionException::conversionFailedFormat($value, $this->getName(), 'H:i:s.uO');
			}
		}

		return $val;
	}
}
