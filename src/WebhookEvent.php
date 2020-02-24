<?php


namespace Chatbox\Laravel\Webhook;


class WebhookEvent
{
    public $request;

    /**
     * WebhookEvent constructor.
     * @param $request
     */
    public function __construct($request)
    {
        $this->request = $request;
    }


}
