<?php

namespace Zapsign\Sdk\body\signer;

class Signer implements \JsonSerializable
{
    private string $name = "";
    private string $email = "";
    private string $auth_mode = "assinaturaTela";
    private bool $send_automatic_email = false;
    private bool $send_automatic_whatsapp = false;
    private int $order_group = 0;
    private string $custom_message = "";
    private string $phone_country = "";
    private string $phone_number = "";
    private bool $lock_email = false;
    private bool $blank_email = false;
    private bool $hide_email = false;
    private bool $lock_phone = false;
    private bool $blank_phone = false;
    private bool $hide_phone = false;
    private bool $lock_name = false;
    private bool $require_selfie_photo = false;
    private string $selfie_validation_type = "none";
    private string $qualification = "";
    private string $external_id = "";
    private string $redirect_link = "";
    private string  $sign_url;
    private string  $token;
    private string  $status;
    private int $times_viewed;
    private string  $last_view_at;
    private string  $signed_at;
    private string  $geo_latitude;
    private string  $geo_longitude;
    private string  $signature_image;
    private string  $visto_image;
    private string  $document_photo_url;
    private string  $document_verse_photo_url;
    private string  $selfie_photo_url;
    private string  $selfie_photo_url2;
    private string  $send_via;
    private string  $require_document_photo;

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
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getAuthMode(): string
    {
        return $this->auth_mode;
    }

    /**
     * @param string $auth_mode
     */
    public function setAuthMode(string $auth_mode): void
    {
        $this->auth_mode = $auth_mode;
    }

    /**
     * @return bool
     */
    public function isSendAutomaticEmail(): bool
    {
        return $this->send_automatic_email;
    }

    /**
     * @param bool $send_automatic_email
     */
    public function setSendAutomaticEmail(bool $send_automatic_email): void
    {
        $this->send_automatic_email = $send_automatic_email;
    }

    /**
     * @return bool
     */
    public function isSendAutomaticWhatsapp(): bool
    {
        return $this->send_automatic_whatsapp;
    }

    /**
     * @param bool $send_automatic_whatsapp
     */
    public function setSendAutomaticWhatsapp(bool $send_automatic_whatsapp): void
    {
        $this->send_automatic_whatsapp = $send_automatic_whatsapp;
    }

    /**
     * @return int
     */
    public function getOrderGroup(): int
    {
        return $this->order_group;
    }

    /**
     * @param int $order_group
     */
    public function setOrderGroup(int $order_group): void
    {
        $this->order_group = $order_group;
    }

    /**
     * @return string
     */
    public function getCustomMessage(): string
    {
        return $this->custom_message;
    }

    /**
     * @param string $custom_message
     */
    public function setCustomMessage(string $custom_message): void
    {
        $this->custom_message = $custom_message;
    }

    /**
     * @return string
     */
    public function getPhoneCountry(): string
    {
        return $this->phone_country;
    }

    /**
     * @param string $phone_country
     */
    public function setPhoneCountry(string $phone_country): void
    {
        $this->phone_country = $phone_country;
    }

    /**
     * @return string
     */
    public function getPhoneNumber(): string
    {
        return $this->phone_number;
    }

    /**
     * @param string $phone_number
     */
    public function setPhoneNumber(string $phone_number): void
    {
        $this->phone_number = $phone_number;
    }

    /**
     * @return bool
     */
    public function isLockEmail(): bool
    {
        return $this->lock_email;
    }

    /**
     * @param bool $lock_email
     */
    public function setLockEmail(bool $lock_email): void
    {
        $this->lock_email = $lock_email;
    }

    /**
     * @return bool
     */
    public function isBlankEmail(): bool
    {
        return $this->blank_email;
    }

    /**
     * @param bool $blank_email
     */
    public function setBlankEmail(bool $blank_email): void
    {
        $this->blank_email = $blank_email;
    }

    /**
     * @return bool
     */
    public function isHideEmail(): bool
    {
        return $this->hide_email;
    }

    /**
     * @param bool $hide_email
     */
    public function setHideEmail(bool $hide_email): void
    {
        $this->hide_email = $hide_email;
    }

    /**
     * @return bool
     */
    public function isLockPhone(): bool
    {
        return $this->lock_phone;
    }

    /**
     * @param bool $lock_phone
     */
    public function setLockPhone(bool $lock_phone): void
    {
        $this->lock_phone = $lock_phone;
    }

    /**
     * @return bool
     */
    public function isBlankPhone(): bool
    {
        return $this->blank_phone;
    }

    /**
     * @param bool $blank_phone
     */
    public function setBlankPhone(bool $blank_phone): void
    {
        $this->blank_phone = $blank_phone;
    }

    /**
     * @return bool
     */
    public function isHidePhone(): bool
    {
        return $this->hide_phone;
    }

    /**
     * @param bool $hide_phone
     */
    public function setHidePhone(bool $hide_phone): void
    {
        $this->hide_phone = $hide_phone;
    }

    /**
     * @return bool
     */
    public function isLockName(): bool
    {
        return $this->lock_name;
    }

    /**
     * @param bool $lock_name
     */
    public function setLockName(bool $lock_name): void
    {
        $this->lock_name = $lock_name;
    }

    /**
     * @return bool
     */
    public function isRequireSelfiePhoto(): bool
    {
        return $this->require_selfie_photo;
    }

    /**
     * @param bool $require_selfie_photo
     */
    public function setRequireSelfiePhoto(bool $require_selfie_photo): void
    {
        $this->require_selfie_photo = $require_selfie_photo;
    }

    /**
     * @return string
     */
    public function getSelfieValidationType(): string
    {
        return $this->selfie_validation_type;
    }

    /**
     * @param string $selfie_validation_type
     */
    public function setSelfieValidationType(string $selfie_validation_type): void
    {
        $this->selfie_validation_type = $selfie_validation_type;
    }

    /**
     * @return string
     */
    public function getQualification(): string
    {
        return $this->qualification;
    }

    /**
     * @param string $qualification
     */
    public function setQualification(string $qualification): void
    {
        $this->qualification = $qualification;
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
    public function getRedirectLink(): string
    {
        return $this->redirect_link;
    }

    /**
     * @param string $redirect_link
     */
    public function setRedirectLink(string $redirect_link): void
    {
        $this->redirect_link = $redirect_link;
    }

    /**
     * @return string
     */
    public function getSignUrl(): string
    {
        return $this->sign_url;
    }

    /**
     * @param string $sign_url
     */
    public function setSignUrl(string $sign_url): void
    {
        $this->sign_url = $sign_url;
    }

    /**
     * @return string
     */
    public function getToken(): string
    {
        return $this->token;
    }

    /**
     * @param string $token
     */
    public function setToken(string $token): void
    {
        $this->token = $token;
    }

    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * @param string $status
     */
    public function setStatus(string $status): void
    {
        $this->status = $status;
    }

    /**
     * @return int
     */
    public function getTimesViewed(): int
    {
        return $this->times_viewed;
    }

    /**
     * @param int $times_viewed
     */
    public function setTimesViewed(int $times_viewed): void
    {
        $this->times_viewed = $times_viewed;
    }

    /**
     * @return string
     */
    public function getLastViewAt(): string
    {
        return $this->last_view_at;
    }

    /**
     * @param string $last_view_at
     */
    public function setLastViewAt(string $last_view_at): void
    {
        $this->last_view_at = $last_view_at;
    }

    /**
     * @return string
     */
    public function getSignedAt(): string
    {
        return $this->signed_at;
    }

    /**
     * @param string $signed_at
     */
    public function setSignedAt(string $signed_at): void
    {
        $this->signed_at = $signed_at;
    }

    /**
     * @return string
     */
    public function getGeoLatitude(): string
    {
        return $this->geo_latitude;
    }

    /**
     * @param string $geo_latitude
     */
    public function setGeoLatitude(string $geo_latitude): void
    {
        $this->geo_latitude = $geo_latitude;
    }

    /**
     * @return string
     */
    public function getGeoLongitude(): string
    {
        return $this->geo_longitude;
    }

    /**
     * @param string $geo_longitude
     */
    public function setGeoLongitude(string $geo_longitude): void
    {
        $this->geo_longitude = $geo_longitude;
    }

    /**
     * @return string
     */
    public function getSignatureImage(): string
    {
        return $this->signature_image;
    }

    /**
     * @param string $signature_image
     */
    public function setSignatureImage(string $signature_image): void
    {
        $this->signature_image = $signature_image;
    }

    /**
     * @return string
     */
    public function getVistoImage(): string
    {
        return $this->visto_image;
    }

    /**
     * @param string $visto_image
     */
    public function setVistoImage(string $visto_image): void
    {
        $this->visto_image = $visto_image;
    }

    /**
     * @return string
     */
    public function getDocumentPhotoUrl(): string
    {
        return $this->document_photo_url;
    }

    /**
     * @param string $document_photo_url
     */
    public function setDocumentPhotoUrl(string $document_photo_url): void
    {
        $this->document_photo_url = $document_photo_url;
    }

    /**
     * @return string
     */
    public function getDocumentVersePhotoUrl(): string
    {
        return $this->document_verse_photo_url;
    }

    /**
     * @param string $document_verse_photo_url
     */
    public function setDocumentVersePhotoUrl(string $document_verse_photo_url): void
    {
        $this->document_verse_photo_url = $document_verse_photo_url;
    }

    /**
     * @return string
     */
    public function getSelfiePhotoUrl(): string
    {
        return $this->selfie_photo_url;
    }

    /**
     * @param string $selfie_photo_url
     */
    public function setSelfiePhotoUrl(string $selfie_photo_url): void
    {
        $this->selfie_photo_url = $selfie_photo_url;
    }

    /**
     * @return string
     */
    public function getSelfiePhotoUrl2(): string
    {
        return $this->selfie_photo_url2;
    }

    /**
     * @param string $selfie_photo_url2
     */
    public function setSelfiePhotoUrl2(string $selfie_photo_url2): void
    {
        $this->selfie_photo_url2 = $selfie_photo_url2;
    }

    /**
     * @return string
     */
    public function getSendVia(): string
    {
        return $this->send_via;
    }

    /**
     * @param string $send_via
     */
    public function setSendVia(string $send_via): void
    {
        $this->send_via = $send_via;
    }

    /**
     * @return string
     */
    public function getRequireDocumentPhoto(): string
    {
        return $this->require_document_photo;
    }

    /**
     * @param string $require_document_photo
     */
    public function setRequireDocumentPhoto(string $require_document_photo): void
    {
        $this->require_document_photo = $require_document_photo;
    }


    public function jsonSerialize(): array
    {
        return [
            'name' => $this->getName(),
            'email' => $this->getEmail(),
            'auth_mode' => $this->getAuthMode(),
            'send_automatic_email' => $this->isSendAutomaticEmail(),
            'send_automatic_whatsapp' => $this->isSendAutomaticWhatsapp(),
            'order_group' => $this->getOrderGroup(),
            'custom_message' => $this->getCustomMessage(),
            'phone_country' => $this->getPhoneCountry(),
            'phone_number' => $this->getPhoneNumber(),
            'lock_email' => $this->isLockEmail(),
            'blank_email' => $this->isBlankEmail(),
            'hide_email' => $this->isHideEmail(),
            'lock_phone' => $this->isLockPhone(),
            'blank_phone' => $this->isBlankPhone(),
            'hide_phone' => $this->isHidePhone(),
            'lock_name' => $this->isLockName(),
            'require_selfie_photo' => $this->isRequireSelfiePhoto(),
            'selfie_validation_type' => $this->getSelfieValidationType(),
            'qualification' => $this->getQualification(),
            'external_id' => $this->getExternalId(),
            'redirect_link' => $this->getRedirectLink(),
        ];
    }
}