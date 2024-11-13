<?php

namespace App\Http\Integrations\GetOnlinetrader\Requests\Signal;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class GetSignalSettings extends Request
{
    /**
     * The HTTP method of the request
     */
    protected Method $method = Method::GET;

    /**
     * The endpoint for the request
     */
    public function resolveEndpoint(): string
    {
        return '/signal-settings';
    }
}
