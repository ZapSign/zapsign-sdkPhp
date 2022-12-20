<?php

namespace Zapsign\Sdk\body\doc\builders;

use Zapsign\Sdk\body\signer\Signer;

interface DocBuilder
{
    public function withSandbox(bool $sandbox);
    public function withName(string $name);
    public function withLang(string $lang);
    public function withDisableSignerEmails(bool $disableSignerEmails);
    public function withSignedFileOnlyFinished(bool $signedFileOnlyFinished);
    public function withBrandLogo(string $brandLogo);
    public function withBrandPrimaryColor(string $brandPrimaryColor);
    public function withBrandName(string $brandName);
    public function withExternalId(string $externalId);
    public function withFolderPath(string $folderPath);
    public function withDateLimitToSign(string $dateLimitToSign);
    public function withSignatureOrderActive(bool $signatureOrderActive);
    public function withObserver(string $observer);
    public function withReminderEveryNDays(int $reminderEveryNDays);
    public function build();
}