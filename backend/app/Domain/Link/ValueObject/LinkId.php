<?php

namespace Domain\Link\ValueObject;

use Domain\Link\Exception\InvalidLinkIdException;
use Ramsey\Uuid\Uuid;

final readonly class LinkId
{
  private function __construct(
    private string $value
  ) {}

  public static function fromString(string $value): self
  {
    if (!self::isValid($value)) {
      throw new InvalidLinkIdException($value);
    }

    return new self($value);
  }

  private static function isValid(string $value): bool
  {
    return Uuid::isValid($value);
  }

  public function value(): string
  {
    return $this->value;
  }

  public function equals(self $other): bool
  {
    return $this->value === $other->value;
  }
}
