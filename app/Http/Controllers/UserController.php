<?php

namespace App\Http\Controllers;

use App\DataTables\UserDataTable;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(UserDataTable $datatable)
    {
        //
        return $datatable->render('users.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'password' => 'required|min:3|confirmed',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);


        if(!$user) {
            dd('Debugging'); // Add this line for debugging
            return redirect()->back()->with('error', 'not success');
        }

        return redirect()->route('users.index')->with('success', 'create succesfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $users = User::find($id);
        return view('users.edit', compact('users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
        ]);

        $user = User::find($id);
        $user->name= $request->name;
        $user->email= $request->email;
        $user->save();


        if(!$user) {
            dd('Debugging'); // Add this line for debugging
            return redirect()->back()->with('error', 'not success');
        }

        return redirect()->route('users.index')->with('success', 'update succesfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::find($id);
        $user->delete();


        if(!$user) {
            dd('Debugging'); // Add this line for debugging
            return redirect()->back()->with('error', 'not success');
        }
        return redirect()->route('users.index')->with('success', 'delete succesfully');
    }
}
