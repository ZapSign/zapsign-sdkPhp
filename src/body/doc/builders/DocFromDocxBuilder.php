<?php

namespace Zapsign\Sdk\body\doc\builders;

use Zapsign\Sdk\body\doc\DocFromDocx;
use Zapsign\Sdk\body\signer\Signer;

class DocFromDocxBuilder implements DocBuilder, DocBuilderWithSigner
{
    private DocFromDocx $docFromDocx;

    public function __construct()
    {
        $this->docFromDocx = new DocFromDocx();
    }


    public function withSandbox(bool $sandbox): static
    {
        $this->docFromDocx->setSandbox($sandbox);
        return $this;
    }

    public function withName(string $name): static
    {
        $this->docFromDocx->setName($name);
        return $this;
    }

    public function withLang(string $lang): static
    {
        $this->docFromDocx->setLang($lang);
        return $this;
    }

    public function withDisableSignerEmails(bool $disableSignerEmails): static
    {
        $this->docFromDocx->setDisableSignerEmails($disableSignerEmails);
        return $this;
    }

    public function withSignedFileOnlyFinished(bool $signedFileOnlyFinished): static
    {
        $this->docFromDocx->setSignedFileOnlyFinished($signedFileOnlyFinished);
        return $this;
    }

    public function withBrandLogo(string $brandLogo): static
    {
        $this->docFromDocx->setBrandLogo($brandLogo);
        return $this;
    }

    public function withBrandPrimaryColor(string $brandPrimaryColor): static
    {
        $this->docFromDocx->setBrandPrimaryColor($brandPrimaryColor);
        return $this;
    }

    public function withBrandName(string $brandName): static
    {
        $this->docFromDocx->setBrandName($brandName);
        return $this;
    }

    public function withExternalId(string $externalId): static
    {
        $this->docFromDocx->setExternalId($externalId);
        return $this;
    }

    public function withFolderPath(string $folderPath): static
    {
        $this->docFromDocx->setFolderPath($folderPath);
        return $this;
    }

    public function withDateLimitToSign(string $dateLimitToSign): static
    {
        $this->docFromDocx->setDateLimitToSign($dateLimitToSign);
        return $this;
    }

    public function withSignatureOrderActive(bool $signatureOrderActive): static
    {
        $this->docFromDocx->setSignatureOrderActive($signatureOrderActive);
        return $this;
    }

    public function withObserver(string $observer): static
    {
        $this->docFromDocx->addObserver($observer);
        return $this;
    }

    public function withSigner(Signer $signer): static
    {
        $this->docFromDocx->addSigner($signer);
        return $this;
    }

    public function withReminderEveryNDays(int $reminderEveryNDays): static
    {
        $this->docFromDocx->setReminderEveryNDays($reminderEveryNDays);
        return $this;
    }

    public function withUrlDocx(string $url_docx): static
    {
        $this->docFromDocx->setUrlDocx($url_docx);
        return $this;
    }

    public function build(): DocFromDocx
    {
        return $this->docFromDocx;
    }
}