<?php

namespace Zapsign\Sdk\body\doc\builders;

use Zapsign\Sdk\body\doc\DocFromPdf;
use Zapsign\Sdk\body\signer\Signer;

class DocFromPdfBuilder implements DocBuilder, DocBuilderWithSigner
{
    private DocFromPdf $docFromPdf;

    public function __construct()
    {
        $this->docFromPdf = new DocFromPdf();
    }


    public function withSandbox(bool $sandbox): static
    {
        $this->docFromPdf->setSandbox($sandbox);
        return $this;
    }

    public function withName(string $name): static
    {
        $this->docFromPdf->setName($name);
        return $this;
    }

    public function withLang(string $lang): static
    {
        $this->docFromPdf->setLang($lang);
        return $this;
    }

    public function withDisableSignerEmails(bool $disableSignerEmails): static
    {
        $this->docFromPdf->setDisableSignerEmails($disableSignerEmails);
        return $this;
    }

    public function withSignedFileOnlyFinished(bool $signedFileOnlyFinished): static
    {
        $this->docFromPdf->setSignedFileOnlyFinished($signedFileOnlyFinished);
        return $this;
    }

    public function withBrandLogo(string $brandLogo): static
    {
        $this->docFromPdf->setBrandLogo($brandLogo);
        return $this;
    }

    public function withBrandPrimaryColor(string $brandPrimaryColor): static
    {
        $this->docFromPdf->setBrandPrimaryColor($brandPrimaryColor);
        return $this;
    }

    public function withBrandName(string $brandName): static
    {
        $this->docFromPdf->setBrandName($brandName);
        return $this;
    }

    public function withExternalId(string $externalId): static
    {
        $this->docFromPdf->setExternalId($externalId);
        return $this;
    }

    public function withFolderPath(string $folderPath): static
    {
        $this->docFromPdf->setFolderPath($folderPath);
        return $this;
    }

    public function withDateLimitToSign(string $dateLimitToSign): static
    {
        $this->docFromPdf->setDateLimitToSign($dateLimitToSign);
        return $this;
    }

    public function withSignatureOrderActive(bool $signatureOrderActive): static
    {
        $this->docFromPdf->setSignatureOrderActive($signatureOrderActive);
        return $this;
    }

    public function withObserver(string $observer): static
    {
        $this->docFromPdf->addObserver($observer);
        return $this;
    }

    public function withSigner(Signer $signer): static
    {
        $this->docFromPdf->addSigner($signer);
        return $this;
    }

    public function withReminderEveryNDays(int $reminderEveryNDays): static
    {
        $this->docFromPdf->setReminderEveryNDays($reminderEveryNDays);
        return $this;
    }

    public function withUrlPdf(string $urlPdf): static
    {
        $this->docFromPdf->setUrlPdf($urlPdf);
        return $this;
    }

    public function build(): DocFromPdf
    {
        return $this->docFromPdf;
    }
}