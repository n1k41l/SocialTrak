<?php

	function full_title($title)
	{
		$base_title = 'Social Tracking Application';
		
		if (isset($title) && $title != ''){
			$comp_title = $title . " | " .  $base_title;	
		} else {
			$comp_title = $base_title;
		}
		
		return $comp_title;
	}

	function delete_form($routeParam, $label = 'Delete')
	{
		$form = Form::open(['method' => 'DELETE', 'route' => $routeParam, 'class' => 'form-inline']);

		$form .= Form::submit($label, ['class' => 'submitLink']);

		return $form .= Form::close();
	}