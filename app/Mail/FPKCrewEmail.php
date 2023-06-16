<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class FPKCrewEmail extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct($id_fpk_request, $nama, $nama_superior, $status, $email_pengaju, $email_superior)
    {
        $this->id_fpk_request = $id_fpk_request;
        $this->nama = $nama;
        $this->nama_superior = $nama_superior;
        $this->status = $status;
        $this->email_pengaju = $email_pengaju;
        $this->email_superior = $email_superior;
    }

    public function build()
    {

        $status = $this->status;

        // dd($this->status);


        if ($status == null) {
            // dd($this->email_pengaju);
            return $this->subject('Pengajuan FPK Crew oleh '.$this->nama)
            ->view('mail.request')
            ->with([
                'nama' => $this->nama,
                'id' => $this->id_fpk_request,
            ])
            ->to($this->email_superior);
        } 
        else if ($status == "Approve")
        {
            $status = "Disetujui";
            return $this->subject('Pengajuan FPK Crew oleh '.$this->nama)
                ->view('mail.approved')
                ->with([
                    'nama'      => $this->nama,
                    'id'        => $this->id_fpk_request,
                    'nama_superior' => $this->nama_superior,
                    'status'    => $status,
                ])->to($this->email_pengaju);
        } else {
            $status = "Ditolak";
            // dd($status);
            return $this->subject('Pengajuan FPK Crew oleh '.$this->nama)
                ->view('mail.approved')
                ->with([
                    'nama'      => $this->nama,
                    'id'        => $this->id_fpk_request,
                    'nama_superior' => $this->nama_superior,
                    'status'    => $status,
                ])->to($this->email_pengaju);
        }
        

        // return $this->subject('Pengajuan FPK Crew atas nama '.$this->nama)
            // ->view('mail.request')
            // ->with([
            //     'nama' => $this->nama,
            //     'id' => $this->id_fpk_request,
            // ])
            // ->to($this->email_superior);

            // return $this->subject('Pengajuan FPK Crew atas nama '.$this->nama)
        //         ->view('mail.approved')
        //         ->with([
        //             'nama'      => $this->nama,
        //             'id'        => $this->id_fpk_request,
        //             'nama_superior' => $this->nama_superior,
        //             'status'    => $status,
        //         ])->to($this->email_pengaju);


        
    }
}
