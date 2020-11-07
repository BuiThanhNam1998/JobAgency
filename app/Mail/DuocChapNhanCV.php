<?php

namespace App\Mail;

use App\Danhgia;
use App\hoso;
use App\tintuyendung;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class DuocChapNhanCV extends Mailable
{
    use Queueable, SerializesModels;
    protected $hoso;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(hoso $hoso)
    {
        $this->hoso = $hoso;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $hoso =$this->hoso;
        $tintuyendung = $hoso->tintuyendung;
        return $this->view('mails.duocchapnhancv',compact('hoso','tintuyendung'))
            ->subject('Công ty CADS chúc mừng CV của bạn đã được chấp nhận!');
    }
}
