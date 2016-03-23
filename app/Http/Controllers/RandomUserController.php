<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Faker\Factory as Faker;
use Illuminate\Http\Request;
class RandomUserController extends Controller {

    public function getRandomUser() {
        return view('randomuser.index');
    }

    public function postRandomUser(Request $request) {
        if(isset($_POST['number'])) {
            $number = $_POST['number'];
        }

        $faker = Faker::create();

        return view('randomuser.index')->with('faker',$faker)->with('number',$number);
    }

}
