<?php

use Zapsign\Sdk\signers\SignerRequest;

require '../../../vendor/autoload.php';

$apiToken = "0a4d6893-f431-4d83-af80-98097029293730b9ddcf-3e60-4b8a-bb4d-5b68448e4038";

$signerToken = "d431a3e8-6627-460d-a604-083cd6ee39bb";

try {
    $docResponse = (new SignerRequest($apiToken))->detailSigner($signerToken);
    echo $docResponse;
} catch (Exception $e) {
    echo $e->getMessage();
}
