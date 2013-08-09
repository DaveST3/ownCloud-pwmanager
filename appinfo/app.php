<?php

namespace OCA\PWManager;

if (\OCP\App::isEnabled('appframework')) {
    $api = new \OCA\AppFramework\Core\API('pwmanager');

    $api->addNavigationEntry(array(
        'id' => $api->getAppName(),
        'order' => 10,
        'href' => $api->linkToRoute('pwmanager_index'),
        'icon' => $api->imagePath('pwmanager.png'),
        'name' => $api->getTrans()->t('Passwords'),
    ));
}
else {
    \OCP\Util::writeLog('pwmanager', 'Cannot enable Password Manager app because the App Framework app is not enabled.');
}
