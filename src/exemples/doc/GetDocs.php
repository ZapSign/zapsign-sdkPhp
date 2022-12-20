<?php

use Zapsign\Sdk\docs\DocRequests;

require '../../../vendor/autoload.php';

$apiToken = "0a4d6893-f431-4d83-af80-98097029293730b9ddcf-3e60-4b8a-bb4d-5b68448e4038";

try {
    $docResponse = (new DocRequests($apiToken))->getDocs();
    echo $docResponse;
} catch (Exception $e) {
    echo $e->getMessage();
}
