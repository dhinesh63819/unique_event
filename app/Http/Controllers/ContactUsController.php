<?php

namespace App\Http\Controllers;

use App\Models\ContactUs;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function sendMessage(Request $request)
    {
        $message = "";
        $status = "";
        $name = $request->user_name;
        $mobile = $request->user_mobile;
        $email = $request->user_email;
        $message = $request->user_message;


        $new_message = new ContactUs;
        $new_message->name = $name;
        $new_message->email = $email;
        $new_message->phone = $mobile;
        $new_message->message = $message;


        if ($new_message->save()) {
            $message = "Message send successfully";
            $status = true;
        } else {
            $message = "Message send faild";

            $status = false;
        }
        return response()->json(['message' => $message, 'status' => $status]);
    }
}
