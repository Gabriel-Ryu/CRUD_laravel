<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class UserController extends Controller
{
    public function index(){
        $users = User::all();
        return view('/users/select',['users' => $users]);
    }
    public function telaLogin(){
        $users = User::all();
        return view('/login',['users' => $users]);

    }
    public function login(Request $request){
        $users = User::all();
        foreach ($users as $user) {
            $accessName = $user['access_name'];
            $password = $user['password'];
            if(($accessName == $request->access_name) && $password == $request->password){
                return redirect('/home');
            }
        }
        $erro = 'erro credenciais';
        return view('/login',['users' => $users])->with('erro','erro credenciais');

    }

    public function register(){
        $users = User::all();
        return view('users.register',['users' => $users]);
    }

    public function storeRegister(Request $request){
        try{
            $user = new User;
            $user->name = $request->name;
            $user->access_name = $request->access_name;
            $user->email = $request->email;
            $user->password = $request->password;
            $user->status = 1;
            $user->adm = 0;
            if($request -> hasFile('image') && $request->file('image')->isValid()){
                $requestImage = $request->image;
                $extension = $requestImage->extension();
                $imageName = md5($requestImage-> getClientOriginalName() . strtotime("now")) . "." . $extension;
                $request->image->move(public_path('images/profileImages'),$imageName);
                $user->image = $imageName;
            }
            $user->save();
    
            return redirect('/');
        }
        catch(Exception $ex){

        }
    }

    public function create(Request $request){
        $user = new User;
        $user->name = $request->name;
        $user->access_name = $request->access_name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->status = 1;
        $user->adm = 0;
        $user->save();

        return redirect('/users/select');
    }

    public function update(Request $request){
        $user = User::find($request->id);
        $user->name = $request->name;
        $user->access_name = $request->access_name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->status = 1;
        $user->save();
        return redirect('/users/select');
    }

    public function delete(Request $request){
        $user = User::where('id',$request->id)->delete();
        return redirect('/users/select');
    }

    public function listHome(Request $request){
        $users = User::all();
        dd($request);
    }

    
}
