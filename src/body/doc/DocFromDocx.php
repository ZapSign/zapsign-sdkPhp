<?php

namespace Zapsign\Sdk\body\doc;

class DocFromDocx extends Doc implements \JsonSerializable
{
    private string $url_docx = '';

    /**
     * @return string
     */
    public function getUrlDocx(): string
    {
        return $this->url_docx;
    }

    /**
     * @param string $url_docx
     */
    public function setUrlDocx(string $url_docx): void
    {
        $this->url_docx = $url_docx;
    }

    public function jsonSerialize(): array
    {
        return array_merge(parent::jsonSerialize(), [
            "url_docx" => $this->getUrlDocx()
        ]);

    }
}