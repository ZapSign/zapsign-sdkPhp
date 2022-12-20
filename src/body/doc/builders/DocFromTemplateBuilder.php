<?php

namespace Zapsign\Sdk\body\doc\builders;

use Zapsign\Sdk\body\doc\DeParaTemplate;
use Zapsign\Sdk\body\doc\DocFromPdf;
use Zapsign\Sdk\body\doc\DocFromTemplate;
use Zapsign\Sdk\body\signer\Signer;

class DocFromTemplateBuilder implements DocBuilder
{
    private DocFromTemplate $docFromTemplate;

    public function __construct()
    {
        $this->docFromTemplate = new DocFromTemplate();
    }


    public function withSandbox(bool $sandbox): static
    {
        $this->docFromTemplate->setSandbox($sandbox);
        return $this;
    }

    public function withName(string $name): static
    {
        $this->docFromTemplate->setName($name);
        return $this;
    }

    public function withLang(string $lang): static
    {
        $this->docFromTemplate->setLang($lang);
        return $this;
    }

    public function withDisableSignerEmails(bool $disableSignerEmails): static
    {
        $this->docFromTemplate->setDisableSignerEmails($disableSignerEmails);
        return $this;
    }

    public function withSignedFileOnlyFinished(bool $signedFileOnlyFinished): static
    {
        $this->docFromTemplate->setSignedFileOnlyFinished($signedFileOnlyFinished);
        return $this;
    }

    public function withBrandLogo(string $brandLogo): static
    {
        $this->docFromTemplate->setBrandLogo($brandLogo);
        return $this;
    }

    public function withBrandPrimaryColor(string $brandPrimaryColor): static
    {
        $this->docFromTemplate->setBrandPrimaryColor($brandPrimaryColor);
        return $this;
    }

    public function withBrandName(string $brandName): static
    {
        $this->docFromTemplate->setBrandName($brandName);
        return $this;
    }

    public function withExternalId(string $externalId): static
    {
        $this->docFromTemplate->setExternalId($externalId);
        return $this;
    }

    public function withFolderPath(string $folderPath): static
    {
        $this->docFromTemplate->setFolderPath($folderPath);
        return $this;
    }

    public function withDateLimitToSign(string $dateLimitToSign): static
    {
        $this->docFromTemplate->setDateLimitToSign($dateLimitToSign);
        return $this;
    }

    public function withSignatureOrderActive(bool $signatureOrderActive): static
    {
        $this->docFromTemplate->setSignatureOrderActive($signatureOrderActive);
        return $this;
    }

    public function withObserver(string $observer): static
    {
        $this->docFromTemplate->addObserver($observer);
        return $this;
    }

    public function withReminderEveryNDays(int $reminderEveryNDays): static
    {
        $this->docFromTemplate->setReminderEveryNDays($reminderEveryNDays);
        return $this;
    }

    public function withSignerName(string $signer_name): static
    {
        $this->docFromTemplate->setSignerName($signer_name);
        return $this;
    }

    public function withTemplateId(string $template_id): static
    {
        $this->docFromTemplate->setTemplateId($template_id);
        return $this;
    }

    public function withDePara(DeParaTemplate $deParaTemplate): static
    {
        $this->docFromTemplate->addData($deParaTemplate);
        return $this;
    }

    public function build(): DocFromTemplate
    {
        return $this->docFromTemplate;
    }
}