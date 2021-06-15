<?php
declare(strict_types=1);

namespace Dvsa\Contracts\Auth;

use ArrayAccess;

interface OAuthClientInterface extends ClientInterface
{
    public function authenticate(string $identifier, string $password): AccessTokenInterface;

    public function decodeToken(string $token): object;

    public function refreshTokens(string $refreshToken, string $identifier): AccessTokenInterface;

    public function getUserByAccessToken(string $token): ArrayAccess;
}
