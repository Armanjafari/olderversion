<?php

namespace App\services\Notifications\Providers;

use App\services\Notifications\Providers\Contracts\Provider;
use App\User;
use \GuzzleHttp\Client;
class SmsProvider implements Provider{

    private $user;
    private $code;
    public function __construct(User $user , string $code)
    {
        $this->user = $user;
        $this->code = $code;
    }
    public function send()
    {
        //APIKEY 1MBWwEqHPAHXbO_3P0AGfnhsWRLOuJslxiCq8K32lN0=
        $client = new Client(['headers' => ['Authorization' =>'AccessKey 1MBWwEqHPAHXbO_3P0AGfnhsWRLOuJslxiCq8K32lN0='],
        'form_params' => [
            'pattern_code' => 'avolm8i3rb',
            'originator' => '+983000505',
            'recipient' => '+989014627125',
            'values' => [
                'OTP' => "1111"
            ]],
        'base_uri' => 'http://rest.ippanel.com/']);
        //dd($client);
        $response = $client->request('POST', 'v1/messages/patterns/send');

    }
}
?>
