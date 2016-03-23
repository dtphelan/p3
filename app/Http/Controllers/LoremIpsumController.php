<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Badcow\LoremIpsum\Generator as LoremGenerator;
use Illuminate\Http\Request;
class LoremIpsumController extends Controller {

    public function getLoremIpsum() {
        return view('loremipsum.index');
    }

    public function postLoremIpsum(Request $request) {
        if(isset($_POST['number'])) {
            $number = $_POST['number'];
        }

        $generator = new LoremGenerator();
        $paragraphs = $generator->getParagraphs($number);

        return view('loremipsum.index')->with('paragraphs',$paragraphs);
    }

}
