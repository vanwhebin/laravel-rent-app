<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\AdminLoginRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function index()
    {
        if (auth()->check()) {
            return redirect(route('admin.index'));
        }
        return view('admin.login.login');
    }

    public function login(Request $request)
    {
        $post = $this->validate($request, [
            'username' => 'required',
            'password' => 'required'
        ]);

        $bool = auth()->attempt($post);
        if ($bool) {
            // 登录成功
	        return redirect(route('admin.index'));

        }

        return redirect(route('admin.login'))->withErrors(['error'=>'登录失败']);
    }

}
