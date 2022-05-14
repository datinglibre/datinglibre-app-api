<?php

declare(strict_types=1);

namespace DatingLibre\AppApi\Subscription;

use Symfony\Component\Uid\Uuid;

interface SubscriptionProviderInterface
{
    /**
     * Must be lowercase separated by underscores
     */
    public function getName(): string;
    public function getSignupUrl(Uuid $userId): string;
    public function getCancellationUrl(Uuid $userId, string $subscriptionId): ?string;

    /** @throws SubscriptionCancellationException */
    public function cancel(string $subscriptionId, array $data): string;
    public function isSignupActive(): bool;

    /** @throws SubscriptionProviderException */
    public function getStatus(string $subscriptionId): string;

    /** @throws SubscriptionProviderException */
    public function refund(string $subscriptionId, array $data): string;

    /**
     * Return false if webhook IP addresses have changed, null if not supported
     */
    public function verifyWebhookIps(): ?bool;
}