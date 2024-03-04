<?php

namespace App\Traits;

use Illuminate\Support\Str;

use SMTP2GO\ApiClient;
use SMTP2GO\Types\Mail\Address;
use SMTP2GO\Service\Mail\Send as MailSend;
use SMTP2GO\Collections\Mail\AddressCollection;

trait SMPT2GoTrait
{
    public function SendOrderConfirmMail($full_name, $order_num) {
    
        // });
            // print_r(config('mail.from.address')) ; exit;
        $sendService = new MailSend(
            new Address(config('mail.from.address')),
            new AddressCollection([
                new Address(Auth()->user()->email),
            ]),
            'Order confirmed',
            $this->view("emails.order_confirm", compact("full_name", "order_num")),
        );

        $apiClient = new ApiClient('api-09DFDF6EB8AC4CB8B2A4AE546CA6A859');

        $apiClient->setTimeoutIncrement(5);
        $success = $apiClient->consume($sendService);
        
        $responseBody = $apiClient->getResponseBody();
        return $responseBody;
    }

    public function sendGeneralMail($to, $subject, $content) {
        $sendService = new MailSend(
            new Address(config('mail.from.address')),
            new AddressCollection([
                new Address(Auth()->user()->email),
            ]),
            $subject,
            $content,
        );

        $apiClient = new ApiClient('api-09DFDF6EB8AC4CB8B2A4AE546CA6A859');

        $apiClient->setTimeoutIncrement(5);
        $success = $apiClient->consume($sendService);
        
        $responseBody = $apiClient->getResponseBody();
        return $responseBody;
    }
}
