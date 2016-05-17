<?php

namespace App\Composers;

use Illuminate\Contracts\Auth\Guard;
use Illuminate\Contracts\View\View;

/**
 * View Composerを利用して、テンプレートへのレンダー処理を分割します
 *
 * Class UserComposer
 * @package App\Composer
 */
class UserComposer
{
    protected $guard;

    /**
     * @param Guard $guard
     */
    public function __construct(Guard $guard)
    {
        $this->guard = $guard;
    }

    /**
     * @param View $view
     */
    public function compose(View $view)
    {
        $view->with('user', $this->guard->user());
    }
}