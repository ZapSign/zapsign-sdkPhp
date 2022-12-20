<?php

namespace Zapsign\Sdk\signers;

use Zapsign\Sdk\body\doc\ExtraDoc;
use Zapsign\Sdk\body\signer\SignBatch;
use Zapsign\Sdk\body\signer\Signer;
use Zapsign\Sdk\services\HttpRequestFactory;

class SignerRequest
{
    private string $apiRoute = "https://api.zapsign.com.br/api/v1/";
    private string $apiToken;

    /**
     * @param string $apiToken
     */
    public function __construct(string $apiToken)
    {
        $this->apiToken = $apiToken;
    }

    /**
     * @throws \Exception
     */
    public function detailSigner(string $signerToken): string{
        $uri = $this->apiRoute."signers/".$signerToken."/?api_token=".$this->apiToken;

        return (new HttpRequestFactory())->getRequest($uri);
    }

    /**
     * @throws \Exception
     */
    public function updateSigner(string $docToken, Signer $signer): string{
        $jsonSigner = json_encode($signer->jsonSerialize());

        $uri = $this->apiRoute."signers/".$docToken."/?api_token=".$this->apiToken;

        return (new HttpRequestFactory())->postRequest($uri, $jsonSigner);
    }

    /**
     * @throws \Exception
     */
    public function addSigner(string $docToken, Signer $signer): string{
        $jsonSigner = json_encode($signer->jsonSerialize());

        $uri = $this->apiRoute."docs/".$docToken."/add-signer/?api_token=".$this->apiToken;

        return (new HttpRequestFactory())->postRequest($uri, $jsonSigner);
    }

    /**
     * @throws \Exception
     */
    public function deleteSigner(string $docToken): string{
        $uri = $this->apiRoute."signer/".$docToken."/remove/?api_token=".$this->apiToken;

        return (new HttpRequestFactory())->deleteRequest($uri);
    }

    /**
     * @throws \Exception
     */
    public function signInBatch(SignBatch $signBatch): string{
        $jsonSigner = json_encode($signBatch->jsonSerialize());

        $uri = $this->apiRoute."sign/?api_token=".$this->apiToken;

        return (new HttpRequestFactory())->postRequest($uri, $jsonSigner);
    }
}