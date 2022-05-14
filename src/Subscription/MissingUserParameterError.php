<?php

declare(strict_types=1);

namespace DatingLibre\AppApi\Subscription;

class MissingUserParameterError implements SubscriptionError
{
    private string $provider;
    private string $providerSubscriptionId;
    private array $data;

    public function __construct(string $provider, string $providerSubscriptionId, array $data)
    {
        $this->provider = $provider;
        $this->providerSubscriptionId = $providerSubscriptionId;
        $this->data = $data;
    }

    public function getProvider(): string
    {
        return $this->provider;
    }

    public function setProvider(string $provider): void
    {
        $this->provider = $provider;
    }

    public function getProviderSubscriptionId(): string
    {
        return $this->providerSubscriptionId;
    }

    public function getData(): array
    {
        return $this->data;
    }

    public function setData(array $data): void
    {
        $this->data = $data;
    }
}