<?php

namespace Domain\Link\Exception;

final class InvalidShortCodeException extends \DomainException
{
  public function __construct(string $invalidValue)
  {
    parent::__construct("Invalid short code: \"{$invalidValue}\"");
  }
}
