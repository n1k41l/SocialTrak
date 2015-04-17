<?php namespace App\Http;

class Helpers {

	/**
	 * @param $title
	 * @return string
	 */
	public function full_title($title)
	{
		$base_title = 'Social Tracking Application';
		
		if (isset($title) && $title != ''){
			$comp_title = $title . " | " .  $base_title;	
		} else {
			$comp_title = $base_title;
		}
		
		return $comp_title;
	}

	public function delete_form($routeParam, $label = 'Delete')
	{
		$form = Form::open(['method' => 'DELETE', 'route' => $routeParam]);

		$form .= Form::submit($label, ['class' => 'btn btn-danger']);

		return $form .= Form::close();
	}
}