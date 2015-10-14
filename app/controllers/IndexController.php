<?php

namespace app\controllers;

use Silex\Application;
use Silex\ControllerProviderInterface;
use Symfony\Component\HttpFoundation\Request;

class IndexController implements ControllerProviderInterface
{
    public function connect(Application $app)
    {
        $controllers = $app['controllers_factory'];

        $controllers->get('/', function (Application $app) {
            return $app->json($this->getApiScheme());
        });

        return $controllers;
    }

    public function getApiScheme()
    {
        return [
            'title' => 'Схема api gis системы',
            'resources' => [
                [
                    'resource' => '/firms',
                    'description' => 'Работа со справочником фирм'
                ],
                [
                    'resource' => '/buildings',
                    'description' => 'Работа со справочником зданий'
                ],
                [
                    'resource' => '/rubrics',
                    'description' => 'Работа со справочником рубрик '
                ]
            ]
        ];
    }
}