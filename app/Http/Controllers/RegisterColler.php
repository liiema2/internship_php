<?php

namespace App\Http\Controllers;
use  Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class RegisterColler extends Controller
{
    //
    public function  create(){
        return view('register.create');
    }

    public function store(){
        $attributes = request()->validate([
            'email' => 'required|email|max:255|unique:accounts,email',

        ]);

            dd($attributes);
        // if (! auth()->attempt($attributes)) {
        //     throw ValidationException::withMessages([
        //         'name' => 'Your provided credentials could not be verified.'

        //     ]);
        //     return redirect()->route('error_login');
        // }

        try {
            if (!auth::attempt($attributes)) {
                throw ValidationException::withMessages([
                    'name' => 'Your provided credentials could not be verified.'
                ]);
            }

            // Đăng nhập thành công, chuyển hướng đến trang chính.
            return route('session.password.reset');
        } catch (ValidationException $e) {
            // Xác thực thông tin đăng nhập thất bại, chuyển hướng đến trang lỗi.
            // return redirect('error');
        }
    }
}
