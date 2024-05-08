<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PharIo\Manifest\Url as ManifestUrl;
use ShortURL\ShortURL\Shorten;
use ShortUrl\Url;

class ShortUrlController extends Controller
{
    public function create()
    {
        return view('shorturlpages.first');
    }

    public  function shorturl(Request $request)
    {
        dd($request);
        $url = $request->input('url');

        $urlshorten = new Shorten();

        echo $urlshorten->text('https://www.youtube.com/watch?v=pYTXs1KP_fE&t=273s', $custom = "");

        // $urlshort = Url::class  ($url);

        // return view('shorturlpages.first', ['url' => $urlshort]);
    }
}
