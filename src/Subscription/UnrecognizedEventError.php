<?php

declare(strict_types=1);

namespace DatingLibre\AppApi\Subscription;

class UnrecognizedEventError implements SubscriptionError
{
    private string $provider;
    private string $serializedEvent;

    public function __construct(string $provider, string $serializedEvent)
    {
        $this->provider = $provider;
        $this->serializedEvent = $serializedEvent;
    }

    public function getProvider(): string
    {
        return $this->provider;
    }

    public function setProvider(string $provider): void
    {
        $this->provider = $provider;
    }

    public function getSerializedEvent(): string
    {
        return $this->serializedEvent;
    }

    public function setSerializedEvent(string $serializedEvent): void
    {
        $this->serializedEvent = $serializedEvent;
    }
}