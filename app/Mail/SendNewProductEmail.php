<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class SendNewProductEmail extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    public $product;
    public $subject;
    public $message;

    public function __construct( $product, $subject, $message) {
        $this->product = $product;
        $this->subject = $subject;
        $this->message = $message;
    }


    public function build(){
        $subject = $this->subject($this->subject);
        $product = $this->product;
        $message = $this->message;
        return $subject->view('emails.new_product_notification')->with([
            'subject' => $subject,
            'product' => $product,
            'message' => $message,
        ]);
    }
}
