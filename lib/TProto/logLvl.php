<?php
namespace OCA\Cloud_Py_API\TProto;

/**
 * Autogenerated by Thrift Compiler (0.17.0)
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 *  @generated
 */
use Thrift\Base\TBase;
use Thrift\Type\TType;
use Thrift\Type\TMessageType;
use Thrift\Exception\TException;
use Thrift\Exception\TProtocolException;
use Thrift\Protocol\TProtocol;
use Thrift\Protocol\TBinaryProtocolAccelerated;
use Thrift\Exception\TApplicationException;

final class logLvl
{
    const DEBUG = 0;

    const INFO = 1;

    const WARN = 2;

    const ERROR = 3;

    const FATAL = 4;

    static public $__names = array(
        0 => 'DEBUG',
        1 => 'INFO',
        2 => 'WARN',
        3 => 'ERROR',
        4 => 'FATAL',
    );
}
