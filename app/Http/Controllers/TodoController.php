<?php

namespace App\Http\Controllers;

use App\Http\Requests\TodoRequest;
use App\Models\ModelTodo;

class TodoController extends Controller
{
    private $todos;

    public function __construct()
    {
        $this->todos = new ModelTodo();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $todos = $this->todos->all()->sortBy('id');
        return view('index', compact('todos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TodoRequest $request)
    {
       
        $name = $request->name;

        $cad = $this->todos->create([
            'name' => $name,
        ]);

        if ($cad) {
            return redirect('todos');
        } 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $todo = $this->todos->find($id);


        return view('create', compact('todo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TodoRequest $request, $id)
    {
        
        $name = $request->name;
        $this->todos->where(['id' => $id])->update([
            'name' => $name,

        ]);

        return  redirect('todos');  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $del = $this->todos->destroy($id);

       return ($del)? "Sim" : "Não";    
    }
}
