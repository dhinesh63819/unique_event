<?php

namespace App\Http\Controllers;

use App\Models\User;
use Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\App;


class ForgotPassword extends Controller
{

    public function submitForgotPasswordForm(Request $request)
    {

        $message = "";
        $status = "";
        $email = $request->email;

        $is_user = User::where('email', $request->email)->exists();
        if ($is_user) {
            $token = Str::random(64);

            DB::table('password_resets')->insert([
                'email' => $request->email,
                'token' => $token,
                'created_at' => Carbon::now()
            ]);

            $mail_send = Mail::send('email.forgotPassword', ['token' => $token], function ($message) use ($request) {
                $message->from(env('MAIL_USERNAME'));
                $message->to($request->email);
                $message->subject('Reset Password');
            });
            if ($mail_send) {
                $message = "We have emailed you reset password link";
                $status = true;
            } else {
                $message = "Mail not send";
                $status = false;
            }
        } else {
            $message = "Mail id not exist";
            $status = false;
        }


        // return back()->with('message', 'we have emailed you reset password link');
        return response()->json(['message' => $message, 'status' => $status]);
    }

    public function resetPassword(Request $request)
    {

        $message = "";
        $status = "";
        $alertMeaasge = "";

        // $request->validate([
        //     'email' => 'required|email|exists:users',
        //     'password' => 'required|min:6|confirmed',
        //     'password_confirmation' => 'required'
        // ]);

        $is_user = User::where('email', $request->email)->exists();
        if ($is_user) {
            $password_reset_request = DB::table('password_resets')
                ->where('email', $request->input('email'))
                ->where('token', $request->token)
                ->first();

            if (!$password_reset_request) {
                // return back()->with('error', 'Invalid Token!');
                $alertMeaasge = "Invalid Token";
                $status = false;
            } else {
                $reset_password = User::where('email', $request->input('email'))
                    ->update(['password' => Hash::make($request->input('password'))]);
                if ($reset_password) {
                    $message = "Password Reseted Successfully";
                    $status = true;
                } else {
                    $alertMeaasge = "Password Reset Fails Try again";
                    $status = false;
                }

                DB::table('password_resets')
                    ->where('email', $request->input('email'))
                    ->delete();
            }
        } else {
            $message = "Mail id not exist";
            $status = false;
        }


        // return redirect('/')->with('message', 'Your password has been changed!');
        return response()->json(['message' => $message, 'status' => $status, 'alertMeaasge' => $alertMeaasge]);

    }
}
