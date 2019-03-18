<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAdminRequest;
use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $admins = Admin::paginate(env('PAGINATION'));
        return view('system_management.admins.index', compact('admins'));
    }

    public function create()
    {
        return view('system_management.admins.create');
    }

    public function store(StoreAdminRequest $request)
    {
        Admin::create($request->all());
        return redirect()->route('system_management.admins.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $admin = Admin::findOrFail($id);
        return view('system_management.admins.edit', compact('admin'));
    }

    public function update(Request $request, $id)
    {
        Admin::findOrFail($id)
            ->update($request->all());
        return redirect()->route('system_management.admins.index');
    }

    public function destroy($id)
    {
        Admin::findOrFail($id)->delete();
        return redirect()->route('system_management.admins.index');
    }
}
