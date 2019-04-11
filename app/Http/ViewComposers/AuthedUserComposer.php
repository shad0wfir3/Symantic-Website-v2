<?php

namespace App\Http\ViewComposers;

use App\Http\Resources\UserResource;
use App\Service;
use App\User;
use Illuminate\Http\Resources\Json\Resource;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthedUserComposer
{
    public $user = [];
    /**
     * Create a authenticasted user composer.
     *
     * @return void
     */
    public function __construct()
    {
        $auth_user = Auth::user();

        if($auth_user){

        $this->user = [
            'id' => $auth_user->id,
            'name' => $auth_user->name,
            'email' => $auth_user->email,
            'profile_thumb' => 'profile_thumb',
            'profile_img_original' => 'profile_original',
            'role' => 'role',
            ];

        }


    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('user', $this->user);
    }
}
