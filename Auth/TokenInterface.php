<?php
declare(strict_types=1);

namespace Dvsa\Contracts\Auth;

interface TokenInterface
{
    public function isValidToken(string $token): bool;
    public function refreshToken(string $token, string $identifier): string;
}
