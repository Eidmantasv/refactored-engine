<?php

/*
$file = 'data.json';
$a = jsonHere($file);
echo '<pre>';
print_r($a);
echo '</pre>';


class jsonHere
{
    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function jsonh($data){
        $this->data = file_get_contents($data);
    }
}
*/

$file = 'data.json';
$a = new JsonToObject($file);

$a->readDataAndSave();
$a->printData();

class JsonToObject
{
    private $fileNameString;
    private $objectData;

    public function __construct($filename)

    {
        $this->fileNameString =$filename;
    }

    function readDataAndSave()
    {
        $content = file_get_contents($this->fileNameString);
        $convertedData = json_decode($content);
        $this->objectData = $convertedData;
    }

    function printData()
    {
        print_r($this->objectData);
    }
}