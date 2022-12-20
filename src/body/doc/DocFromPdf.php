<?php

namespace Zapsign\Sdk\body\doc;

class DocFromPdf extends Doc implements \JsonSerializable
{
    private string $url_pdf = '';

    /**
     * @return string
     */
    public function getUrlPdf(): string
    {
        return $this->url_pdf;
    }

    /**
     * @param string $url_pdf
     */
    public function setUrlPdf(string $url_pdf): void
    {
        $this->url_pdf = $url_pdf;
    }


    public function jsonSerialize(): array
    {
        return array_merge(parent::jsonSerialize(), [
            "url_pdf" => $this->getUrlPdf()
        ]);
    }
}