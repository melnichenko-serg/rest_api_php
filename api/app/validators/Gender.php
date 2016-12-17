<?php

namespace api\app\validators;


use api\app\Error;
use api\app\filters\Clear;

class Gender
{
	private static $instance;

	private function __construct()
	{
	}

	public static function getInstance()
	{
		!self::$instance && self::$instance = new self();
		return self::$instance;
	}

	private function __clone()
	{
	}

	private function __wakeup()
	{
	}

	public static function run($data)
	{
		$data = strtolower(trim($data));
		return ($data === "male" || $data === "female") ? true : false;
	}
}