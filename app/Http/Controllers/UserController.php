<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::paginate(env('PAGINATION'));
        return view('system_management.users.index', compact('users'));
    }

    public function create()
    {
        //is progressing...
    }

    public function store(Request $request)
    {
        //is progressing...
    }

    public function show($id)
    {
        //is progressing...
    }

    public function edit($id)
    {
        //is progressing...
    }

    public function update(Request $request, $id)
    {
        //is progressing...
    }

    public function destroy($id)
    {
        User::findOrFail($id)->delete();
        return redirect()->route('system_management.users.index');
    }
}
