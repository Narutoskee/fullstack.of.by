<?php
require_once dirname(__DIR__).'/config/init.php';
require_once LIBS .'/functions.php';
new \fullstack\App();

debug(\fullstack\App::$app->getProperties());