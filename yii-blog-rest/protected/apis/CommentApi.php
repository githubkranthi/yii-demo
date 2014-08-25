<?php
/**
 *
 * @author kranthip
 *
 */
 class CommentApi extends Api
 {

	public function __construct()
 	{
 		parent::__construct();
 		$this->controller = new CommentController('Comment') ;
 		$this->model      = new Comment();
 	}

 	public function getAll()
 	{
 		$posts = $this->model->getAll();
 		return $posts;
 	}

 	public function getById($id)
 	{
 		$posts = $this->model->getById($id);
 		return $posts;
 	}

 	public function deleteById($id)
 	{
 		return $this->model->delete($id);
 	}

 	public function deleteAll()
 	{

 	}

 	public function create()
 	{
 		return $this->controller->create();
 	}

 	public function update()
 	{

 	}

 	public function delete()
 	{

 	}

 	public function read()
 	{

 	}




 }


?>