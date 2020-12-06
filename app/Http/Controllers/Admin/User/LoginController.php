<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Admin\BaseController;
use App\Http\Requests\AdminLoginRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends BaseController
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

        return redirect(route('admin.user.login'))->withErrors(['error'=>'登录失败']);
    }

    public function logout(Request $request)
    {
    	auth()->logout();
    	return redirect(route('admin.user.login'))->with('success', '请重新登录');
    }

}
