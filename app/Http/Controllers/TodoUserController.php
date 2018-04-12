<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Todo;

class TodoUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $todos = Todo::all();

        return view('pages.todo.index', [
            'todos' => $todos
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.todo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = $request->user();
        $data = $request->all();
        // $data['user_id'] = $user->id;
        // Jeito 1.
        // $todo = new Todo;
        // $todo->text = $data['text'];
        // $todo->user_id = $data['user_id'];
        // $todo->save();
        // Jeito 2.
        // $todo = new Todo;
        // $todo->text = $data['text'];
        // $todo->user()->associate($user);
        // $todo->save();
        // Jeito 3.   
        // Todo::create($data);
        // Jeito 4.
        $todo = $user->todos()->create($data);

        /**
         * Relacionamentos muitos para muitos
         */
        // $notaHeader = new NotaHeader;
        // $notaHeader->title = $data['title'];
        // $notaHeader->produtos()->attach($data['produtos']);
        // $notaHeader->save();

        return redirect('/')
            ->with('status', 'Tarefa criada');
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
        // Exibe a tarefa
        $todoToEdit = Todo::findOrFail($id);

        return view('pages.todo.edit', [
            'todoToEdit' => $todoToEdit,
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
        $data = $request->all();
        $todoToUpdate = Todo::findOrFail((int) $id);
        $todoToUpdate->update($data);
        return redirect("/users/{$todoToUpdate->id}/edit")
            ->with('status', 'Tarefa Atualizada');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $todoToDestroy = Todo::findOrFail((int) $id);
        $todoToDestroy->delete();

        return redirect('/todo')
            ->with('status', 'Tarefa removida');
    }
}
