<?php

use Zapsign\Sdk\body\doc\ExtraDoc;
use Zapsign\Sdk\docs\DocRequests;

require '../../../vendor/autoload.php';

$apiToken = "0a4d6893-f431-4d83-af80-98097029293730b9ddcf-3e60-4b8a-bb4d-5b68448e4038";

$docToken = "9a6a49ca-664a-4bf2-b44a-6d3487e6fb52";

$extraDoc = new ExtraDoc('Extra doc', 'https://zapsign.s3.amazonaws.com/2022/1/pdf/63d19807-cbfa-4b51-8571-215ad0f4eb98/ca42e7be-c932-482c-b70b-92ad7aea04be.pdf');

try {
    $docResponse = (new DocRequests($apiToken))->addExtraDoc($docToken, $extraDoc);
    echo $docResponse;
} catch (Exception $e) {
    echo $e->getMessage();
}
