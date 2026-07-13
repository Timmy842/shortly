<?php

namespace Domain\Link\ValueObject;

use Domain\Link\Exception\InvalidShortCodeException;

final readonly class ShortCode
{
  private const LENGTH = 6;

  private function __construct(
    private string $value
  ) {}

  public static function fromString(string $value): self
  {
    if (!self::isValid($value)) {
      throw new InvalidShortCodeException($value);
    }

    return new self($value);
  }

  private static function isValid(string $value): bool
  {
    return preg_match('/^[a-zA-Z0-9]{' . self::LENGTH . '}$/', $value) === 1;
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
