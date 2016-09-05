<?php
namespace Simbio;
/**
* @return mixed
*/
class Simbio
{
    const APPS_CONFIG_DIR = './apps/config/';
    const APPS_MODULES_DIR = './apps/modules/';
    const APPS_VIEWS_DIR = './apps/modules/<modulename>/views/';
    const APPS_MODELS_DIR = './apps/modules/<modulename>/models/';

    private $config = array();
    private $db = false;
    private $base_dir = '';
    private $base_url = '';
    private $doc_root_dir = '/';
    private $protocol = 'http';
    private $port = 80;
    private $site_domain = '';
    private $site_base_url = '';

    function __construct()
    {

    }

    public function config()
    {
        foreach (new \DirectoryIterator(self::APPS_CONFIG_DIR) as $fileInfo) {
            if ($fileInfo->isDot()) continue;
            if ($fileInfo->isDir()) continue;
            if (strpos($fileInfo->getPathname(), '.php') === false) continue;
            require $fileInfo->getPathname();
        }
        $this->config = $config;
    }

    public function route()
    {
        // get current URI
        $request = $this->request();
        $routes = array();
        foreach (explode('/', $request) as $route)
            $routes[] = (null !== $route) ? $route : null;

        // create module instance
        $current_module = '';
        if(isset($routes[0])) {
            // check for current route
            $current_module = $routes[0];
            // default route
            $current_method = 'index';
            // call controller by current route
            $module_file = self::APPS_MODULES_DIR . ucfirst($current_module).'/'.$current_module.'.php';

        }
    }

    public function request()
    {

    }


}
