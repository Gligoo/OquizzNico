<?php
namespace App\Http\Controllers;
use App\User;
use Exception;
use LogicException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log; // permet d'écrire dans les fichiers de log quand il y a une erreur.
use Illuminate\Support\Facades\Hash;
use App\Utils\UserSession;
class UserController extends Controller
{
    /**
     * Signup page
     *
     * @return Illuminate\View\View
     */
    public function signupAction()
    {
        return view('user.signup');
    }
    /**
     * Signup form submission
     *
     * @param Request $request HTTP Request
     *
     * @return \Laravel\Lumen\Http\Redirector|\Illuminate\Http\RedirectResponse
     */
    public function signupPostAction(Request $request)
    {
        try {
            $firstName = $request->input('firstname');
            if (empty($firstName)) {
                throw new Exception('First name can\'t be empty');
            }
            $firstName = trim($firstName);
            if (empty($firstName)) {
                throw new Exception('First name can\'t contain only invisibile characters');
            }
            if (strlen($firstName) < 2) {
                throw new Exception('First name must be at least 2 characters long');
            }
            $lastName = $request->input('lastname');
            if (empty($lastName)) {
                throw new Exception('Last name can\'t be empty');
            }
            $lastName = trim($lastName);
            if (empty($lastName)) {
                throw new Exception('Last name can\'t contain only invisibile characters');
            }
            if (strlen($lastName) < 2) {
                throw new Exception('Last name must be at least 2 characters long');
            }
            $email = $request->input('email');
            if (empty($email)) {
                throw new Exception('Email can\'t be empty');
            }
            if (! filter_var($email, FILTER_VALIDATE_EMAIL)) {
                throw new Exception('Invalid email');
            }
            if (User::where('email', $email)->exists()) {
                throw new Exception('Email address is already used');
            }
            $password = $request->input('password');
            if (empty($password)) {
                throw new Exception('Password can\'t be empty');
            }
            $password = trim($password);
            if (empty($password)) {
                throw new Exception('Password can\'t contain only invisible characters');
            }
            $user = new User;
            $user->firstname = $firstName;
            $user->lastname  = $lastName;
            $user->email     = $email;
            $user->password  = Hash::make($password);
            $user->save();
            $response = redirect()->route('signin');
        } catch (Exception $exception) {
            Log::error($exception->getMessage());
            $response = redirect()->route('signup');
        }
        return $response;
    }
    /**
     * Signin page
     *
     * @return Illuminate\View\View|\Laravel\Lumen\Http\Redirector|\Illuminate\Http\RedirectResponse
     */
    public function signinAction()
    {
        if (UserSession::isConnected()) {
            $response = redirect()->route('home');
        } else {
            $response = response(
                view('user.signin')
            );
        }
        return $response;
    }
    /**
     * Signin form submit
     *
     * @param Request $request HTTP Request
     *
     * @return \Laravel\Lumen\Http\Redirector|\Illuminate\Http\RedirectResponse
     */
    public function signinPostAction(Request $request)
    {
        try {
            if (UserSession::isConnected()) {
                throw new LogicException('User already connected can\'t access to signin form');
            }
            $email = $request->input('email');
            $user = User
                ::where('email', $email)
                ->first()
            ;
            if (! $user) {
                throw new Exception('Email doesn\'t exist');
            }
            $password = $request->input('password');
            if (! Hash::check($password, $user->password)) {
                throw new Exception('Invalid user password');
            }
            UserSession::connect($user);
            $response = redirect()->route('home');
        } catch (LogicException $exception) {
            Log::critical($exception->getMessage());
            $response = redirect()->route('home');
        } catch (Exception $exception) {
            Log::error($exception->getMessage());
            $response = redirect()->route('signin');
        }
        return $response;
    }
    /**
     * User profile page
     *
     * @return Illuminate\View\View|\Laravel\Lumen\Http\Redirector|\Illuminate\Http\RedirectResponse
     */
    public function profileAction()
    {
        if (UserSession::isConnected()) {
            $user = UserSession::getUser();
            $response = response(
                view('user.profil', [
                    'user' => $user
                ])
            );
        } else {
            $response = redirect()->route('signin');
        }
        return $response;
    }
    /**
     * Signout form submit
     *
     * @return \Laravel\Lumen\Http\Redirector|\Illuminate\Http\RedirectResponse
     */
    public function signoutAction()
    {
        try {
            UserSession::disconnect();
        } catch (LogicException $exception) {
            Log::critical($exception->getMessage());
        }
        return redirect()->route('home');
    }

}
