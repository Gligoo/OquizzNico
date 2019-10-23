<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    /**
     * signup page
     *
     * @return Ilumminate\View\View
     */
     public function signupAction()
     {
         return view('user.signup'); // j'anticipe un créant un sous dossier pr mes vues ( user)
     }
}
