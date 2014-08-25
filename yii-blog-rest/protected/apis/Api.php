<?php
/**
 *
 * @author kranthip
 *
 */
   abstract  class Api extends CComponent
   {
   		protected  $model;
   		protected  $controller;
   		protected  $action;

   		abstract protected function create();

   		abstract protected function update();

   		abstract protected function delete();

   		abstract protected function read();

   }

 ?>