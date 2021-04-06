<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasks = Task::all();

        return response($tasks);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'task_name'     => 'required|string',
            'task_details'  => 'required|string',
            'user_id'       => 'required|integer'
        ]);

        if($validator->fails()){
            return response($validator->errors());
        }

        $task = Task::create($request->all());

        return response($task);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $task = Task::find($id);
        return response($task);
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
        $validator = Validator::make($request->all(), [
            'task_name'     => 'required|string',
            'task_details'  => 'required|string',
            'user_id'       => 'required|integer'
        ]);

        if($validator->fails()){
            return response($validator->errors());
        }
        
        $task = Task::find($id);
        
        $task->update($request->all());

        /*
        Longer Method - this method is useful if you want to do 
        some processing on certain fields/values before updating

        $task->task_name = $request->task_name;
        $task->task_details = $request->task_details;
        $task->user_id = $request->user_id;
        $task->comment = 'Comments: ' . $request->comment; // Prefixing comment field with 'Comments: '

        $task->update($task);
        */

        return response(['message' => 'Task has been updated']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $task = Task::find($id);
        $task->delete();

        return response(['message' => 'Task has been deleted!']);
    }
}
