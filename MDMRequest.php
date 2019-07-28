<?php

class MDMRequest implements JsonSerializable
{
    public $root;

    public $rootElementName;

    public function __construct($root, $rootElementName)
    {
        $this->root = $root;
        $this->rootElementName = $rootElementName;
    }

    public function jsonSerialize()
    {
       $tmpObject = new \stdClass();
       $tmpObject->{$this->rootElementName} = $this->root;
       return $tmpObject;
    }
}
