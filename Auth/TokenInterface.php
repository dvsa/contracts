<?php
declare(strict_types=1);

namespace Dvsa\Contracts\Auth;

use ArrayAccess;

interface TokenInterface
{
    public function isValidToken(string $token): bool;
    public function refreshToken(string $token, string $identifier): string;
    public function getUserByToken(string $token): ArrayAccess;
}
