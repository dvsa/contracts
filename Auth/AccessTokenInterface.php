<?php
declare(strict_types=1);

namespace Dvsa\Contracts\Auth;

use League\OAuth2\Client\Token\AccessTokenInterface as BaseAccessTokenInterface;

/**
 * An extension to the AccessToken interface to include an Open ID Connect
 * compliant ID token.
 *
 * @see https://openid.net/specs/openid-connect-core-1_0.html
 */
interface AccessTokenInterface extends BaseAccessTokenInterface
{
    /**
     * Returns the id token string of this instance.
     *
     * @return string
     */
    public function getIdToken(): string;
}
