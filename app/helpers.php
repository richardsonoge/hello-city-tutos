<?php

if (!function_exists('page_title')) {
	function page_title(?string $title = null): string {
		return isset($title) 
		? $title. ' | '. config('app.name') 
		: config('app.name');
	}	
}