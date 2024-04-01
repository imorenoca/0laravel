<?php

namespace App\Http\Controllers;
use Iluminate\Http\Request;
use App\Models\User;
use  Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return $users;
        /*$users = User::where('age', '>=',18)->orderBy ('age','desc')->get();
        return view('user.index', compact('users'));
        /*[
            "users"=> $users
        ]);*/
    }

    public function  create(){
        $user = new User;
        $user->name='Isabel';
        $user->email="demo@demo.com";
        $user->password= Hash::make('1234');
        $user->age=25;
        $user->address= "Calle falsa 123";
        $user->zip_code= 280202;
        $user->save();

        User::create([
            "name" => 'Ana',
            "email" =>'ana@gmail.com',
            "password" => Hash::make("123"),
            "age" => 30,
            "address" => "Avda. Principal",
            "zip_code" => 25555,
        ]);

        User::create([
            "name" => 'Juan',
            "email" => 'juan@gmail.com',
            "password"=>Hash::make('12345678'),
            "age"=> 40,
            "address"=>"C/Miravista",
            "zip_code"=>456,
            
        ]);
// controladores deben retornar
        return  redirect()->route('user.index') ->with('status','Usuarios Creados Exitosamente!');    
    }

}
