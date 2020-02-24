<?php
namespace Chatbox\Laravel\Webhook\Http\Action;

use Chatbox\Laravel\Webhook\WebhookEvent;

class Webhook {

    public function handle()
    {
        event(new WebhookEvent(request()));
        return [];
    }
}
