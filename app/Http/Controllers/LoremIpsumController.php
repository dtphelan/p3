<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
class LoremIpsumController extends Controller {

    public function getLoremIpsum() {
        $view  = '<form method="POST">';
        $view .= csrf_field();
        $view .= 'Input field for Loem Ipsum: <input type="text" name="input">';
        $view .= '<input type="submit">';
        $view .= '</form>';
        return $view;
    }

    public function postLoremIpsum() {
        return 'Your input: '.$_POST['input'];
    }

}
