<?php

use App\Helpers\Whatsapp;
use RealRashid\SweetAlert\Facades\Alert as AlertBrowser;


function sendWa($number, $message, $sender, $withFlash = true)
{
    try {
        $wa = Whatsapp::sendMessage($number, $message);
        if ($wa->status) {
            if ($withFlash) AlertBrowser::success('Sukses!', 'Pesan dikirim!');
            $sender->status = 'success';

        } else {
            if ($withFlash) AlertBrowser::error('Gagal!', $wa->message);
            $sender->status_message = $wa->message;
        }
    } catch (\Exception $exception) {
        if ($withFlash) AlertBrowser::error('Gagal', $exception->getMessage());
        $sender->status = 'failed';
        $sender->status_message = $exception->getMessage();
    }
}

function rupiah($number)
{
    return "Rp " . number_format($number);
}
