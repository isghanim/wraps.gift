<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;


class RedirectController extends Controller
{
    public function bigShawnRedirect(): View
    {
//        TODO: retrieve these values from the DB

        return view('redirect', [
            'title' => 'Happy Birthday, Shawnee!',
            'description' => "We have a very special meowssage for you.",
            'imageUrl' => 'https://cdn.shopify.com/s/files/1/0310/4781/1210/products/charcoal_512x512.png?v=1584462628',
            'url' => 'https://isghanim.notion.site/Happy-Birthday-Shawnee-2172d14aebea4ae9b323f065405c289b',
        ]);
    }

    public function roseyKismetRedirect(): View
    {
//        TODO: retrieve these values from the DB

        return view('redirect', [
            'title' => 'Happy Birthday, Roya!',
            'description' => "Enjoy whatever the hell this is...",
            'imageUrl' => '',
            'url' => 'https://tally.so/r/wkd58M',
        ]);
    }
}
