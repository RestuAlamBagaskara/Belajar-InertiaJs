<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;

class UserController extends Controller
{
    public function index() {
        $title = "User";
        $users = User::orderBy('id', 'Desc')->get();
        return Inertia::render('User/index', [
            "title" => $title,
            "users" => $users
        ]);
    }

    public function show(User $user) {
        $title = "Profile";
        // $user = User::find($id);
        return Inertia::render('User/detail', [
            "title" => $title,
            "user" => $user
        ]);
    }

    public function create() {
        return Inertia::render("User/register", [
            "title" => "Register",
        ]);
    }

    public function store(Request $request) {

        $request->validate([
            "name" => "required",
            "email" => "required|unique:users|email",
            "password" => "required|min:8",
        ]);
        //Cara Pertama
        // $user = new User();
        // $user->name = $request->name;
        // $user->email = $request->email;
        // $user->password = bcrypt($request->password);
        // $user->save();

        //Cara Kedua
        // User::create([
        //     "name" => $request->name,
        //     "email" => $request->email,
        //     "password" => bcrypt($request->password),
        // ]);


        //Cara Ketiga
        $user = $request->all();
        $user['password'] = bcrypt($request->password);
        User::create($user);

        return Redirect::route("user.index")->with("message",  "User Created");
    }

    public function edit($id){
        $user = User::find($id);
        return Inertia::render("User/edit", [
            "title" => "Edit Profile",
            'user' => $user
        ]);
    }

    public function update(Request $request, $id){
        //Cara Pertama
        // $user = User::find($id);
        // $user->name = $request->name;
        // $user->email = $request->email;
        // $user->save();

        //Cara Kedua
        $request->validate([
            "name" => "required",
            "email" => "required|email",
        ]);

        User::where('id', $id)->update([
            "name" => $request->name,
            "email" => $request->email,
        ]); 

        return Redirect::route("user.index")->with("message",  "User Updated");
    }

    public function destroy($id) {
        //Cara Pertama
        // $user = User::find($id);
        // $user->delete();

        //Cara kedua
        User::destroy($id);

        return Redirect::route("user.index")->with("message", "User Deleted");
    }
}
