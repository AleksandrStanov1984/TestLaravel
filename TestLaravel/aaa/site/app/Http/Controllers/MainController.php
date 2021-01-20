<?php

namespace App\Http\Controllers;

use App\Models\ContactDB;
use App\Models\User;
use Illuminate\Http\Request;
use Symfony\Component\VarDumper\VarDumper;


class MainController extends Controller
{

    public function home()
    {
        return view('home');
    }

    public function about()
    {
        $reviews = new ContactDB();
        $countReview = $reviews->all();
        $count = 0;
        foreach ($countReview as $c) {
            $count++;
        }
        return view('about_product', ['count' => $count]);
    }

    public function product()
    {
        $reviews = new ContactDB();
        return view('product', ['reviews' => $reviews->all()]);
    }


//    public function review_check(Request $request)
//    {
//        $valid = $request->validate([
//            'name' => 'required|min:2|max:20',
//            'email' => 'required|min:10|max:50',
//            'subject' => 'max:100|min:1',
//            'message' => 'required|min:15|max:500'
//        ]);
//
//        $review = new ContactDB();
//        $review->name = $request->input('name');
//        $review->email = $request->input('email');
//        $review->subject = $request->input('subject');
//        $review->message = $request->input('message');
//        $review->created_at = date("Y-m-d H:i");
//
//        $review->save();
//
//        return redirect()->route('review');
//    }


    public function cmp($a, $b)
    {
        if ($a["date"] == $b["date"]) {
            return 0;
        }
        return (strtotime($a["date"]) < strtotime($b["date"])) ? -1 : 1;
    }


    public function access_user(Request $request)
    {
        $valid = $request->validate([
            'inputUsernameEmail' => 'required|email|min:5|max:50',
            'inputPassword' => 'required|min:4|max:20'
        ]);
        $login = $request->input('inputUsernameEmail');
        $password = $request->input('inputPassword');

        $users = User::all();


        foreach ($users as $u) {
            $a = strcmp($u->email, $login);
            $b = strcmp($u->password, $password);
            if ($a == 0 && $b == 0) {
                $products = new ContactDB();
                return view('product', ['products' => $products->all()]);
            }
        }

           // return redirect()->route('home');

    }

}
