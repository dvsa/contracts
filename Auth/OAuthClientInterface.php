<?php
declare(strict_types=1);

namespace Dvsa\Contracts\Auth;

interface OAuthClientInterface
{
    public function authenticate(string $identifier, string $password): AccessTokenInterface;

    public function register(string $identifier, string $password, array $attributes = []): ResourceOwnerInterface;

    public function changePassword(string $identifier, string $newPassword): bool;

    public function changeAttribute(string $identifier, string $key, string $value): bool;
    public function changeAttributes(string $identifier, array $attributes): bool;

    public function enableUser(string $identifier): bool;
    public function disableUser(string $identifier): bool;

    public function decodeToken(string $token): object;

    public function refreshTokens(string $refreshToken, string $identifier): AccessTokenInterface;

    public function getUserByIdentifier(string $identifier): ResourceOwnerInterface;
}
