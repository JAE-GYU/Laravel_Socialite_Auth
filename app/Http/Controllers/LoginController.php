<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Users as Users;

class LoginController extends Controller
{
    // login with Facebook
    public function redirectFacebook() {
        return Socialite::driver('facebook')->redirect();
    }

    public function callbackFacebook() {
        $providerUser = Socialite::driver('facebook')->user();

        $user = Users::where(['provider_id' => $providerUser->getId(),'provider' => "facebook"])->first();

        if($user) {

            if(Auth::loginUsingId($user->id)) {
                return redirect()->action('MainController@index');
            }else {
                echo "faild";
            }
        }else {
            $storeUser = new Users;
            $storeUser->provider = "facebook";
            $storeUser->provider_id = $providerUser->getId();
            $storeUser->user_name = $providerUser->getName();
            $storeUser->save();


            if(Auth::loginUsingId($storeUser->id)) {
                return redirect()->action('MainController@index');
            }else {
                echo "faild";
            }
        }

    }

    // login with Google
    public function redirectGoogle() {
        return Socialite::driver('google')->redirect();
    }

    public function callbackGoogle() {
        $providerUser = Socialite::driver('google')->user();

        $user = Users::where(['provider_id' => $providerUser->getId(),'provider' => "google"])->first();

        if($user) {

            if(Auth::loginUsingId($user->id)) {
                return redirect()->action('MainController@index');
            }else {
                echo "faild";
            }
        }else {
            $storeUser = new Users;
            $storeUser->provider = "google";
            $storeUser->provider_id = $providerUser->getId();
            $storeUser->user_name = $providerUser->getName();
            $storeUser->save();


            if(Auth::loginUsingId($storeUser->id)) {
                return redirect()->action('MainController@index');
            }else {
                echo "faild";
            }
        }
    }

    // logout
    public function logout() {
        Auth::logout();

        return redirect()->action('MainController@index');
    }
}
