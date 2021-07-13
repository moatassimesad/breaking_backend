<?php

namespace App\Http\Controllers;

use App\Models\user;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function store_gmail(Request $request){
        $this->validate($request,[
            'Mt' => 'required', //email
            'Ue' => 'required', //username
            'CJ' => 'required', //picture
        ]);
        $exist = User::where('uemail',$request->Mt)->first();
        if($exist){
            auth()->login($exist);
            $token = $exist->createToken('LaravelAuthApp')->accessToken;
            return response()->json(['token'=>$token,'user',auth()->user()],200);
        }
        else{
            $user = User::create([
                'username' => $request->Ue,
                'uemail' => $request->Mt,
                'userphoto' => $request->CJ,
                'usfcm' => 0,
                'ucountry' => $request->ip(),
                'totalposts' => 0,
                'totalfollowers' => 0,
                'totalfollowing' => 0,
                'ban' => 0,
                'u_public_key' => 0,
                'u_private_key' => 0,
            ]);
            auth()->login($user);

            $token = $user->createToken('LaravelAuthApp')->accessToken;
            return response()->json(['token'=>$token,'user',auth()->user()],200);
        }
    }
    public function store_facebook(Request $request){
        $this->validate($request,[
            'email' => 'required', //email
            'name' => 'required', //username
            'picture' => 'required', //picture
        ]);
        $exist = User::where('uemail',$request->email)->first();
        if($exist){
            auth()->login($exist);
            $token = $exist->createToken('LaravelAuthApp')->accessToken;
            return response()->json(['token'=>$token,'user',auth()->user()],200);
        }
        else{
            $user = User::create([
                'username' => $request->name,
                'uemail' => $request->email,
                'userphoto' => $request->picture,
                'usfcm' => 0,
                'ucountry' => $request->ip(),
                'totalposts' => 0,
                'totalfollowers' => 0,
                'totalfollowing' => 0,
                'ban' => 0,
                'u_public_key' => 0,
                'u_private_key' => 0,
            ]);
            auth()->login($user);
            $token = $user->createToken('LaravelAuthApp')->accessToken;
            return response()->json(['token'=>$token,'user',auth()->user()],200);
        }
    }

    public function logout()
    {
        $user = Auth::user()->token();
        $user->revoke();
        return 'logged out';
    }

    public function get_logged_user(){
        return true;
    }



    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\user  $user
     * @return \Illuminate\Http\Response
     */
    public function show(user $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\user  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, user $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\user  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(user $user)
    {
        //
    }
}
