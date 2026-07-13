<?php

namespace Domain\Link\ValueObject;

use Domain\Link\Exception\InvalidUrlException;

final readonly class OriginalUrl
{
  private function __construct(
    private string $value
  ) {}

  public static function fromString(string $value): self
  {
    if (!self::isValid($value)) {
      throw new InvalidUrlException($value);
    }

    return new self($value);
  }

  private static function isValid(string $value): bool
  {
    if (filter_var($value, FILTER_VALIDATE_URL) === false) {
      return false;
    }

    return str_starts_with($value, 'http://') || str_starts_with($value, 'https://');
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
