<?php
declare(strict_types=1);

namespace Dvsa\Contracts\Auth;

use ArrayAccess;

interface ClientInterface
{
    public function register(string $identifier, string $password, array $attributes = []): ArrayAccess;

    public function authenticate(string $identifier, string $password): bool;
    public function changePassword(string $identifier, string $newPassword): bool;

    public function changeAttribute(string $identifier, string $key, string $value): bool;
    public function changeAttributes(string $identifier, array $attributes): bool;

    public function enableUser(string $identifier): bool;
    public function disableUser(string $identifier): bool;

    public function getUserByIdentifier(string $identifier): ArrayAccess;
}
