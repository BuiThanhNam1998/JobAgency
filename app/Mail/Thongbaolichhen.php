<?php

namespace App\Mail;

use App\lichhen;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Thongbaolichhen extends Mailable
{
    use Queueable, SerializesModels;
    protected $lichhen;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(lichhen $lichhen)
    {
        $this->lichhen = $lichhen;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $lichhen =$this->lichhen;
        $hoso = $lichhen->hoso;
        $tintuyendung =$hoso->tintuyendung;
        return $this->view('mails.Thongbaolichhen',compact( 'lichhen', 'hoso','tintuyendung'))
            ->subject('Công ty CADS thông báo lịch phỏng vấn!');
    }
}
