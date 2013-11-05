<?php
namespace \OCA\PWManager\Db;

use \OCA\AppFramework\Db\Entity;

class Password extends Entity {
    public $user;
    public $title;
    public $password;
}
