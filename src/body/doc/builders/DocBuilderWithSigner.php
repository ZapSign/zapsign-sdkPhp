<?php

namespace Zapsign\Sdk\body\doc\builders;

use Zapsign\Sdk\body\signer\Signer;

interface DocBuilderWithSigner
{
    public function withSigner(Signer $signer);
}