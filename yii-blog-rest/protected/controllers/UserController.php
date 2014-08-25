<?php

//include 'SiteController.php';


class UserController extends Controller
{
	// {{{ *** Members ***
	/**
	 * Key which has to be in HTTP USERNAME and PASSWORD headers
	 */
	Const APPLICATION_ID = 'ASCCPE';

	private $format = 'json';
	// }}}
	// {{{ filters
	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array();
	} // }}}
	// {{{ *** Actions ***
	// {{{ actionIndex
	public function actionIndex()
	{
		echo CJSON::encode(array(1, 2, 3));
	} // }}}

	public function actionTest()
	{
		echo "Test message";
	}
	public function actionLogin()
	{
		//
		switch($_GET['model'])
		{
			// Get an instance of the respective model
			case 'posts': // {{{
				$model = new Post;
				break; // }}}

			case 'login': // {{{
				//$model = new Post;

			$this->redirect(array('site/login') );

				break; // }}}


			default: // {{{
				$this->_sendResponse(501, sprintf('Mode <b>create</b> is not implemented for model <b>%s</b>',$_GET['model']) );
				exit; // }}}
		}

		echo $result;

	}
}


?>