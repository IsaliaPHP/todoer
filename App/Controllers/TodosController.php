<?php

class TodosController extends Controller
{
	
    public function initialize()
    {
        Load::setTemplate('plain');
    }
	
	public function create()
	{
		$todo = new Todo();
		$task = Request::post("task");
		$todo->finished = 0;
		$todo->task = $task;
		$todo->save();
		echo "created";
	}
	
	public function update(int $id)
	{
		$todo = new Todo();
		$todo->id = $id;
		$finished = Request::post("checked");
		$todo->finished = $finished;
		$todo->updated_in = date("Y-m-d H:i:s");
		$todo->save();
		echo "updated";
	}
	
	public function delete(int $id)
	{
		$todo = new Todo();
		$todo->id = $id;
		$todo->delete();
		echo "deleted";
	}	
	
	
}