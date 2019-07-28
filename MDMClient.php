<?php

class MDMClient
{
    protected $url;

    protected $originator;

    protected $endpoint;

    public function __construct($url, $originator, $endpoint)
    {
        $this->url = $url;
        $this->originator = $originator;
        $this->endpoint = $endpoint;
    }

    /**
     * Получить количество объектов определенного класса
     *
     * @param $targetTypeId
     * @return int
     */
    public function getNumObjectsOfType($targetTypeId)
    {
        $catalogRequest = new \stdClass();
        $catalogRequest->Code = $targetTypeId;
        $catalogRequest->ReturnCount = "1";

        $request = new MDMRequest($catalogRequest, 'CatalogRequest');
        $response = $this->send($request);

        return (int) $response->Package->Count;
    }

    /**
     * Получить объекты опредленного класса
     *
     * @param $targetTypeId
     * @param int $offset
     * @param int $limit
     * @return mixed
     */
    public function getObjectsOfType($targetTypeId, $offset = 0, $limit = 1000)
    {
        $catalogRequest = new \stdClass();
        $catalogRequest->Code = $targetTypeId;
        $catalogRequest->Offset = $offset;
        $catalogRequest->Limit = $limit;

        $request = new MDMRequest($catalogRequest, 'CatalogRequest');
        $response = $this->send($request, true);

        return $response['Package']['Item'];
    }

    /**
     * Получить объект по идентификатору
     *
     * @param $entityCode
     * @return mixed
     */
    public function getObjectByCode($entityCode)
    {
        $entityRequest = new \stdClass();
        $entityRequest->Code = $entityCode;

        $request = new MDMRequest($entityRequest, 'EntityRequest');
        $response = $this->send($request, true);

        return $response['Package']['Item'];
    }

    /**
     * Обновить значение атрибута объекта определенного класса
     *
     * @param $targetTypeId
     * @param $entityCode
     * @param $attributeType
     * @param $attributeId
     * @param $attributeValue
     * @param bool $setEmpty
     * @return mixed
     */
    public function updateEntityAttribute($targetTypeId, $entityCode, $attributeType, $attributeId, $attributeValue = null, $setEmpty = false)
    {
        $type = new \stdClass();
        $type->TypeId = $targetTypeId;

        $attribute = new \stdClass();
        $attribute->Type = $attributeType;
        $attribute->AttributeId = $attributeId;
        if ($setEmpty) {
            $attribute->Empty = "1";
        }
        else {
            $attribute->Value = $attributeValue;
        }

        $item = new \stdClass();
        $item->Code = $entityCode;
        $item->OperationId = 11;
        $item->Type = [
            $type
        ];
        $item->Attribute = [
            $attribute
        ];

        $changesRequest = new \stdClass();
        $changesRequest->Item = [
            $item
        ];

        $request = new MDMRequest($changesRequest, 'ChangesRequest');
        $response = $this->send($request, true);

        return $response;
    }

    protected function send($request, $responseAsArray = false)
    {
        $request->root->Originator = $this->originator;
        $request->root->Endpoint = $this->endpoint;
        $encodedRequest = json_encode($request);

        $postFields = [
            'test' => 1,
            'request' => $encodedRequest
        ];

        $headers = [
            'Content-Type' => 'application/x-www-form-urlencoded'
        ];

        $resultHeader = "";
        foreach($headers as $header => $content) {
            $resultHeader .= $header.": ".$content."\r\n";
        }
        $content = http_build_query($postFields);

        $url = $this->url;
        $options = [
            'http' => [
                'header' => $resultHeader,
                'method' => 'POST',
                'content' => $content
            ]
        ];

        $streamContext = stream_context_create($options);
        $responseEncoded = file_get_contents($url, false, $streamContext);
        $response = json_decode($responseEncoded, $responseAsArray);

        return $response;
    }
}
