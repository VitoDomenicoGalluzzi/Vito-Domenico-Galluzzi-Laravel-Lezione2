<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContattaciMail;

class PublicController extends Controller
{
    public function home() {
        return view('welcome');
    }

    public function chiSiamo() {
        return view('ChiSiamo');
    }

    public function servizi() {
        return view('Servizi');
    }

    public function pagineArticoli() {

        $articles = [
            ['id' => '1', 'name' => 'Cuffie', 'brand' => 'Logitech', 'value' => '50 euro', 'image' => '/image/CuffieLogitech.PNG'  ],
            ['id' => '2', 'name' => 'PC', 'brand' => 'Lenovo', 'value' => '550 euro', 'image' => '/image/PC lenovo.PNG' ],
            ['id' => '3', 'name' => 'Mouse', 'brand' => 'Razer', 'value' => '17 euro', 'image' => '/image/Mouse Razer.PNG' ],
            ['id' => '4', 'name' => 'Tastiera', 'brand' => 'Trust', 'value' => '20 euro', 'image' => '/image/Tastiera Trust.PNG' ],
            ['id' => '5', 'name' => 'Cellulare', 'brand' => 'Apple', 'value' => '400 euro', 'image' => '/image/Cellulare Apple.PNG' ],
            ['id' => '6', 'name' => 'Joypad', 'brand' => 'Tarocco', 'value' => '60 euro', 'image' => '/image/joypad sony.PNG' ]
        ];


        return view('PagineArticoli', ['arrayArticles'=>$articles]);
    }

    public function paginaDettagli($id){
        
        $articles = [
            ['id' => '1', 'name' => 'Cuffie', 'brand' => 'Logitech', 'value' => '50 euro', 'image' => '/image/CuffieLogitech.PNG'  ],
            ['id' => '2', 'name' => 'PC', 'brand' => 'Lenovo', 'value' => '550 euro', 'image' => '/image/PC lenovo.PNG' ],
            ['id' => '3', 'name' => 'Mouse', 'brand' => 'Razer', 'value' => '17 euro', 'image' => '/image/Mouse Razer.PNG' ],
            ['id' => '4', 'name' => 'Tastiera', 'brand' => 'Trust', 'value' => '20 euro', 'image' => '/image/Tastiera Trust.PNG' ],
            ['id' => '5', 'name' => 'Cellulare', 'brand' => 'Apple', 'value' => '400 euro', 'image' => '/image/Cellulare Apple.PNG' ],
            ['id' => '6', 'name' => 'Joypad', 'brand' => 'Tarocco', 'value' => '60 euro', 'image' => '/image/joypad sony.PNG' ]
        ];

        foreach ($articles as $article) {
            if ($id == $article['id']) {

                return view('Pagina-Dettagli', ['singleArticle'=>$article]);
            }
            
        }

    }

    public function paginaContattaci() {
        return view('mail.Contattaci');
    }

    public function sendMail(Request $request) {

        $name = $request->input('name');
        $email = $request->input('email');
        $message = $request->input('message');

        // dd($name,$email,$message);

        $dataToSend=compact('name','email','message');

        Mail::to($email)->send(new ContattaciMail($dataToSend));


        return view('mail.Thankyou-Page', ['dati' => $dataToSend])->with('message', 'Richiesta inviata con Successo!');
    }

    public function tyPage(){
        return view('mail.Thankyou-Page');
    }
}
