<?php

declare(strict_types=1);

namespace DatingLibre\AppApi\Subscription;

use DateTimeInterface;
use Symfony\Component\Uid\Uuid;

interface SubscriptionEventServiceInterface
{
    /**
     * @throws ActiveSubscriptionExistsException
     * @throws UserNotFoundException
     */
    public function create(Uuid $userId,
                           string $provider,
                           string $providerSubscriptionId,
                           ?DateTimeInterface $renewalDate,
                           DateTimeInterface $expiryDate,
                           array $data): void;

    /**
     * @throws UserNotFoundException
     * @throws SubscriptionNotFoundException
     */
    public function renew(string $provider,
                          ?string $providerSubscriptionId,
                          DateTimeInterface $nextRenewalDate,
                          DateTimeInterface $expiryDate,
                          array $data): void;

    public function cancel(string $provider, ?string $providerSubscriptionId, array $data): void;

    public function expire(string $provider, ?string $providerSubscriptionId, array $data): void;

    public function failNewSale(Uuid $userId, string $provider, array $data): void;

    public function failRenewal(string $provider,
                                ?string $providerSubscriptionId,
                                ?DateTimeInterface $nextRetryDate,
                                array $data): void;

    public function chargeback(string $provider, ?string $providerSubscriptionId, array $data): void;


    public function refund(string $provider, ?string $providerSubscriptionId, array $data): void;

    public function changeBillingDate(string $provider,
                                      ?string $providerSubscriptionId,
                                      DateTimeInterface $nextBillingDate,
                                      array $data);

    public function error(SubscriptionError $subscriptionError): void;
}