<?php

namespace MarcosSegovia\Factory;

interface EncoderFactoryInterface
{
    public function createForFormat($format);
}