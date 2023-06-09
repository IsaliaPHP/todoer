<?php

class HomeController extends Controller
{
    public function initialize()
    {
        Load::setTemplate('default');
    }

    public function index() {
		$this->list_of_active_todos = (new Todo)->findAll("WHERE finished = 0");
		$this->list_of_finished_todos = (new Todo)->findAll("WHERE finished = 1");		
        Load::view("Home/index", $this->getProperties());
    }

}
