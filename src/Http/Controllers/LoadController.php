<?php

namespace Mj\Send\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Mj\Send\Models\Send;
use Mail;

class LoadController extends Controller
{
    public function index()
    {
        return view("send::tester");
    }

    public function send(Request $request)
    {
        $email = $request->email;
        $data = [
            'name' => $request->name,
            'note' => $request->note,
        ];
        Mail::send('send::Email.testmail',$data,function ($message) use($email)
        {
            $message->to(config('send.send_email_to'))->subject("Test Mail");
            $message->from('manu.joseph@cubettech','Manu Joseph');
        });
        Send::create($request->all());
        return redirect(route('loader'));
    }
}
