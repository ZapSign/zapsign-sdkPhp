<?php

namespace Zapsign\Sdk\body\doc;

class Rubrica implements \JsonSerializable
{
    private int $page = 0;
    private float $relative_position_bottom = 0.0;
    private float $relative_position_left = 0.0;
    private float $relative_size_x = 0.0;
    private float $relative_size_y = 0.0;
    private string $type = '';
    private string $signer_token = '';

    /**
     * @return int
     */
    public function getPage(): int
    {
        return $this->page;
    }

    /**
     * @param int $page
     */
    public function setPage(int $page): void
    {
        $this->page = $page;
    }

    /**
     * @return float
     */
    public function getRelativePositionBottom(): float
    {
        return $this->relative_position_bottom;
    }

    /**
     * @param float $relative_position_bottom
     */
    public function setRelativePositionBottom(float $relative_position_bottom): void
    {
        $this->relative_position_bottom = $relative_position_bottom;
    }

    /**
     * @return float
     */
    public function getRelativePositionLeft(): float
    {
        return $this->relative_position_left;
    }

    /**
     * @param float $relative_position_left
     */
    public function setRelativePositionLeft(float $relative_position_left): void
    {
        $this->relative_position_left = $relative_position_left;
    }

    /**
     * @return float
     */
    public function getRelativeSizeX(): float
    {
        return $this->relative_size_x;
    }

    /**
     * @param float $relative_size_x
     */
    public function setRelativeSizeX(float $relative_size_x): void
    {
        $this->relative_size_x = $relative_size_x;
    }

    /**
     * @return float
     */
    public function getRelativeSizeY(): float
    {
        return $this->relative_size_y;
    }

    /**
     * @param float $relative_size_y
     */
    public function setRelativeSizeY(float $relative_size_y): void
    {
        $this->relative_size_y = $relative_size_y;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType(string $type): void
    {
        $this->type = $type;
    }

    /**
     * @return string
     */
    public function getSignerToken(): string
    {
        return $this->signer_token;
    }

    /**
     * @param string $signer_token
     */
    public function setSignerToken(string $signer_token): void
    {
        $this->signer_token = $signer_token;
    }

    public function jsonSerialize(): array
    {
        return [
            'page' => $this->getPage(),
            'relative_position_bottom' => $this->getRelativePositionBottom(),
            'relative_position_left' => $this->getRelativePositionLeft(),
            'relative_size_x' => $this->getRelativeSizeX(),
            'relative_size_y' => $this->getRelativeSizeY(),
            'type' => $this->getType(),
            'signer_token' => $this->getSignerToken()
        ];
    }
}