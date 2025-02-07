<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Hash;
use Illuminate\Http\Request;

class LoginRegister extends Controller
{
    public function register(Request $request)
    {
        // dd($request->all());
        $userName = $request->user_name;
        $mobile = $request->user_mobile;
        $email = $request->user_email;
        $password = $request->user_password;
        $date_of_birth = $request->user_dob;
        $address = $request->user_address;
        $exist_email = User::where('email', $email)->exists();
        $message = "";
        $status = "";

        if ($exist_email) {
            $message = "Email id already exist";
            $status = false;
        } else {
            $HashPassword = Hash::make($password);
            $newUser = new User;
            $newUser->name = $userName;
            $newUser->email = $email;
            $newUser->password = $HashPassword;
            $newUser->user_role_id = 1;
            // ::create(['user_role_id' => 1, 'name' => $userName, 'email' => $email, 'password' => $HashPassword]);
            $newUser->phone = $mobile;
            $newUser->dob = $date_of_birth;
            $newUser->address = $address;
            ;

            try {
                if ($newUser->save()) {
                    $request->session()->put('auth', $newUser->id);
                    $request->session()->put('userName', $newUser->name);

                    $message = "Register Sccessfully";
                    $status = true;
                }
            } catch (Exception $e) {
                return $e;
            }
        }
        return response()->json(['message' => $message, 'status' => $status]);
    }

    public function login(Request $request)
    {
        $message = "";
        $status = "";

        $email = $request->user_email;
        $password = $request->user_password;
        $exist_user = User::select(['id', 'name', 'email', 'password', 'user_role_id'])->where('email', $email)->first();

        if ($exist_user) {
            if ($exist_user && Hash::check($password, $exist_user->password)) {
                $request->session()->put('auth', $exist_user->id);
                $request->session()->put('userName', $exist_user->name);
                $message = "login successfully";
                $status = true;
            } else {
                $message = "Password is incorrect";
                $status = false;
            }
        } else {
            $message = "Email not exist";
            $status = false;
        }

        return response()->json(['message' => $message, 'status' => $status]);
    }

    public function logout(Request $request)
    {
        $request->session()->flush();
        return redirect('/');
    }
}
