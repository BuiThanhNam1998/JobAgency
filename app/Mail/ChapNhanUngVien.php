<?php

namespace App\Mail;

use App\hoso;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ChapNhanUngVien extends Mailable
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
        $this->hoso=$hoso;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $hoso =$this->hoso;
        return $this->view('mails.chapnhanungvien',compact('hoso'))
            ->subject('Công ty CADS chúc mừng thành viên mới!');
    }
}
