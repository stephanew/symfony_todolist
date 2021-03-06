<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'swiftmailer.mailer.default.transport' shared service.

include_once $this->targetDirs[3].'/vendor/swiftmailer/swiftmailer/lib/classes/Swift/Events/EventDispatcher.php';
include_once $this->targetDirs[3].'/vendor/swiftmailer/swiftmailer/lib/classes/Swift/Events/SimpleEventDispatcher.php';
include_once $this->targetDirs[3].'/vendor/swiftmailer/swiftmailer/lib/classes/Swift/Transport.php';
include_once $this->targetDirs[3].'/vendor/swiftmailer/swiftmailer/lib/classes/Swift/Transport/NullTransport.php';
include_once $this->targetDirs[3].'/vendor/swiftmailer/swiftmailer/lib/classes/Swift/Events/EventListener.php';
include_once $this->targetDirs[3].'/vendor/swiftmailer/swiftmailer/lib/classes/Swift/Events/SendListener.php';
include_once $this->targetDirs[3].'/vendor/swiftmailer/swiftmailer/lib/classes/Swift/Plugins/MessageLogger.php';

$this->services['swiftmailer.mailer.default.transport'] = $instance = new \Swift_Transport_NullTransport(new \Swift_Events_SimpleEventDispatcher());

$instance->registerPlugin(${($_ = isset($this->services['swiftmailer.mailer.default.plugin.messagelogger']) ? $this->services['swiftmailer.mailer.default.plugin.messagelogger'] : $this->services['swiftmailer.mailer.default.plugin.messagelogger'] = new \Swift_Plugins_MessageLogger()) && false ?: '_'});

return $instance;
