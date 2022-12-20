<?php

use Zapsign\Sdk\docs\DocRequests;

require '../../../vendor/autoload.php';

$apiToken = "0a4d6893-f431-4d83-af80-98097029293730b9ddcf-3e60-4b8a-bb4d-5b68448e4038";

$docToken = "9a6a49ca-664a-4bf2-b44a-6d3487e6fb52";

try {
    $docResponse = (new DocRequests($apiToken))->detailDoc($docToken);
    echo $docResponse;
} catch (Exception $e) {
    echo $e->getMessage();
}
