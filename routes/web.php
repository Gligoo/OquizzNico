<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('/', [
      'as' => 'home',
      'uses' => 'MainController@homeAction'
]);

$router->get('/quiz/{id}', [
    'as' => 'quiz',
    'uses' => 'QuizController@quizAction'
]);

$router->post('/quiz/{id}', [
    'as'   => 'quiz_post',
    'uses' => 'QuizController@quizPostAction'
]);

$router->get('/tags', [
    'as'   => 'tags',
    'uses' => 'TagController@tagsAction'
]);

$router->get('/tags/{tagId}/quiz', [
    'as'   => 'tag_quizzes',
    'uses' => 'TagController@quizzesAction'
]);

$router->get('/signup', [
    'as' => 'signup',
    'uses' => 'UserController@signupAction'
]);

$router->post('/signup', [
    'as'   => 'signup_post',
    'uses' => 'UserController@signupPostAction'
]);


$router->get('/signin', [
    'as' => 'signin',
    'uses' => 'UserController@signinAction'
]);

$router->post('/signin', [
    'as'   => 'signin_post',
    'uses' => 'UserController@signinPostAction'
]);

$router->get('/account', [
    'as'   => 'account',
    'uses' => 'UserController@profileAction'
]);

$router->post('/signout', [
    'as'   => 'signout',
    'uses' => 'UserController@signoutAction'
]);
