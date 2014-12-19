<?php
namespace Gantry\Admin;

use Gantry\Component\Request\Request;
use Gantry\Component\Router\Router as BaseRouter;
use Gantry\Framework\Base\Gantry;

class Router extends BaseRouter
{
    public function boot()
    {
        $this->resource = 'themes';
        $this->method = 'GET';
        $this->path = [];
        $this->format = 'html';
        $ajax = ($this->format == 'json');

        $this->params = [
            'id'   => 0,
            'ajax' => $ajax,
            'location' => $this->resource,
            'method' => $this->method,
            'params' => isset($_POST['params']) && is_string($_POST['params']) ? json_decode($_POST['params'], true) : []
        ];
/*
        if ($style) {
            $this->container['theme.id'] = 0;
            $this->container['theme.path'] = PRIME_ROOT . '/themes/' . $style;
            $this->container['theme.name'] = $style;
            $this->container['theme.title'] = ucfirst($style);
            $this->container['theme.params'] = [];
        }
*/
//        $this->container['base_url'] = rtrim(PRIME_URI, '/') . "/{$style}/admin";

        $this->container['ajax_suffix'] = '.json';

        $this->container['routes'] = [
            '1' => '/%s',
            'themes' => '',

            'picker/layouts' => '/layouts',
            'picker/particles' => '/particles'
        ];
    }
}