<?php

require __DIR__.'/../vendor/autoload.php';

$encoderFactory = new \MarcosSegovia\Factory\EncoderFactory();
$encoderFactory->addEncoderFactory('xml',
    function(){ return new \MarcosSegovia\Encoders\XmlEncoder();});
$encoderFactory->addEncoderFactory('json',
    function(){ return new \MarcosSegovia\Encoders\JsonEncoder();});

$genericEncoder = new \MarcosSegovia\Encoders\GenericEncoder($encoderFactory);

$data = 'Natsu Lucy Gray Erza Happy';

$jsonEncodeData = $genericEncoder->encodeToFormat($data, 'json');

echo $jsonEncodeData;
