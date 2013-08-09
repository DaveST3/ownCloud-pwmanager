<?php

namespace OCA\PWManager\DependencyInjection;

use \OCA\AppFramework\DependencyInjection\DIContainer as BaseContainer;
use \OCA\PWManager\Controller\PageController;

class DIContainer extends BaseContainer {
    public function __construct() {
        parent::__construct('pwmanager');

        $this['TwigTemplateDirectory'] = __DIR__ . '/../templates';
        $this['PageController'] = function($c) {
            return new PageController($c['API'], $c['Request']);
        };
    }
}
