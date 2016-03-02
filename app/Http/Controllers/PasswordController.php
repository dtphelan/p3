<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
class PasswordController extends Controller {

    public function getPassword() {
        $view  = '<form method="POST">';
        $view .= csrf_field();
        $view .= 'Input field for Password: <input type="text" name="input">';
        $view .= '<input type="submit">';
        $view .= '</form>';
        return $view;
    }

    public function postPassword() {
        return 'Your input: '.$_POST['input'];
    }

}
