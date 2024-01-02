<?php

namespace App\Listeners;

use App\Events\ProductPurchased;
use App\Mail\SendNewProductEmail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class UpdateProductQuanntity
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(ProductPurchased $event): void
    {
        // dd($event);
        $event->product->quantity -= 1;
        $event->product->save();
        // Mail::to('imhayatunnabi@gmail.com')->queue(new SendNewProductEmail($event->product));
    }
}
