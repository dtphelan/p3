<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Badcow\LoremIpsum\Generator as LoremGenerator;
use Illuminate\Http\Request;
class LoremIpsumController extends Controller {

    public function getLoremIpsum() {
        $number = 3;

        return view('loremipsum.index')
            ->with('number',$number);
    }

    public function postLoremIpsum(Request $request) {
        $this->validate($request, [
            'number' => 'required|numeric|max:10|min:1',
        ]);

        if(isset($_POST['number'])) {
            $number = $_POST['number'];
        }

        $generator = new LoremGenerator();
        $paragraphs = $generator->getParagraphs($number);

        return view('loremipsum.index')
            ->with('paragraphs',$paragraphs)
            ->with('number',$number);
    }

}
