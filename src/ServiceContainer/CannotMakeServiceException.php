<?php

namespace IW\ServiceContainer;

class CannotMakeServiceException extends Exception
{
    public function __construct(string $id, \Throwable $previous = null)
    {
        parent::__construct('Cannot make service, id: ' . $id, $previous);
    }
}
