<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Product;
use Mail;
use Session;
use App\Mail\sendmail;

use App\Http\Controllers\Controller;
use Illuminate\Mail\Mailer;
use Notification;

use App\Sub_Category;
use App\Category;

class PageController extends Controller
{
    public function getIndex()
    {

        $images = Product::orderby('id', 'desc')->take(5)->get();
        $images2 = Product::orderby('id', 'desc')->skip(5)->take(5)->get();
        $images3 = Product::orderby('id', 'desc')->skip(10)->take(5)->get();
        $images4 = Product::orderby('id', 'desc')->skip(15)->take(5)->get();
        return view('pages.home')
        ->withImages($images)
        ->withImages2($images2)
        ->withImages3($images3)
        ->withImages4($images4);
    }

    public function getAbout()
    {
        return view('pages.about');        
    }
    public function getContact()
    {
        return view('pages.contact');
    }

    public function postContact(Request $request)
    {
        $this->validate($request,
        [
            'email' => 'required|email',
            'subject'=> 'min:10',
            'message' => 'min:10'
        ]);

        $data = array(
           'email' => $request->email,
           'subject' => $request->subject,
           'bodyMessage' => $request->message
        );

        Mail::send('emails.contact', $data, function($message) use ($data)
    {
        $message->from($data['email']);
        $message->to('hagger58@gmail.com');
        $message->subject($data['subject']);
    });

    // Session::first('succes', 'je email is verzonden');

    // return redirect()->url('/');

    }

    public function getStripboeken() 
    {
    $images = Product::orderby('id', 'desc')->where('subcategory_id', '=', '7')->take(5)->get();

    return view('categorieen.stripboeken')->withImages($images);
    }

    
    public function getKinderboeken() 
    {
    $images = Product::orderby('id', 'desc')->where('subcategory_id', '=', '1')->take(5)->get();
    $images2 = Product::orderby('id', 'desc')->where('subcategory_id', '=', '1')->skip(5)->take(5)->get();

    $images3 = Product::orderby('id', 'desc')->where('subcategory_id', '=', '2')->take(5)->get();
    $images4 = Product::orderby('id', 'desc')->where('subcategory_id', '=', '2')->skip(5)->take(5)->get();

    $images5 = Product::orderby('id', 'desc')->where('subcategory_id', '=', '3')->take(5)->get();
    $images6 = Product::orderby('id', 'desc')->where('subcategory_id', '=', '3')->skip(5)->take(5)->get();
    
    return view('categorieen.kinderboeken')->withImages($images)->withImages2($images2)->withImages3($images3)->withImages4($images4)->withImages5($images5)->withImages6($images6);
    }

    public function getPrentenboeken() 
    {
        $images = Product::orderby('id', 'desc')->where('subcategory_id', '=', '1')->get();
        $images2 = Product::orderby('id', 'desc')->where('subcategory_id', '=', '1')->get();
        return view('categorieen.sub-categorie.kinderboeken.prentenboeken')->withImages($images)->withImages2($images2);
    }
    public function getKleurboeken() 
    {
        $images = Product::orderby('id', 'desc')->where('subcategory_id', '=', '2')->get();
        $images2 = Product::orderby('id', 'desc')->where('subcategory_id', '=', '2')->get();
        return view('categorieen.sub-categorie.kinderboeken.kleurboeken')->withImages($images)->withImages2($images2);
    }

    public function getVerhalenensprookjes() 
    {
        $images = Product::orderby('id', 'desc')->where('subcategory_id', '=', '3')->get();
        $images2 = Product::orderby('id', 'desc')->where('subcategory_id', '=', '3')->get();
        return view('categorieen.sub-categorie.kinderboeken.verhalenensprookjes')->withImages($images)->withImages2($images2);
    }
    

    public function getLiteratuur() 
    {
    $images = Product::orderby('id', 'desc')->where('subcategory_id', '=', '1')->take(5)->get();

    return view('categorieen.literatuur')->withImages($images);
    }


    public function getHobby() 
    {
    $images = Product::orderby('id', 'desc')->where('subcategory_id', '=', '1')->take(5)->get();

    return view('categorieen.hobby')->withImages($images);
    }

    
    public function getInformatief() 
    {
    $images = Product::orderby('id', 'desc')->where('subcategory_id', '=', '1')->take(5)->get();

    return view('categorieen.informatief')->withImages($images);
    }


    public function getGezondheid() 
    {
    $images = Product::orderby('id', 'desc')->where('subcategory_id', '=', '1')->take(5)->get();

    return view('categorieen.gezondheid')->withImages($images);
    }

    
    public function getReligie() 
    {
    $images = Product::orderby('id', 'desc')->where('subcategory_id', '=', '1')->take(5)->get();

    return view('categorieen.religie')->withImages($images);
    }

    public function getPayed() 
    {

    return view('pages.payed');
    }
}
