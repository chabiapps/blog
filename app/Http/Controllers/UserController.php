<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::latest()->paginate(5);
        $pageTitle = 'Users';

        return view('users.index',compact('users','pageTitle'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

     /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->route('users.index')
                        ->with('success','User deleted successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        $pageTitle = 'User Detail';
        return view('users.show',compact('user','pageTitle'));
    }

    /**
     * Show edit page for user details
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $pageTitle = 'Edit';
        return view('users.edit',compact('user','pageTitle'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\user  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required'
        ]);

        $user->update($request->all());

        return redirect()->route('users.index')
                        ->with('success','Product updated successfully');
    }
}
