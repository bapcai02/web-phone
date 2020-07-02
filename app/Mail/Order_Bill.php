<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\DB;
use App\Bill;

class Order_Bill extends Mailable
{
    use Queueable, SerializesModels;
    public $order;
    public $orderdetails = [];
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->bill = $order ; 
        $this->orderdetails = $orderdetails;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('view.name');
    }
}
