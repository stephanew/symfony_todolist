<?php
/**
 * Created by PhpStorm.
 * User: stephanew
 * Date: 2018/4/4
 * Time: 下午5:34
 */

// app/config/config_dev.php
$this->import('parameters.yml');
$this->import('security.yml');

$container->loadFromExtension('framework', array(
    'secret' => '%secret%',
    'router' => array(
        'resource' => '%kernel.root_dir%/config/routing.php',
    ),
    // ...
));

// Twig Configuration
$container->loadFromExtension('twig', array(
    'debug'            => '%kernel.debug%',
    'strict_variables' => '%kernel.debug%',
));