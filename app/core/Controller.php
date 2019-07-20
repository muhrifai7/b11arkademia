<?php 

class Controller {
	protected function view($view, $data= []) 
	{
		require '../app/views/' .$view.'.php';
	}
	protected function model($model) 
	{
		require '../app/models/'.$model. '.php';
		return new $model;
	}
}


