<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
class PasswordController extends Controller {

    public function getPassword() {
        return view('password.index');
    }

    public function postPassword() {
        return 'Your input: '.$_POST['input'];
    }

}
