<?php
namespace Vscale\Requests;

use Vscale\Entities\Balance;
use Vscale\Entities\Payment;

class BillingRequest extends BaseRequest
{
    protected $domain = 'billing';

    public function balance(): Balance
    {
        $responseData = $this->makeRequest('GET', $this->getRequestPath('balance'));

        return new Balance($responseData);
    }

    public function payments(): array
    {
        $responseData = $this->makeRequest('GET', $this->getRequestPath('payments'));

        return array_map(function($item) {
            return new Payment($item);
        }, $responseData['items']);
    }

    public function consumptions(string $start, string $end): array
    {
        $options = [
            'start' => $start,
            'end' => $end
        ];
        $responseData = $this->makeRequest('GET', $this->getRequestPath('consumption'), $options);

        // TODO: make correct response entity
        return $responseData;
    }
}