<?php
namespace Jaeger\Thrift\Agent;

/**
 * Autogenerated by Thrift Compiler (0.13.0)
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

class ThrottlingConfig
{
    static public $isValidate = false;

    static public $_TSPEC = array(
        1 => array(
            'var' => 'maxOperations',
            'isRequired' => true,
            'type' => TType::I32,
        ),
        2 => array(
            'var' => 'creditsPerSecond',
            'isRequired' => true,
            'type' => TType::DOUBLE,
        ),
        3 => array(
            'var' => 'maxBalance',
            'isRequired' => true,
            'type' => TType::DOUBLE,
        ),
    );

    /**
     * @var int
     */
    public $maxOperations = null;
    /**
     * @var double
     */
    public $creditsPerSecond = null;
    /**
     * @var double
     */
    public $maxBalance = null;

    public function __construct($vals = null)
    {
        if (is_array($vals)) {
            if (isset($vals['maxOperations'])) {
                $this->maxOperations = $vals['maxOperations'];
            }
            if (isset($vals['creditsPerSecond'])) {
                $this->creditsPerSecond = $vals['creditsPerSecond'];
            }
            if (isset($vals['maxBalance'])) {
                $this->maxBalance = $vals['maxBalance'];
            }
        }
    }

    public function getName()
    {
        return 'ThrottlingConfig';
    }


    public function read($input)
    {
        $xfer = 0;
        $fname = null;
        $ftype = 0;
        $fid = 0;
        $xfer += $input->readStructBegin($fname);
        while (true) {
            $xfer += $input->readFieldBegin($fname, $ftype, $fid);
            if ($ftype == TType::STOP) {
                break;
            }
            switch ($fid) {
                case 1:
                    if ($ftype == TType::I32) {
                        $xfer += $input->readI32($this->maxOperations);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 2:
                    if ($ftype == TType::DOUBLE) {
                        $xfer += $input->readDouble($this->creditsPerSecond);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 3:
                    if ($ftype == TType::DOUBLE) {
                        $xfer += $input->readDouble($this->maxBalance);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                default:
                    $xfer += $input->skip($ftype);
                    break;
            }
            $xfer += $input->readFieldEnd();
        }
        $xfer += $input->readStructEnd();
        return $xfer;
    }

    public function write($output)
    {
        $xfer = 0;
        $xfer += $output->writeStructBegin('ThrottlingConfig');
        if ($this->maxOperations !== null) {
            $xfer += $output->writeFieldBegin('maxOperations', TType::I32, 1);
            $xfer += $output->writeI32($this->maxOperations);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->creditsPerSecond !== null) {
            $xfer += $output->writeFieldBegin('creditsPerSecond', TType::DOUBLE, 2);
            $xfer += $output->writeDouble($this->creditsPerSecond);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->maxBalance !== null) {
            $xfer += $output->writeFieldBegin('maxBalance', TType::DOUBLE, 3);
            $xfer += $output->writeDouble($this->maxBalance);
            $xfer += $output->writeFieldEnd();
        }
        $xfer += $output->writeFieldStop();
        $xfer += $output->writeStructEnd();
        return $xfer;
    }
}