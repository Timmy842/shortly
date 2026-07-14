<?php

namespace Domain\Link\Entity;

use Domain\Link\ValueObject\LinkId;
use Domain\Link\ValueObject\OriginalUrl;
use Domain\Link\ValueObject\ShortCode;

final class Link
{
  private function __construct(
    private readonly LinkId $id,
    private readonly OriginalUrl $originalUrl,
    private readonly ShortCode $shortCode,
    private ?string $title,
    private bool $isActive,
    private ?\DateTimeImmutable $expiresAt,
    private readonly ?\DateTimeImmutable $createdAt,
  ) {}

  // Factory method to create a new link
  public static function create(
    LinkId $id,
    OriginalUrl $originalUrl,
    ShortCode $shortCode,
    ?string $title = null,
    ?\DateTimeImmutable $expiresAt = null,
  ): self {
    return new self(
      id: $id,
      originalUrl: $originalUrl,
      shortCode: $shortCode,
      title: $title,
      isActive: true,
      expiresAt: $expiresAt,
      createdAt: new \DateTimeImmutable(),
    );
  }

  // Factory method to reconstitute a link from a database row
  public static function reconstitute(
    LinkId $id,
    OriginalUrl $originalUrl,
    ShortCode $shortCode,
    ?string $title,
    bool $isActive,
    ?\DateTimeImmutable $expiresAt,
    \DateTimeImmutable $createdAt,
  ): self {
    return new self(
      id: $id,
      originalUrl: $originalUrl,
      shortCode: $shortCode,
      title: $title,
      isActive: $isActive,
      expiresAt: $expiresAt,
      createdAt: $createdAt,
    );
  }
}
