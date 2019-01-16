<?php

namespace App\Http\Controllers\admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use Illuminate\Support\Facades\Session;

class AdminLoginController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware("guest:admin");
    }

    public function index(Request $request)
    {
        $admin = $request->session()->get('admin');
        if (isset($admin)) {
            return redirect(route('job.index'));
        }
        return view("admin.pages.auth.login");
    }

    public function authenticate($credentials)
    {

        $admin = Auth::guard("admin")->getProvider()->retrieveByCredentials($credentials);
        Auth::guard("admin")->login($admin, false); //admin from db and token set to false here
    }

    /**
     * @param Request $request
     */
    public function login(Request $request)
    {
        $this->validate($request,
            ['username' => 'required'],
            ['password' => 'required']
        );

        /* if (Admin::where('admin_email', '=', $request->username)
        ->where('admin_pass', '=', hash('md5',$request->password))->exists()) {
            session()->flash('Success', "Welcome back..... ". $request->username);
            session(['loggedUser' => $request->username]);
            return redirect(route("blog.index"));
        } else {
            return back()->with('Error', 'Invalid credentials provided')->withInput(['username' => $request->username]);
        }*/

        $credentials = ["email" => $request->username, 'password' => $request->password]; //map to table fields

        if (User::where('email', '=', $request->username)
            ->where('password', '=', $request->password)->exists()
        ) {
            $this->authenticate($credentials);
            Session::put('admin', $request->username);
            $request->session()->put('admin', $request->username);
            session()->flash('Success', "Welcome back   " . $credentials['email']);
            session()->save();
            Session::save();
            $request->session()->save();
            // dd(session()->all());

            return redirect(route("job.index"));
        }

        return back()->with('Error', 'Invalid credentials provided')->withInput(['username' => $request->username]);
    }

    public function logout(Request $request)
    {
        session()->flush();
        $request->session()->flush();
        return redirect('/adminLogin');
    }
}
