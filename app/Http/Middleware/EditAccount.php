<?php

namespace App\Http\Middleware;

use Closure;
use App\Services\UserService;
use Illuminate\Contracts\Auth\Guard;


/**
 * Class EditAccount
 * 編集権限がないログインユーザーは情報更新などを行わないようにする
 *
 * @package App\Http\Middleware
 */
class EditAccount
{
    /** @var UserService $user */
    protected $user;

    /** @var Guard */
    protected $guard;

    protected $viewmessage;

    /**
     * @param UserService $user
     * @param Guard $guard
     */
    public function __construct(UserService $user, Guard $guard)
    {
        $this->user = $user;
        $this->guard = $guard;

        $this->viewmesseage = [
            'success' => '',
            'error'   => ''
        ];
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     *
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $result = $this->user->getUserAttributes(
            //$request->route()->getParameter('account')
            $this->guard->user()->id
        );

        if (!$result) {
            $error = '編集権限がありません';

            return redirect()->route('admin.account.index', compact('error'));
        }

        return $next($request);
    }
}