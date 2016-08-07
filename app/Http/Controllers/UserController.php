<?php

namespace App\Http\Controllers;

use App\User;

use Illuminate\Http\Request;
use Auth;
use Session;
class UserController extends Controller
{
    public function getSignup()
    {
        return view('user.signup');
    }

    public function postSignup(Request $request)
    {
        $this->validate($request,[
            'email'=>'required|email|unique:users',
            'password'=>'required|min:6'
        ]);
        $user= new User([
            'email'=>$request->input('email'),
            'password'=>bcrypt($request['password'])

        ]);
        $user->save();
        Auth::login($user);

        if (Session::has('oldUrl'))
        {
            $oldUrl=Session::get('oldUrl');
            Session::forget('oldUrl');
            return redirect()->to($oldUrl);

        }
        return redirect()->route('user.profile');

    }

    public function postSignin(Request $request)
    {
        $this->validate($request,[
            'email'=>'required|email',
            'password'=>'required|min:6'
        ]);
        if(Auth::attempt(['email'=>$request['email'],'password'=>$request['password']]))
        {
            if (Session::has('oldUrl'))
            {
                $oldUrl=Session::get('oldUrl');
                Session::forget('oldUrl');
                return redirect()->to($oldUrl);

            }
            return redirect()->route('user.profile');
        }
        return redirect()->back();
    }

    public function getSignin()
    {
        return view('user.signin');
    }
     public function getProfile()
    {
        $orders=Auth::user()->orders;
        $orders->transform(function ($order,$key){
            $order->cart=unserialize($order->cart);
            return $order;
        });
        return view('user.profile',['orders'=>$orders]);

    }

    public function getLogout()
    {
        Auth::logout();
        return redirect()->route('user.signin');
    }

}
