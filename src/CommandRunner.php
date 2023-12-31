<?php

namespace Bitwarden\Sdk;


use Bitwarden\Sdk\Schemas\Command;
use FFI;

class CommandRunner
{
    private FFI\CData $handle;

    private BitwardenLib $bitwardenLib;

    public function __construct(BitwardenLib $bitwardenLib, $handle)
    {
        $this->bitwardenLib = $bitwardenLib;
        $this->handle = $handle;
    }

    /**
     * @throws \Exception
     */
    public function run(Command $command): \stdClass
    {
        $result = $this->bitwardenLib->run_command($command);
        if ($result->success == true) {
            return $result->data;
        }

        if (isset($result->errorMessage))
        {
            throw new \Exception($result->errorMessage);
        }
        throw new \Exception("Unknown error occurred");
    }
}
