<?php

namespace Sasedev\Doctrine\PostgresqlBundle;

use Doctrine\DBAL\Types\Type;
use Sasedev\Doctrine\PostgresqlBundle\DBAL\BigFloatArrayType;
use Sasedev\Doctrine\PostgresqlBundle\DBAL\BigFloatType;
use Sasedev\Doctrine\PostgresqlBundle\DBAL\BigIntArrayType;
use Sasedev\Doctrine\PostgresqlBundle\DBAL\BooleanArrayType;
use Sasedev\Doctrine\PostgresqlBundle\DBAL\BoxType;
use Sasedev\Doctrine\PostgresqlBundle\DBAL\DateIntervalType;
use Sasedev\Doctrine\PostgresqlBundle\DBAL\FloatArrayType;
use Sasedev\Doctrine\PostgresqlBundle\DBAL\HstoreArrayType;
use Sasedev\Doctrine\PostgresqlBundle\DBAL\HstoreType;
use Sasedev\Doctrine\PostgresqlBundle\DBAL\IntegerArrayType;
use Sasedev\Doctrine\PostgresqlBundle\DBAL\SmallIntArrayType;
use Sasedev\Doctrine\PostgresqlBundle\DBAL\TextArrayType;
use Sasedev\Doctrine\PostgresqlBundle\DBAL\TimeTzType;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class SasedevDoctrinePostgresqlBundle extends Bundle
{

	public function __construct()
	{
		if (Type::hasType(BigFloatType::BIGFLOAT)) {
			Type::overrideType(BigFloatType::BIGFLOAT, 'Sasedev\Doctrine\PostgresqlBundle\DBAL\BigFloatType');
		} else {
			Type::addType(BigFloatType::BIGFLOAT, 'Sasedev\Doctrine\PostgresqlBundle\DBAL\BigFloatType');
		}
		if (Type::hasType(BigFloatArrayType::BIGFLOATARRAY)) {
			Type::overrideType(BigFloatArrayType::BIGFLOATARRAY, 'Sasedev\Doctrine\PostgresqlBundle\DBAL\BigFloatArrayType');
		} else {
			Type::addType(BigFloatArrayType::BIGFLOATARRAY, 'Sasedev\Doctrine\PostgresqlBundle\DBAL\BigFloatArrayType');
		}
		if (Type::hasType(BigIntArrayType::BIGINTARRAY)) {
			Type::overrideType(BigIntArrayType::BIGINTARRAY, 'Sasedev\Doctrine\PostgresqlBundle\DBAL\BigIntArrayType');
		} else {
			Type::addType(BigIntArrayType::BIGINTARRAY, 'Sasedev\Doctrine\PostgresqlBundle\DBAL\BigIntArrayType');
		}
		if (Type::hasType(BooleanArrayType::BOOLEANARRAY)) {
			Type::overrideType(BooleanArrayType::BOOLEANARRAY, 'Sasedev\Doctrine\PostgresqlBundle\DBAL\BooleanArrayType');
		} else {
			Type::addType(BooleanArrayType::BOOLEANARRAY, 'Sasedev\Doctrine\PostgresqlBundle\DBAL\BooleanArrayType');
		}
		if (Type::hasType(BoxType::BOX)) {
			Type::overrideType(BoxType::BOX, 'Sasedev\Doctrine\PostgresqlBundle\DBAL\BoxType');
		} else {
			Type::addType(BoxType::BOX, 'Sasedev\Doctrine\PostgresqlBundle\DBAL\BoxType');
		}
		if (Type::hasType(DateIntervalType::DATEINTERVAL)) {
			Type::overrideType(DateIntervalType::DATEINTERVAL, 'Sasedev\Doctrine\PostgresqlBundle\DBAL\DateIntervalType');
		} else {
			Type::addType(DateIntervalType::DATEINTERVAL, 'Sasedev\Doctrine\PostgresqlBundle\DBAL\DateIntervalType');
		}
		if (Type::hasType(FloatArrayType::FLOATARRAY)) {
			Type::overrideType(FloatArrayType::FLOATARRAY, 'Sasedev\Doctrine\PostgresqlBundle\DBAL\FloatArrayType');
		} else {
			Type::addType(FloatArrayType::FLOATARRAY, 'Sasedev\Doctrine\PostgresqlBundle\DBAL\FloatArrayType');
		}
		if (Type::hasType(HstoreType::HSTORE)) {
			Type::overrideType(HstoreType::HSTORE, 'Sasedev\Doctrine\PostgresqlBundle\DBAL\HstoreType');
		} else {
			Type::addType(HstoreType::HSTORE, 'Sasedev\Doctrine\PostgresqlBundle\DBAL\HstoreType');
		}
		if (Type::hasType(HstoreArrayType::HSTOREARRAY)) {
			Type::overrideType(HstoreArrayType::HSTOREARRAY, 'Sasedev\Doctrine\PostgresqlBundle\DBAL\HstoreArrayType');
		} else {
			Type::addType(HstoreArrayType::HSTOREARRAY, 'Sasedev\Doctrine\PostgresqlBundle\DBAL\HstoreArrayType');
		}
		if (Type::hasType(IntegerArrayType::INTEGERARRAY)) {
			Type::overrideType(IntegerArrayType::INTEGERARRAY, 'Sasedev\Doctrine\PostgresqlBundle\DBAL\IntegerArrayType');
		} else {
			Type::addType(IntegerArrayType::INTEGERARRAY, 'Sasedev\Doctrine\PostgresqlBundle\DBAL\IntegerArrayType');
		}
		if (Type::hasType(SmallIntArrayType::SMALLINTARRAY)) {
			Type::overrideType(SmallIntArrayType::SMALLINTARRAY, 'Sasedev\Doctrine\PostgresqlBundle\DBAL\SmallIntArrayType');
		} else {
			Type::addType(SmallIntArrayType::SMALLINTARRAY, 'Sasedev\Doctrine\PostgresqlBundle\DBAL\SmallIntArrayType');
		}
		if (Type::hasType(TextArrayType::TEXTARRAY)) {
			Type::overrideType(TextArrayType::TEXTARRAY, 'Sasedev\Doctrine\PostgresqlBundle\DBAL\TextArrayType');
		} else {
			Type::addType(TextArrayType::TEXTARRAY, 'Sasedev\Doctrine\PostgresqlBundle\DBAL\TextArrayType');
		}
		if (Type::hasType(TimeTzType::TIMETZ)) {
			Type::overrideType(TimeTzType::TIMETZ, 'Sasedev\Doctrine\PostgresqlBundle\DBAL\TimeTzType');
		} else {
			Type::addType(TimeTzType::TIMETZ, 'Sasedev\Doctrine\PostgresqlBundle\DBAL\TimeTzType');
		}
	}
}
