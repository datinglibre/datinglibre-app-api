<?php

declare(strict_types=1);

namespace DatingLibre\AppApi\Image;

use Symfony\Component\Uid\Uuid;

interface ImageServiceInterface
{
    /** @throws ImageUploadException  */
    public function save(Uuid $userId, string $path, int $width, int $height, string $type, bool $isProfile): void;
    /** @return ImageInterface[]  */
    public function findAllByUser(Uuid $userId): array;
}