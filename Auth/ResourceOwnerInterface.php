<?php
declare(strict_types=1);

namespace Dvsa\Contracts\Auth;

use League\OAuth2\Client\Provider\ResourceOwnerInterface as BaseResourceOwnerInterface;

/**
 * @template-extends \ArrayAccess<string, mixed>
 */
interface ResourceOwnerInterface extends BaseResourceOwnerInterface, \ArrayAccess, \JsonSerializable
{
}
