<?php

namespace Zapsign\Sdk\docs;

use Zapsign\Sdk\body\doc\DocFromDocx;
use Zapsign\Sdk\body\doc\DocFromPdf;
use Zapsign\Sdk\body\doc\DocFromTemplate;
use Zapsign\Sdk\body\doc\ExtraDoc;
use Zapsign\Sdk\body\doc\RubricaList;
use Zapsign\Sdk\services\HttpRequestFactory;

class DocRequests
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
    public function createDocFromUploadPdf(DocFromPdf $doc): string{
        $jsonDoc = json_encode($doc->jsonSerialize());

        $uri = $this->apiRoute."docs/?api_token=".$this->apiToken;

        return (new HttpRequestFactory())->postRequest($uri, $jsonDoc);
    }

    /**
     * @throws \Exception
     */
    public function createDocFromUploadDocx(DocFromDocx $doc): string{
        $jsonDoc = json_encode($doc->jsonSerialize());

        $uri = $this->apiRoute."docs/?api_token=".$this->apiToken;

        return (new HttpRequestFactory())->postRequest($uri, $jsonDoc);
    }

    /**
     * @throws \Exception
     */
    public function createDocFromUploadAsync(DocFromPdf $doc): string{
        $jsonDoc = json_encode($doc->jsonSerialize());

        $uri = $this->apiRoute."docs/async/?api_token=".$this->apiToken;

        return (new HttpRequestFactory())->postRequest($uri, $jsonDoc);
    }

    /**
     * @throws \Exception
     */
    public function createDocFromTemplate(DocFromTemplate $doc): string{
        $jsonDoc = json_encode($doc->jsonSerialize());

        $uri = $this->apiRoute."models/create-doc/?api_token=".$this->apiToken;

        return (new HttpRequestFactory())->postRequest($uri, $jsonDoc);
    }

    /**
     * @throws \Exception
     */
    public function createDocFromTemplateAsync(DocFromTemplate $doc): string{
        $jsonDoc = json_encode($doc->jsonSerialize());

        $uri = $this->apiRoute."models/create-doc/async/?api_token=".$this->apiToken;

        return (new HttpRequestFactory())->postRequest($uri, $jsonDoc);
    }

    /**
 * @throws \Exception
 */
    public function addExtraDoc(string $docToken, ExtraDoc $extraDoc): string{
        $jsonDoc = json_encode($extraDoc->jsonSerialize());

        $uri = $this->apiRoute."docs/".$docToken."/upload-extra-doc/?api_token=".$this->apiToken;

        return (new HttpRequestFactory())->postRequest($uri, $jsonDoc);
    }

    /**
     * @throws \Exception
     */
    public function detailDoc(string $docToken): string{
        $uri = $this->apiRoute."docs/".$docToken."/?api_token=".$this->apiToken;

        return (new HttpRequestFactory())->getRequest($uri);
    }

    /**
     * @throws \Exception
     */
    public function getDocs(): string{
        $uri = $this->apiRoute."docs/?api_token=".$this->apiToken;

        return (new HttpRequestFactory())->getRequest($uri);
    }

    /**
     * @throws \Exception
     */
    public function deleteDoc(string $docToken): string{
        $uri = $this->apiRoute."docs/".$docToken."/?api_token=".$this->apiToken;

        return (new HttpRequestFactory())->deleteRequest($uri);
    }

    /**
     * @throws \Exception
     */
    public function placeSignatures(string $docToken, RubricaList $rubricaList): string{
        $jsonDoc = json_encode($rubricaList->jsonSerialize());

        $uri = $this->apiRoute."docs/".$docToken."/place-signatures/?api_token=".$this->apiToken;

        (new HttpRequestFactory())->postRequest($uri, $jsonDoc);

        return '200';
    }


}