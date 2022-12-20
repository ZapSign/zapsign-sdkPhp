<?php

use Zapsign\Sdk\body\signer\builders\SignerBuilder;
use Zapsign\Sdk\signers\SignerRequest;

require '../../../vendor/autoload.php';

$apiToken = "0a4d6893-f431-4d83-af80-98097029293730b9ddcf-3e60-4b8a-bb4d-5b68448e4038";

$DocToken = "9a6a49ca-664a-4bf2-b44a-6d3487e6fb52";

$signer = (new SignerBuilder())
    ->withName('New Signer Extra')
    ->build();

try {
    $docResponse = (new SignerRequest($apiToken))->addSigner($DocToken, $signer);
    echo $docResponse;
} catch (Exception $e) {
    echo $e->getMessage();
}
