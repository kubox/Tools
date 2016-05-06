<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;


class AuthController extends Controller
{
    use AuthenticatesAndRegistersUsers;

    protected $auth;

    /* 処理成功時のリダイレクト先 */
    protected $redirectTo = '/admin/dashboard';

    /* 処理成功時のリダイレクト先 優先的 */
    //protected $redirectPath = '/admin/dashboard';

    /* 失敗時のリダイレクト先 */
    protected $loginPath = '/login';

    /* ログイン認証で利用する項目 */
    protected $username = 'name';


    /**
     * @param Guard $auth
     */
    public function __construct(Guard $auth)
    {
        $this->middleware('guest', ['except' => ['getLogout','postRegister']]);

        $this->auth = $auth;
    }

    /**
     * @param LoginRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postLogin(LoginRequest $request)
    {
        $result = $this->auth->attempt(
            $request->only(['name', 'password']),
            $request->get('remember', false)
        );

        if (!$result) {
            return redirect()->route('get.login')
                ->with('message', 'ユーザー認証に失敗しました');
        }

        return redirect()->route('admin.dashboard.index');
    }

}
