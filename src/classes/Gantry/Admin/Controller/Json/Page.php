<?php
namespace Gantry\Admin\Controller\Json;

use Gantry\Component\Controller\JsonController;
use Gantry\Component\Response\JsonResponse;

class Page extends JsonController
{
    public function index(array $params)
    {
        return $this->overview($params);
    }

    public function overview(array $params)
    {
        $layout = $this->container['admin.theme']->render('@gantry-admin/overview.html.twig');

        return new JsonResponse(['html' => $layout]);
    }

    public function pages_index(array $params)
    {
        $layout = $this->container['admin.theme']->render('@gantry-admin/pages_index.html.twig');

        return new JsonResponse(['html' => $layout]);
    }

    public function pages_create(array $params)
    {
        $layout = $this->container['admin.theme']->render('@gantry-admin/pages_create.html.twig');

        return new JsonResponse(['html' => $layout]);
    }
}
