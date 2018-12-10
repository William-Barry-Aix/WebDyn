<?php
namespace MonFramework\App;

class View {
	public $data;
	public function __construct($path, $data = []){
		$this->data = array();
		foreach ($data as $key => $value) {
			$this->data[$key] = $value;
			$this->$key = $value;
		}
		include $path;
	}
	public function getBlock($file, $data = [])
	{
		require $file . '.php';
	}
	public function method() {
        var_dump(__NAMESPACE__ . ' \ ' . __CLASS__ . ' \ ' . __FUNCTION__);
    }
}