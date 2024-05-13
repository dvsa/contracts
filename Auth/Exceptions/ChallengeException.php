<?php

namespace Dvsa\Contracts\Auth\Exceptions;

/**
 * This exception will be thrown when an authenticate call returns an
 * authentication challenge.
 *
 * @psalm-suppress MissingConstructor
 */
class ChallengeException extends \Exception
{
    /**
     * @var string
     */
    protected $challengeName;

    /**
     * @var array<string, mixed>
     */
    protected $parameters = [];

    /**
     * @var string
     */
    protected $session;

    public function getChallengeName(): string
    {
        return $this->challengeName;
    }

    public function setChallengeName(string $name): self
    {
        $this->challengeName = $name;

        return $this;
    }

    /**
     * @return array<string, mixed>
     */
    public function getParameters(): array
    {
        return $this->parameters;
    }

    /**
     * @param array<string, mixed> $parameters
     */
    public function setParameters(array $parameters): self
    {
        $this->parameters = $parameters;

        return $this;
    }

    public function getSession(): string
    {
        return $this->session;
    }

    public function setSession(string $session): self
    {
        $this->session = $session;

        return $this;
    }
}
