<?php

use Zapsign\Sdk\signers\SignerRequest;

require '../../../vendor/autoload.php';

$apiToken = "0a4d6893-f431-4d83-af80-98097029293730b9ddcf-3e60-4b8a-bb4d-5b68448e4038";

$signerToken = "46c07a7a-75ec-45d5-bbcb-b9f9401494d8";

try {
    $docResponse = (new SignerRequest($apiToken))->deleteSigner($signerToken);
    echo $docResponse;
} catch (Exception $e) {
    echo $e->getMessage();
}
