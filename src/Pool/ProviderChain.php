<?php

declare(strict_types=1);

namespace SilasJoisten\Sonata\MultiUploadBundle\Pool;

use Sonata\MediaBundle\Provider\MediaProviderInterface;

final class ProviderChain
{
    /**
     * @var array<string, MediaProviderInterface>
     */
    private array $providers = [];

    public function addProvider(MediaProviderInterface $provider): void
    {
        $this->providers[$provider->getName()] = $provider;
    }

    public function hasProvider(MediaProviderInterface $provider): bool
    {
        return in_array($provider->getName(), array_keys($this->providers), true);
    }

    /**
     * @return array<string, MediaProviderInterface>
     */
    public function getProviders(): array
    {
        return $this->providers;
    }
}
