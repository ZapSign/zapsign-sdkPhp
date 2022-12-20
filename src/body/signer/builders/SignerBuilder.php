<?php

namespace Zapsign\Sdk\body\signer\builders;

use Zapsign\Sdk\body\signer\Signer;

class SignerBuilder
{
    private Signer $signer;
    public function __construct()
    {
        $this->signer = new Signer();
    }

    public function withName(string $name): static
    {
        $this->signer->setName($name);
        return $this;
    }
    public function withEmail(string $email): static
    {
        $this->signer->setEmail($email);
        return $this;
    }
    public function withAuthMode(string $auth_mode): static
    {
        $this->signer->setAuthMode($auth_mode);
        return $this;
    }
    public function withSendAutomaticEmail(bool $send_automatic_email): static
    {
        $this->signer->setSendAutomaticEmail($send_automatic_email);
        return $this;
    }
    public function withSendAutomaticWhatsapp(bool $send_automatic_whatsapp): static
    {
        $this->signer->setSendAutomaticWhatsapp($send_automatic_whatsapp);
        return $this;
    }
    public function withOrderGroup(int $order_group): static
    {
        $this->signer->setOrderGroup($order_group);
        return $this;
    }
    public function withCustomMessage(string $custom_message): static
    {
        $this->signer->setCustomMessage($custom_message);
        return $this;
    }
    public function withPhoneCountry(string $phone_country): static
    {
        $this->signer->setPhoneCountry($phone_country);
        return $this;
    }
    public function withPhoneNumber(string $phone_number): static
    {
        $this->signer->setPhoneNumber($phone_number);
        return $this;
    }
    public function withLockEmail(bool $lock_email): static
    {
        $this->signer->setLockEmail($lock_email);
        return $this;
    }
    public function withBlankEmail(bool $blank_email): static
    {
        $this->signer->setBlankEmail($blank_email);
        return $this;
    }
    public function withHideEmail(bool $hide_email): static
    {
        $this->signer->setHideEmail($hide_email);
        return $this;
    }
    public function withLockPhone(bool $lock_phone): static
    {
        $this->signer->setLockPhone($lock_phone);
        return $this;
    }
    public function withBlankPhone(bool $blank_phone): static
    {
        $this->signer->setBlankPhone($blank_phone);
        return $this;
    }
    public function withHidePhone(bool $hide_phone): static
    {
        $this->signer->setHidePhone($hide_phone);
        return $this;
    }
    public function withLockName(bool $lock_name): static
    {
        $this->signer->setLockName($lock_name);
        return $this;
    }
    public function withRequireSelfiePhoto(bool $require_selfie_photo): static
    {
        $this->signer->setRequireSelfiePhoto($require_selfie_photo);
        return $this;
    }
    public function withSelfieValidationType(bool $selfie_validation_type): static
    {
        $this->signer->setSelfieValidationType($selfie_validation_type);
        return $this;
    }
    public function withQualification(string $qualification): static
    {
        $this->signer->setQualification($qualification);
        return $this;
    }
    public function withExternalId(string $external_id): static
    {
        $this->signer->setExternalId($external_id);
        return $this;
    }
    public function withRedirectLink(string $redirect_link): static
    {
        $this->signer->setRedirectLink($redirect_link);
        return $this;
    }
    public function build(): Signer
    {
        return $this->signer;
    }


}