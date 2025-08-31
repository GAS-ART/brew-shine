<?php

namespace App\Http\Controllers;

use Mail;
use App\Http\Requests\sendRequest;

class FileSendController extends Controller
{
    public function submit(sendRequest $req)
{
    try {
        $name = $req->input('name');
        $phone = $req->input('phone');
        $text = $req->input('text'); // правильное имя поля

        Mail::send(['html' => 'mail'], [
            'name' => $name,
            'phone' => $phone,
            'text' => $text
        ], function ($message) {
            $message->to('temoha1386@gmail.com')
                ->subject('ЗАКАЗ ЗВОНКА ИЗ ФОРМЫ ОБРАТНОЙ СВЯЗИ');
        });

        return response()->json(['success' => true]);

    } catch (\Exception $e) {
        \Log::error("Mail send failed: " . $e->getMessage());

        return response()->json([
            'success' => false,
            'error' => 'Mail not sent'
        ], 500);
    }
}
}
