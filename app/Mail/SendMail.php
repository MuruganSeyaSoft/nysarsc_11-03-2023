<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;
    public $data;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // return $this->subject('Mail from ItSolutionStuff.com')
        //             ->view('emails.myTestMail',$data);
        return $this->from('ersaravana386@gmail.com', 'Mailtrap')
            ->subject('Mailtrap Confirmation')
           // ->markdown('mails.exmpl')
            ->with([
                'name' => 'New Mailtrap User',
                'link' => '/inboxes/'
            ]);

    }
}

?>