<?php

namespace Zapsign\Sdk\body\signer;

class SignBatch implements \JsonSerializable
{
    private string $user_token;
    private array $signer_tokens;

    /**
     * @param string $user_token
     * @param array $signer_tokens
     */
    public function __construct(string $user_token, array $signer_tokens)
    {
        $this->user_token = $user_token;
        $this->signer_tokens = $signer_tokens;
    }

    /**
     * @return string
     */
    public function getUserToken(): string
    {
        return $this->user_token;
    }

    /**
     * @param string $user_token
     */
    public function setUserToken(string $user_token): void
    {
        $this->user_token = $user_token;
    }

    /**
     * @return array
     */
    public function getSignerTokens(): array
    {
        return $this->signer_tokens;
    }

    /**
     * @param array $signer_tokens
     */
    public function setSignerTokens(array $signer_tokens): void
    {
        $this->signer_tokens = $signer_tokens;
    }


    public function jsonSerialize(): array
    {
        return [
            'user_token' => $this->getUserToken(),
            'signer_tokens' => $this->getSignerTokens()
        ];
    }
}