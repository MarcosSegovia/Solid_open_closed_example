<?php


namespace MarcosSegovia\Encoders;

use MarcosSegovia\Factory\EncoderFactoryInterface;

class GenericEncoder
{
    private $encoder_factory;

    public function __construct(EncoderFactoryInterface $encoderFactory)
    {
        $this->encoder_factory = $encoderFactory;
    }

    public function encodeToFormat($data, $format)
    {
        $encoder = $this->encoder_factory->createForFormat($format);

        return $encoder->encode($data);
    }
}