<?php
declare(strict_types=1);

namespace Dvsa\Contracts\Auth;

use Dvsa\Contracts\Auth\Exceptions\ChallengeException;
use Dvsa\Contracts\Auth\Exceptions\ClientException;
use Dvsa\Contracts\Auth\Exceptions\InvalidTokenException;

interface OAuthClientInterface
{
    /**
     * @throws ChallengeException if an authentication challenge is returned for this user.
     * @throws ClientException when there is an issue with authenticating a user.
     */
    public function authenticate(string $identifier, string $password): AccessTokenInterface;

    /**
     * @throws ClientException when there is an issue while creating user.
     */
    public function register(string $identifier, string $password, array $attributes = []): ResourceOwnerInterface;

    /**
     * @throws ClientException when there is an issue with changing a user's password.
     */
    public function changePassword(string $identifier, string $newPassword): bool;

    /**
     * @throws ClientException when there is an issue with changing a user's attribute.
     */
    public function changeAttribute(string $identifier, string $key, string $value): bool;

    /**
     * @throws ClientException when there is an issue with changing a user's attributes.
     */
    public function changeAttributes(string $identifier, array $attributes): bool;

    /**
     * @throws ClientException when there is an issue enabling a user.
     */
    public function enableUser(string $identifier): bool;

    /**
     * @throws ClientException when there is an issue disabling a user.
     */
    public function disableUser(string $identifier): bool;

    /**
     * Requests and returns the resource owner of the given access token (if available).
     *
     * @throws InvalidTokenException when the token provided is invalid/expired.
     */
    public function getResourceOwner(AccessTokenInterface $token): ResourceOwnerInterface;

    /**
     * @throws InvalidTokenException when the token provided is invalid and cannot be decoded.
     */
    public function decodeToken(string $token): array;

    /**
     * @throws ChallengeException when a challenge is returned for this user.
     * @throws ClientException when there was an issue with refreshing the user's token.
     */
    public function refreshTokens(string $refreshToken, string $identifier): AccessTokenInterface;

    /**
     * @throws ClientException when there is an issue with authenticating a user.
     */
    public function getUserByIdentifier(string $identifier): ResourceOwnerInterface;
}
