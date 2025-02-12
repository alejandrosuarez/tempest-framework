<?php

declare(strict_types=1);

namespace Tempest\Interface;

use Tempest\Http\Method;

interface Server
{
    public function getMethod(): Method;

    public function getUri(): string;

    public function getBody(): array;
}
