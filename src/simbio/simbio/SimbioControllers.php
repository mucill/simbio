<?php namespace Simbio;

class SimbioControllers extends Simbio
{

    public $config = array(
        'base_url' => '',
        'site_base_url' => '',
        'site_base_path' => ''
    );

    public function __construct() {
        parent::__construct();
    }

    /**
    * Return full web URL of path
    *
    **/
    public function url($path)
    {
    // remove slash at the front of path
        $path = preg_replace('@^/@i', '', $path);
        return $this->config['site_base_url'].'/'.$path;
    }

    /**
    * Return base url of application
    *
    **/
    public function base_url() {
        return $this->config['base_url'];
    }

    /**
    * Return site root/base url of application
    *
    **/
    public function site_base_url() {
        return $this->config['site_base_url'];
    }

    /**
    * Return site base url of application
    *
    **/
    public function base_path() {
        return $this->config['site_base_path'];
    }

}
