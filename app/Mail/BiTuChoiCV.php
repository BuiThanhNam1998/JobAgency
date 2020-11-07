<?php

namespace App\Mail;

use App\hoso;
use App\trangthai_hoso;
use App\tintuyendung;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class BiTuChoiCV extends Mailable
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
        return $this->view('mails.bituchoicv',compact('hoso','tintuyendung'))
            ->subject('Công ty CADS thông báo CV của bạn đã bị từ chối!');
    }
}
