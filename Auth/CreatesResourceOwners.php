<?php
declare(strict_types=1);

namespace Dvsa\Contracts\Auth;

trait CreatesResourceOwners
{
    /**
     * @var null|string
     * @psalm-var null|class-string<ResourceOwnerInterface>
     */
    protected $resourceOwnerClass = null;

    /**
     * @return null|string
     * @psalm-return null|class-string<ResourceOwnerInterface>
     */
    public function getResourceOwnerClass(): ?string
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
     * If no class string was provided, an anonymous class will be returned using `id` as the `getId()` key.
     */
    public function createResourceOwner(array $claims): ResourceOwnerInterface
    {
        if (!isset($this->resourceOwnerClass)) {
            return new class($claims) extends AbstractResourceOwner implements ResourceOwnerInterface {
                public function getId(): string
                {
                    return $this->get('id');
                }
            };
        }

        return new $this->resourceOwnerClass($claims);
    }
}
