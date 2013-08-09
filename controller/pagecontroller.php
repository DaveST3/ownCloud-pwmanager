<?php

namespace OCA\PWManager\Controller;

use \OCA\AppFramework\Controller\Controller;

class PageController extends Controller {
    public function __construct($api, $request) {
        parent::__construct($api, $request);
    }

    /**
     * @CSRFExemption
     * @IsAdminExemption
     * @IsSubAdminExemption
     */
    public function index() {
        return $this->render('index', array(
            'msg' => 'Hello World!',
        ));
    }
}
