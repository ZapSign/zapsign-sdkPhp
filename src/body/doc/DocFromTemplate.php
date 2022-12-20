<?php

namespace Zapsign\Sdk\body\doc;

use Exception;

class DocFromTemplate extends Doc implements \JsonSerializable
{
    private string $signer_name = '';
    private string $template_id = '';
    private array $data = [];


    /**
     * @throws Exception
     */
    public function getSigners(): array
    {
        throw new Exception("you can not get signers in DocFromTemplate, try getSigner_name");
    }

    /**
     * @throws Exception
     */
    public function setSigners(array $signers): void
    {
        throw new Exception("you can not set signers in DocFromTemplate, try setSigner_name");
    }

    /**
     * @return string
     */
    public function getSignerName(): string
    {
        return $this->signer_name;
    }

    /**
     * @param string $signer_name
     */
    public function setSignerName(string $signer_name): void
    {
        $this->signer_name = $signer_name;
    }

    /**
     * @return string
     */
    public function getTemplateId(): string
    {
        return $this->template_id;
    }

    /**
     * @param string $template_id
     */
    public function setTemplateId(string $template_id): void
    {
        $this->template_id = $template_id;
    }

    /**
     * @return array
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param array $data
     */
    public function setData(array $data): void
    {
        $this->data = $data;
    }

    public function addData(DeParaTemplate $deParaTemplate): void
    {
        $this->data[] = $deParaTemplate;
    }

    public function jsonSerialize(): array
    {
        return array_merge(parent::jsonSerializeWithNotSigners(), [
            "signer_name" => $this->getSignerName(),
            "template_id" => $this->getTemplateId(),
            "data" => $this->getData(),
        ]);
    }

}