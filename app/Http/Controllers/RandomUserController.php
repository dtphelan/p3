<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
class RandomUserController extends Controller {

    public function getRandomUser() {
        $view  = '<form method="POST">';
        $view .= csrf_field();
        $view .= 'Input field for Random Users: <input type="text" name="input">';
        $view .= '<input type="submit">';
        $view .= '</form>';
        return $view;
    }

    public function postRandomUser() {
        return 'Your input: '.$_POST['input'];
    }

}
