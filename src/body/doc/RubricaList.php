<?php

namespace Zapsign\Sdk\body\doc;

class RubricaList implements \JsonSerializable
{
    private array $rubricas;

    /**
     * @param array $rubricas
     */
    public function __construct(array $rubricas)
    {
        $this->rubricas = $rubricas;
    }


    /**
     * @return array
     */
    public function getRubricas(): array
    {
        return $this->rubricas;
    }

    /**
     * @param array $rubricas
     */
    public function setRubricas(array $rubricas): void
    {
        $this->rubricas = $rubricas;
    }


    public function jsonSerialize(): array
    {
        return [
            'rubricas' => $this->getRubricas()
        ];
    }
}