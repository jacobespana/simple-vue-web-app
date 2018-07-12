<?php

namespace App\Http\Controllers;


class ProjectsController extends Controller
{
	
	public function create() 
	{
		return view('projects.create');
	}


	public function store() 
	{
		$this->validate(request(), [

			'name' => 'required', 

			'description' => 'required'

		]);

		Project::forceCreate([

			'name' => request('name'), 

			'description' => request('description')

		]);

		return ['message' => 'Project Created!'];

	}
}


