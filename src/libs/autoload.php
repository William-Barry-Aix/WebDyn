<?php
class Bootstrap
{
    public static function autoload($className)
    {
        //echo '<pre>Autoload : ' . $className;
        $tab = explode('\\', $className);
        $path = __DIR__ . DIRECTORY_SEPARATOR . implode(DIRECTORY_SEPARATOR, $tab) . '.php';
        //echo "\n    =&gt; $path</pre>";
        if (file_exists($path)){
        	require $path;
        } else {
        	//echo '<pre>Not Found</pre>';
        }
    }
}