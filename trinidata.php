<?php
ini_set("display_errors","On");
error_reporting(E_ALL);

require_once("MDMRequest.php");
require_once('MDMClient.php');

$mdmClient = new MDMClient(
    "http://demo.trinidata.ru/mdm/rest/",
    "test",
    "demo"
);

$replacements = require_once("replacements.php");

foreach($replacements as $targetTypeId => $attributeIdsMap) {
    $limit = 100;
    $offset = 0;
    $total = $mdmClient->getNumObjectsOfType($targetTypeId);
    $pages = intdiv($total, $limit) + ($total % $limit ? 1 : 0);
    $page = 0;

    do {
        $objects = $mdmClient->getObjectsOfType($targetTypeId, $offset, $limit);
        foreach ($objects as $object) {

            foreach ($object['Attribute'] as $attribute) {
                $oldAttributeId = $attribute['AttributeId'];
                $targetAttributeId = $attributeIdsMap[$oldAttributeId] ?? null;
                if (!$targetAttributeId) {
                    continue;
                }

                $type = $attribute['Type'];
                $value = $attribute['Value'];
                $entityCode = $object['Code'];

                // Для атрибута ссылки сбросим предыдцщее значение
                if ($type == "Reference") {
                    $mdmClient->updateEntityAttribute($targetTypeId, $entityCode, $type, $oldAttributeId, null, true);
                }

                $mdmClient->updateEntityAttribute($targetTypeId, $entityCode, $type, $targetAttributeId, $value);
            }

        }
        $page++;
        $offset = $page * $limit;
    }
    while($page < $pages);
}

//$entityCode = 'ДетскиеБольницы_a01fdbc76de1270edeb3915cdb441c6f';
//var_dump($mdmClient->getNumObjectsOfType($targetTypeId));
//var_dump($objects = $mdmClient->getObjectByCode($entityCode));
//var_dump($objects = $mdmClient->getObjectsOfType($targetTypeId, $offset, $limit));
