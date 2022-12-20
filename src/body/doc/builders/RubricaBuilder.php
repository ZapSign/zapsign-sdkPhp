<?php

namespace Zapsign\Sdk\body\doc\builders;

use Zapsign\Sdk\body\doc\Rubrica;

class RubricaBuilder
{
    private Rubrica $rubrica;

    public function __construct()
    {
        $this->rubrica = new Rubrica();
    }

    public function withPage(int $page): static
    {
        $this->rubrica->setPage($page);
        return $this;
    }
    public function withRelativePositionBottom(float $relative_position_bottom): static
    {
        $this->rubrica->setRelativePositionBottom($relative_position_bottom);
        return $this;
    }
    public function withRelativePositionLeft(float $relative_position_left): static
    {
        $this->rubrica->setRelativePositionLeft($relative_position_left);
        return $this;
    }
    public function withRelativeSizeX(float $relative_size_x): static
    {
        $this->rubrica->setRelativeSizeX($relative_size_x);
        return $this;
    }
    public function withRelativeSizeY(float $relative_size_y): static
    {
        $this->rubrica->setRelativeSizeY($relative_size_y);
        return $this;
    }
    public function withType(string $type): static
    {
        $this->rubrica->setType($type);
        return $this;
    }
    public function withSignerToken(string $signer_token): static
    {
        $this->rubrica->setSignerToken($signer_token);
        return $this;
    }

    public function build(): Rubrica
    {
        return $this->rubrica;
    }


}