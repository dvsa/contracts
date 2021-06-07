<?php
declare(strict_types=1);

namespace Dvsa\Contracts\Auth;

use ArrayAccess;

interface OAuthClientInterface extends ClientInterface
{
    public function decodeToken(string $token): bool;

    public function refreshTokens(string $refreshToken, string $identifier): string;

    public function getUserByToken(string $token): ArrayAccess;
}
