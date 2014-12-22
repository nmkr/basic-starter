<?php

class AuthController extends BaseController {

    /**
     * Display the Login Page.
     *
     * @return Response
     */
    public function getLogin()
    {
        if (Auth::guest())
        {
            return View::make('auth.login');
        }

        return Redirect::to('dashboard');
    }

    /**
     * Login Page Post Auth.
     *
     * @return Response, Redirect
     */
    public function postLogin() {

        $rememberMe = (Input::get('remember') ? true : false);

        if (Auth::attempt(['email' => Input::get('email'), 'password' => Input::get('password')], $rememberMe))
        {
            return Redirect::to('dashboard');
        }
        else
        {
            Flash::error(Lang::get('messages.auth.wrong_credentials'));
            // Flash::overlay(Lang::get('messages.auth.wrong_credentials'));

            return Redirect::to('auth/login')->withInput();
        }
    }

    /**
     * Logout
     *
     * @return Redirect
     */
    public function getLogout() {
        Auth::logout();

        Flash::message(Lang::get('messages.auth.logout'));

        return Redirect::to('auth/login');
    }

}