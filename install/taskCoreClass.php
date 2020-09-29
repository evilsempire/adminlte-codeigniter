<?php
class Core
{
	function checkEmpty($data)
	{
		if (!empty($data['hostname']) && !empty($data['username']) && !empty($data['database']) && !empty($data['url']) && !empty($data['template'])) {
			return true;
		} else {
			return false;
		}
	}

	function show_message($type, $message)
	{
		return $message;
	}

	function getAllData($data)
	{
		return $data;
	}

	function write_database($data)
	{

		if ($data['template'] == 2) {
			$template_path 	= 'includes/templatevtwo.php';
		} else if ($data['template'] == 3) {
			$template_path 	= 'includes/templatevthree.php';
		}
		$output_path 	= '../application/config/database.php';

		$database_file = file_get_contents($template_path);

		$new  = str_replace("%HOSTNAME%", $data['hostname'], $database_file);
		$new  = str_replace("%USERNAME%", $data['username'], $new);
		$new  = str_replace("%PASSWORD%", $data['password'], $new);
		$new  = str_replace("%DATABASE%", $data['database'], $new);

		$handle = fopen($output_path, 'w+');
		@chmod($output_path, 0777);

		if (is_writable(dirname($output_path))) {

			if (fwrite($handle, $new)) {
				return true;
			} else {
				return false;
			}
		} else {
			return false;
		}
	}


	function write_config($data)
	{
		$config_path 	= '../application/config/config.php';

		$config_file = file_get_contents($config_path);

		$new  = str_replace("%BASEURL%", $data['url'], $config_file);

		$handle = fopen($config_path, 'w+');
		@chmod($config_path, 0777);

		if (is_writable(dirname($config_path))) {

			if (fwrite($handle, $new)) {
				return true;
			} else {
				return false;
			}
		} else {
			return false;
		}
	}

	function write_constant($data)
	{
		$constants_path 	= '../application/config/constants.php';

		$constants_file = file_get_contents($constants_path);

		$new  = str_replace("%SITE_NAME%", $data['site_name'], $constants_file);

		$handle = fopen($constants_path, 'w+');
		@chmod($constants_path, 0777);

		if (is_writable(dirname($constants_path))) {

			if (fwrite($handle, $new)) {
				return true;
			} else {
				return false;
			}
		} else {
			return false;
		}
	}

	function checkFile()
	{
		$output_path = '../application/config/database.php';

		if (file_exists($output_path)) {
			return true;
		} else {
			return false;
		}
	}
}
