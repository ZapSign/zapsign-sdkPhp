<?php

namespace Zapsign\Sdk\body\doc;

use Zapsign\Sdk\body\signer\Signer;

class Doc implements \JsonSerializable
{
    private bool $sandbox = false;
    private string $name = "";
    private string $lang = "pt-br";
    private bool $disable_signer_emails = false;
    private bool $signed_file_only_finished = false;
    private string $brand_logo = "";
    private string $brand_primary_color = "";
    private string $brand_name = "";
    private string $external_id = "";
    private string $folder_path = "/";
    private string|null $date_limit_to_sign = null;
    private bool $signature_order_active = false;
    private array $observers = [];
    private array $signers = [];
    private int $reminder_every_n_days = 0;

    /**
     * @return bool
     */
    public function isSandbox(): bool
    {
        return $this->sandbox;
    }

    /**
     * @param bool $sandbox
     */
    public function setSandbox(bool $sandbox): void
    {
        $this->sandbox = $sandbox;
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
    public function getLang(): string
    {
        return $this->lang;
    }

    /**
     * @param string $lang
     */
    public function setLang(string $lang): void
    {
        $this->lang = $lang;
    }

    /**
     * @return bool
     */
    public function isDisableSignerEmails(): bool
    {
        return $this->disable_signer_emails;
    }

    /**
     * @param bool $disable_signer_emails
     */
    public function setDisableSignerEmails(bool $disable_signer_emails): void
    {
        $this->disable_signer_emails = $disable_signer_emails;
    }

    /**
     * @return bool
     */
    public function isSignedFileOnlyFinished(): bool
    {
        return $this->signed_file_only_finished;
    }

    /**
     * @param bool $signed_file_only_finished
     */
    public function setSignedFileOnlyFinished(bool $signed_file_only_finished): void
    {
        $this->signed_file_only_finished = $signed_file_only_finished;
    }

    /**
     * @return string
     */
    public function getBrandLogo(): string
    {
        return $this->brand_logo;
    }

    /**
     * @param string $brand_logo
     */
    public function setBrandLogo(string $brand_logo): void
    {
        $this->brand_logo = $brand_logo;
    }

    /**
     * @return string
     */
    public function getBrandPrimaryColor(): string
    {
        return $this->brand_primary_color;
    }

    /**
     * @param string $brand_primary_color
     */
    public function setBrandPrimaryColor(string $brand_primary_color): void
    {
        $this->brand_primary_color = $brand_primary_color;
    }

    /**
     * @return string
     */
    public function getBrandName(): string
    {
        return $this->brand_name;
    }

    /**
     * @param string $brand_name
     */
    public function setBrandName(string $brand_name): void
    {
        $this->brand_name = $brand_name;
    }

    /**
     * @return string
     */
    public function getExternalId(): string
    {
        return $this->external_id;
    }

    /**
     * @param string $external_id
     */
    public function setExternalId(string $external_id): void
    {
        $this->external_id = $external_id;
    }

    /**
     * @return string
     */
    public function getFolderPath(): string
    {
        return $this->folder_path;
    }

    /**
     * @param string $folder_path
     */
    public function setFolderPath(string $folder_path): void
    {
        $this->folder_path = $folder_path;
    }

    /**
     * @return string|null
     */
    public function getDateLimitToSign(): string|null
    {
        return $this->date_limit_to_sign;
    }

    /**
     * @param string $date_limit_to_sign
     */
    public function setDateLimitToSign(string $date_limit_to_sign): void
    {
        $this->date_limit_to_sign = $date_limit_to_sign;
    }

    /**
     * @return bool
     */
    public function isSignatureOrderActive(): bool
    {
        return $this->signature_order_active;
    }

    /**
     * @param bool $signature_order_active
     */
    public function setSignatureOrderActive(bool $signature_order_active): void
    {
        $this->signature_order_active = $signature_order_active;
    }

    /**
     * @return array
     */
    public function getObservers(): array
    {
        return $this->observers;
    }

    /**
     * @param array $observers
     */
    public function setObservers(array $observers): void
    {
        $this->observers = $observers;
    }

    public function addObserver(string $observer): void
    {
        $this->observers[] = $observer;
    }

    /**
     * @return array
     */
    public function getSigners(): array
    {
        return $this->signers;
    }

    /**
     * @param array $signers
     */
    public function setSigners(array $signers): void
    {
        $this->signers = $signers;
    }

    public function addSigner(Signer $signer): void
    {
        $this->signers[] = $signer;
    }

    /**
     * @return int|null
     */
    public function getReminderEveryNDays(): int|null
    {
        return $this->reminder_every_n_days;
    }

    /**
     * @param int $reminder_every_n_days
     */
    public function setReminderEveryNDays(int $reminder_every_n_days): void
    {
        $this->reminder_every_n_days = $reminder_every_n_days;
    }


    public function jsonSerialize(): array
    {
        return [
            "sandbox" => $this->isSandbox(),
            "name" => $this->getName(),
            "lang" => $this->getLang(),
            "disable_signer_emails" => $this->isDisableSignerEmails(),
            "signed_file_only_finished" => $this->isSignedFileOnlyFinished(),
            "brand_logo" => $this->getBrandLogo(),
            "brand_primary_color" => $this->getBrandPrimaryColor(),
            "brand_name" => $this->getBrandName(),
            "external_id" => $this->getExternalId(),
            "folder_path" => $this->getFolderPath(),
            "date_limit_to_sign" => $this->getDateLimitToSign(),
            "signature_order_active" => $this->isSignatureOrderActive(),
            "observers" => $this->getObservers(),
            "signers" => $this->getSigners(),
            "reminder_every_n_days" => $this->getReminderEveryNDays(),

        ];
    }
    public function jsonSerializeWithNotSigners(): array
    {
        return [
            "sandbox" => $this->isSandbox(),
            "name" => $this->getName(),
            "lang" => $this->getLang(),
            "disable_signer_emails" => $this->isDisableSignerEmails(),
            "signed_file_only_finished" => $this->isSignedFileOnlyFinished(),
            "brand_logo" => $this->getBrandLogo(),
            "brand_primary_color" => $this->getBrandPrimaryColor(),
            "brand_name" => $this->getBrandName(),
            "external_id" => $this->getExternalId(),
            "folder_path" => $this->getFolderPath(),
            "date_limit_to_sign" => $this->getDateLimitToSign(),
            "signature_order_active" => $this->isSignatureOrderActive(),
            "observers" => $this->getObservers(),
            "reminder_every_n_days" => $this->getReminderEveryNDays(),

        ];
    }
}