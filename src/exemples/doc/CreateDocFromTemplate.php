<?php

use Zapsign\Sdk\body\doc\builders\DocFromTemplateBuilder;
use Zapsign\Sdk\body\doc\DeParaTemplate;
use Zapsign\Sdk\docs\DocRequests;

require '../../../vendor/autoload.php';

$apiToken = "0a4d6893-f431-4d83-af80-98097029293730b9ddcf-3e60-4b8a-bb4d-5b68448e4038";

$deParaName = new DeParaTemplate('{{NOME COMPLETO}}', 'Signer Name');
$deParaAdr = new DeParaTemplate('{{ENDEREÇO COMPLETO}}', 'Rua tal');
$deParaCpf = new DeParaTemplate('{{NÚMERO DO CPF}}', '123456789-11');

$docFromTemplate = (new DocFromTemplateBuilder())
    ->withSandbox(false)
    ->withTemplateId('75a3a92b-36d5-451f-95cd-5af9a927a392')
    ->withBrandPrimaryColor("#050505")
    ->withLang('pt-br')
    ->withSignerName('test signer name')
    ->withDePara($deParaName)
    ->withDePara($deParaAdr)
    ->withDePara($deParaCpf)
    ->build();

try {
    $docResponse = (new DocRequests($apiToken))->createDocFromTemplate($docFromTemplate);
    echo $docResponse;
} catch (Exception $e) {
    echo $e->getMessage();
}
