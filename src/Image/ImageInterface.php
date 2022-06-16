<?php

declare(strict_types=1);

namespace DatingLibre\AppApi\Image;

use DateTimeInterface;
use Symfony\Component\Uid\Uuid;

interface ImageInterface
{
    public function getId(): Uuid;
    public function getType(): string;
    public function getFilename(): string;
    public function getSecureUrl(): string;
    public function getIsProfile(): bool;
    public function getUpdatedAt(): DateTimeInterface;
    public function getCreatedAt(): DateTimeInterface;
    public function isAccepted(): bool;
    public function isRejected(): bool;
    public function isUnmoderated(): bool;
}


