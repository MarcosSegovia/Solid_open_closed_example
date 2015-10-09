<?php


namespace MarcosSegovia\Encoders;


class JsonEncoder implements EncoderInterface
{
    public function encode($data)
    {
        // TODO: Implement encode() method.
        $data = $this->prepareData($data);
        return json_encode($data);
    }

    private function prepareData($data)
    {
        // TODO: Implement prepareData() method.
        $data = $this->forceArray($data);

        return $data;
    }

    private function forceArray($data)
    {
        $strings = explode(" ",$data);
        $data = array();
        foreach($strings as $key=>$string)
        {
            $data['member'.($key+1)] = $string;
        }
        return $data;
    }
}