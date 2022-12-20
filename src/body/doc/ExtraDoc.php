<?php

namespace Zapsign\Sdk\body\doc;

class ExtraDoc implements \JsonSerializable
{
    private string $name;
    private string $url_pdf;

    /**
     * @param string $name
     * @param string $url_pdf
     */
    public function __construct(string $name, string $url_pdf)
    {
        $this->name = $name;
        $this->url_pdf = $url_pdf;
    }


    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

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
        return [
            'name' => $this->getName(),
            'url_pdf' => $this->getUrlPdf()
        ];
    }
}