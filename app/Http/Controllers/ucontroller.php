<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\ulogin;

use Validator;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;

class ucontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('signup');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('login');
    }
    public function chome()
    {
        return view('commonhome');
    }
    public function cgallery()
    {
        return view('commongallery');
    }
    public function ccontact()
    {
        return view('commoncontact');
    }
    public function ugallery()
    {
        return view('usergallery');
    }
    public function uhome()
    {
        
        $data=['loggeduserinfo'=>ulogin::where('uname','=',session('uname'))->first()];
        return view('uhome',$data);
    }
    public function ucontact()
    {
        return view('usercontact');
    }
    public function admin()
    {
        return view('adminhome');
    }
    public function logout()
    {
        if(session()->has('uname'))
        {
            session()->pull('uname');
            return redirect('/');
        }
        else
        {
            return redirect('/');
        }

    }
    


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request,[
            
            'name' => 'required',
            'uname' => 'required|unique:App\Models\ulogin,uname',
            'email' => 'required|email|unique:App\Models\ulogin,email',
            'mob' => 'required|digits:10|unique:App\Models\ulogin,mob',
            'add' => 'required',
            'pass' => 'required|min:5',
            'cpass' => 'required|same:pass',
        ]);

        $getname=request('name');
        $getuname=request('uname');
        $getemail=request('email');
        $getmob=request('mob');
        $getadd=request('add');
        $getpass=request('pass');
        $getcpass=request('cpass');
       


       
        $user=new ulogin();
        $user->name=$getname;
        $user->uname=$getuname;
        $user->email= $getemail;
        $user->mob=$getmob;
        $user->add=$getadd; 
        $user->pass= $getpass;
        $user->cpass=$getcpass;
        
        $user->save();
        return view('login');
        
    }
    public function logs(Request $request)
    {
        $request->validate([
            'uname' => 'required',
            'pass' => 'required',

        ]);
        $userinfo2 = ulogin::where([['uname',$request->uname],['pass',$request->pass]])->first();
        if($request->uname=='admin' && $request->pass=='admin')
            {
                $request-> session()->put('uname','admin');
                return redirect('/ah');

            }
            else if($userinfo2)
            {
                $request->session()->put('uname',$userinfo2->uname);
                        $request->session()->put('unamesid',$userinfo2->unamesid);
                        return redirect('/uh');
            }
            else{
                return back()->with('fail','Invalid Credentials !');
            }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
