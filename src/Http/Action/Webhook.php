<?php
namespace Chatbox\Laravel\Webhook\Http\Action;

use Chatbox\Laravel\Webhook\WebhookEvent;

class Webhook {

    public function __invoke()
    {
        event(new WebhookEvent(request()));
        return [];
    }
}
