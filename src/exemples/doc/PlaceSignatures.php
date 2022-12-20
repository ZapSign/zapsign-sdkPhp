<?php

use Zapsign\Sdk\body\doc\builders\RubricaBuilder;
use Zapsign\Sdk\body\doc\RubricaList;
use Zapsign\Sdk\docs\DocRequests;

require '../../../vendor/autoload.php';

$apiToken = "0a4d6893-f431-4d83-af80-98097029293730b9ddcf-3e60-4b8a-bb4d-5b68448e4038";

$docToken = "9a6a49ca-664a-4bf2-b44a-6d3487e6fb52";

$rubricaSignature = (new RubricaBuilder())
    ->withSignerToken('d431a3e8-6627-460d-a604-083cd6ee39bb')
    ->withRelativeSizeX(19.55)
    ->withRelativeSizeY(9.42)
    ->withRelativePositionBottom(52.50)
    ->withRelativePositionLeft(75.71)
    ->withPage(0)
    ->withType('signature')
    ->build();

$rubricaVisto = (new RubricaBuilder())
    ->withSignerToken('d431a3e8-6627-460d-a604-083cd6ee39bb')
    ->withRelativeSizeX(19.55)
    ->withRelativeSizeY(9.42)
    ->withRelativePositionBottom(13.50)
    ->withRelativePositionLeft(20.71)
    ->withPage(0)
    ->withType('visto')
    ->build();

$rubricaList = new RubricaList([$rubricaSignature, $rubricaVisto]);

try {
    $docResponse = (new DocRequests($apiToken))->placeSignatures($docToken, $rubricaList);
    echo $docResponse;
} catch (Exception $e) {
    echo $e->getMessage();
}
