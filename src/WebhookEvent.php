<?php


namespace Chatbox\Laravel\Webhook;


use Illuminate\Http\Request;

class WebhookEvent
{
    /** @var Request */
    public $request;

    /**
     * WebhookEvent constructor.
     * @param $request
     */
    public function __construct(Request $request)
    {
        $this->request = $request;
    }


}
