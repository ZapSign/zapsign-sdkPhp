<?php

use Zapsign\Sdk\body\doc\builders\DocFromPdfBuilder;
use Zapsign\Sdk\body\signer\builders\SignerBuilder;
use Zapsign\Sdk\docs\DocRequests;

require '../../../vendor/autoload.php';

$apiToken = "0a4d6893-f431-4d83-af80-98097029293730b9ddcf-3e60-4b8a-bb4d-5b68448e4038";

$signer = (new SignerBuilder())->withName('Signer name')->build();

$docFromPdf = (new DocFromPdfBuilder())
    ->withName('test doc from pdf async')
    ->withSandbox(false)
    ->withUrlPdf("https://zapsign.s3.amazonaws.com/2022/1/pdf/63d19807-cbfa-4b51-8571-215ad0f4eb98/ca42e7be-c932-482c-b70b-92ad7aea04be.pdf")
    ->withBrandPrimaryColor("#050505")
    ->withLang('pt-br')
    ->withSigner($signer)
    ->build();

try {
    $docResponse = (new DocRequests($apiToken))->createDocFromUploadAsync($docFromPdf);
    echo $docResponse;
} catch (Exception $e) {
    echo $e->getMessage();
}
