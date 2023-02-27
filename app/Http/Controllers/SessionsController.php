<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
// use Illuminate\Support\Facades\Password;

// use Illuminate\Support\Facades\Hash;
class SessionsController extends Controller
{
    //
    public function create()
    {
         return view('sessions.create');

        //  return redirect()->route('login');
    }
    public function error()
    {
         return view('error_login');


    }
    public function login()
    {
         return view('dashboard.index');


    }

    public function store()
    {

        $attributes = request()->validate([
            'name' => 'required',
            'password' => 'required'
        ]);

            // dd($attributes);
        // if (! auth()->attempt($attributes)) {
        //     throw ValidationException::withMessages([
        //         'name' => 'Your provided credentials could not be verified.'

        //     ]);
        //     return redirect()->route('error_login');
        // }

        try {
            if (!auth()->attempt($attributes)) {
                throw ValidationException::withMessages([
                    'name' => 'Your provided credentials could not be verified.'
                ]);
            }

            // Đăng nhập thành công, chuyển hướng đến trang chính.
            return redirect('/dashboard');
        } catch (ValidationException $e) {
            // Xác thực thông tin đăng nhập thất bại, chuyển hướng đến trang lỗi.
            return redirect()->route('error_login');
        }

        // session()->regenerate();



    }

//     public function show(){

//     request()->validate([
//         'email' => 'required|email',
//     ]);

//   return  $status = Password::sendResetLink(
//         request()->only('email')
//     );

//     return $status === Password::RESET_LINK_SENT
//                 ? back()->with(['status' => __($status)])
//                 : back()->withErrors(['email' => __($status)]);


//     }


     public function update(){

     }

}
