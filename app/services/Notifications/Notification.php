<?php

namespace App\services\Notifications;

use App\User;
use Illuminate\Contracts\Mail\Mailable;
use Illuminate\Support\Facades\Mail;
use \GuzzleHttp\Client;
class Notification{



    public function sendEmail(User $user , Mailable $mailable)
    {

        return Mail::to($user)->send($mailable);
    }
    public function sendsms(User $user , string $code)
    {
        //APIKEY 1MBWwEqHPAHXbO_3P0AGfnhsWRLOuJslxiCq8K32lN0=
        $client = new Client(['headers' => ['Authorization' =>'AccessKey
        1MBWwEqHPAHXbO_3P0AGfnhsWRLOuJslxiCq8K32lN0='],'form_params' => ['originator' => '+983000505','recipients' => '+989014627125','message' => 'this is a great test!!!'],
        'base_uri' => 'http://rest.ippanel.com/']);
       // dd($client);
        $response = $client->request('POST', 'v1/messages');
        dd($response);

    }
}
?>
