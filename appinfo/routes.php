<?php

namespace OCA\PWManager;

use \OCA\AppFramework\App;
use \OCA\PWManager\DependencyInjection\DIContainer;

$this->create('pwmanager_index', '/')->action(function($params) {
    App::main('PageController', 'index', $params, new DIContainer());
});
