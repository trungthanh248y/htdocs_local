<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class NewUserWelcome extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        //Hiển thị thông tin này trong email
        return $this->markdown('emails.user.newuserwelcome');//Sử dụng markdown thay vìew vì nó mang lại một
                                                                    // request ngược đến trang và nó k phải một đoạn html
                                                                    //thông thường.
    }
}
