<?php

namespace Zapsign\Sdk\body\doc;

class DeParaTemplate implements \JsonSerializable
{
    private string $de;
    private string $para;

    /**
     * @param string $de
     * @param string $para
     */
    public function __construct(string $de, string $para)
    {
        $this->de = $de;
        $this->para = $para;
    }


    /**
     * @return string
     */
    public function getDe(): string
    {
        return $this->de;
    }

    /**
     * @param string $de
     */
    public function setDe(string $de): void
    {
        $this->de = $de;
    }

    /**
     * @return string
     */
    public function getPara(): string
    {
        return $this->para;
    }

    /**
     * @param string $para
     */
    public function setPara(string $para): void
    {
        $this->para = $para;
    }


    public function jsonSerialize(): array
    {
        return [
            'de' => $this->getDe(),
            'para' => $this->getPara()
        ];
    }
}

