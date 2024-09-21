<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserLoginRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthenticationController extends Controller
{
    public function login()
    {
        return view('login');
    }

     public function postLogin(UserLoginRequest $request)
    {
        $dataUserLogin = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        $remember = $request->has('remember');

        // kiểu tra có thông tin chưa, và mã hóa mật khẩu
        if (Auth::attempt($dataUserLogin,  $remember)) {
            if (Auth::user()->role == '1') {

                return redirect()->route('admin.products.listProduct');
            } else {
                echo "dang nhap vao user";
            }
        } else {
            return redirect()->back()->with([
                'message' => 'Email hoặc password không đúng',
            ]);
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login')->with([
            'message' => "Đăng xuất thành công"
        ]);
    }

    public function register(){
        return view('register');
    }

    public function postRegister(Request $request){
        $check = User::where('email', $request->email)->exists();
        if($check){
            return redirect()->back()->with([
                'message' => 'Tài khoản email đã tồn tại'
            ]);
        }else{
            $data = [
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password), 
            ];
            $newUser = User::create($data);

            return redirect()->route('login')->with([
                'message' => 'Đăng ký thành công, vui lòng đăng nhập'
            ]);
        }
    }       
}
