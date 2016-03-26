<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Faker\Factory as Faker;
use Illuminate\Http\Request;
class RandomUserController extends Controller {

    public function getRandomUser() {
        $number = 10;

        return view('randomuser.index')
            ->with('number',$number);
    }

    public function postRandomUser(Request $request) {
        $this->validate($request, [
            'number' => 'required|numeric|max:100|min:1',
        ]);

        if(isset($_POST['number'])) {
            $number = $_POST['number'];
        }

        $faker = Faker::create();

        return view('randomuser.index')
            ->with('faker',$faker)
            ->with('number',$number);
    }

}
