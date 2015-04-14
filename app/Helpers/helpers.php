<?php

class Helpers {

	/**
	 * @param $title
	 * @return string
	 */
	public static function full_title($title)
	{
		$base_title = 'Social Tracking Application';

		if ($title = ''){
			$comp_title = $base_title;
		} else {
			$comp_title = $title . " | " .  $base_title;
		}
		return $comp_title;
	}
}