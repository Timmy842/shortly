<?php

namespace Domain\Link\Exception;

final class InvalidUrlException extends \DomainException
{
  public function __construct(string $invalidValue)
  {
    parent::__construct("Invalid URL: \"{$invalidValue}\"");
  }
}
