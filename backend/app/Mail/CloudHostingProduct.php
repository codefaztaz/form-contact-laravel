<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CloudHostingProduct extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($params_array)
    {
        $this->params_array = $params_array;

    }

    /**
     * Build the message.
     *
     * @return $this
     */

    public function build()
    {
       return $this->from('youremail')->subject('New Book Call')->view('mail')->with('params_array', $this->params_array);
      // var_dump($params_array);
    }
}
