<?php

use Zapsign\Sdk\body\signer\SignBatch;
use Zapsign\Sdk\signers\SignerRequest;

require '../../../vendor/autoload.php';

$apiToken = "0a4d6893-f431-4d83-af80-98097029293730b9ddcf-3e60-4b8a-bb4d-5b68448e4038";

$userToken = "8443cc74-74c2-41aa-8a48-387bde52fcfc";
$signerToken1 = "121adb6b-3a2d-483c-827c-4e4294ca6cc6";
$signerToken2 = "ad4e7fb4-b3ee-45f4-8af2-ffd2b8a242ae";

$signInBacth = new SignBatch($userToken, [$signerToken1, $signerToken2]);

try {
    $docResponse = (new SignerRequest($apiToken))->signInBatch($signInBacth);
    echo $docResponse;
} catch (Exception $e) {
    echo $e->getMessage();
}
