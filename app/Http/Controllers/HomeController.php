<?php

namespace App\Http\Controllers;

use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    protected function index(Request $request)
    {

//        $now = Carbon::now();
//        return User::where('is_send', false)->where('remind_at', '<', $now)->get();

	
        return view('index');
		

    }

    /**
     * @param Request $request
     */
    protected function register(Request $request)
    {

        $email  = $request->input('email');
        $remind = $request->input('remind_at');
		

        $user            = new User();
        $user->email     = $email;
        $user->remind_at = $remind;
        $user->save();


        return redirect()->back()->with('message', 'basarili');

    }


}
