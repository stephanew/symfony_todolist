<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerYafek8x\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerYafek8x/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerYafek8x.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerYafek8x\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerYafek8x\appDevDebugProjectContainer(array(
    'container.build_hash' => 'Yafek8x',
    'container.build_id' => '45de42eb',
    'container.build_time' => 1523275526,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerYafek8x');
