<?php

namespace Domain\Link\Exception;

final class InvalidLinkIdException extends \DomainException
{
  public function __construct(string $invalidValue)
  {
    parent::__construct("Invalid link ID: \"{$invalidValue}\"");
  }
}
