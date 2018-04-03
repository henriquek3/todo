<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// Models
use App\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // \DB::enableQueryLog();

        $users = User::all();

        // dd(
        //     \DB::getQueryLog()            
        // );
        return view('pages.users.index', [
            'users' => $users,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $inputs = $request->all();
        User::create($inputs);

        return redirect('/')
            ->with('status', 'Usuário criado');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        dd(10);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // Armazena o usuário requisitado.
        $userToEdit = User::findOrFail($id);

        return view('pages.users.edit', [
            'userToEdit' => $userToEdit,
        ]);
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
        $inputs = $request->all();
        $userToUpdate = User::findOrFail((int) $id);
        // Jeito 1.
        // $userToUpdate->name = $inputs['name'];
        // $userToUpdate->save();
        // Jeito 2.
        // $userToUpdate->fill($inputs);
        // $userToUpdate->save();
        // Jeito 3.
        $userToUpdate->update($inputs);

        return redirect("/users/{$userToUpdate->id}/edit")->with('status', 'Usuário atualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $userToDestroy = User::findOrFail((int) $id);
        $userToDestroy->delete();

        return redirect('users')->with('status', 'Usuário removido');
    }
}
