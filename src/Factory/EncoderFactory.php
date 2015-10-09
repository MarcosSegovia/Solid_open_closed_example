<?php

namespace MarcosSegovia\Factory;


class EncoderFactory implements EncoderFactoryInterface
{
    private $factories = array();

    public function addEncoderFactory($format, callable $factory)
    {
        $this->factories[$format] = $factory;
    }

    public function createForFormat($format)
    {
        // TODO: Implement createForFormat() method.

        $factory = $this->factories[$format];
        $encoder = $factory();

        return $encoder;
    }
}