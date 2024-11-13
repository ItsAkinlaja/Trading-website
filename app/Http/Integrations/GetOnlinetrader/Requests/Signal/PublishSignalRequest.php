<?php

namespace App\Http\Integrations\GetOnlinetrader\Requests\Signal;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class PublishSignalRequest extends Request
{
    /**
     * The HTTP method of the request
     */
    protected Method $method = Method::GET;

    public function __construct(protected readonly string $signalId)
    {
    }

    /**
     * The endpoint for the request
     */
    public function resolveEndpoint(): string
    {
        return "/publish-signals/{$this->signalId}";
    }
}
