<?php

use Zapsign\Sdk\body\doc\builders\DocFromDocxBuilder;
use Zapsign\Sdk\body\signer\builders\SignerBuilder;
use Zapsign\Sdk\docs\DocRequests;

require '../../../vendor/autoload.php';

$apiToken = "0a4d6893-f431-4d83-af80-98097029293730b9ddcf-3e60-4b8a-bb4d-5b68448e4038";

$signer = (new SignerBuilder())->withName('Signer name')->build();

$docFromDocx = (new DocFromDocxBuilder())
    ->withName('test doc from docx')
    ->withSandbox(false)
    ->withUrlDocx("https://zapsign.s3.amazonaws.com/2022/1/docs/d7660fd2-fe74-4691-bec8-5c42c0ae2b3f/39a35070-8987-476d-86e3-75d91f588a5a.docx")
    ->withBrandPrimaryColor("#050505")
    ->withLang('pt-br')
    ->withSigner($signer)
    ->build();

try {
    $docResponse = (new DocRequests($apiToken))->createDocFromUploadDocx($docFromDocx);
    echo $docResponse;
} catch (Exception $e) {
    echo $e->getMessage();
}
