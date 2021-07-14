<?php
declare(strict_types=1);

namespace Dvsa\Contracts\Auth;

use League\OAuth2\Client\Provider\GenericResourceOwner;

trait CreatesResourceOwners
{
    /**
     * @var string
     * @psalm-var class-string<ResourceOwnerInterface>
     */
    protected $resourceOwnerClass = GenericResourceOwner::class;

    /**
     * @return string
     * @psalm-return class-string<ResourceOwnerInterface>
     */
    public function getResourceOwnerClass(): string
    {
        return $this->resourceOwnerClass;
    }

    /**
     * @param  string  $class
     * @psalm-param class-string<ResourceOwnerInterface> $class
     *
     * @return self
     */
    public function setResourceOwnerClass(string $class): self
    {
        $this->resourceOwnerClass = $class;

        return $this;
    }

    /**
     * Creates a resource owner object using the provided class name.
     */
    protected function createResourceOwner(array $claims, string $resourceOwnerId = 'id'): ResourceOwnerInterface
    {
        return new $this->resourceOwnerClass($claims, $resourceOwnerId);
    }
}
