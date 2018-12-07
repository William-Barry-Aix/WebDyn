<?php
namespace MonFramework\App;

class View {
	public function getBlock($file, $data = [])
	{
		require $file . '.php';
	}
	public function method() {
        var_dump(__NAMESPACE__ . ' \ ' . __CLASS__ . ' \ ' . __FUNCTION__);
    }
}