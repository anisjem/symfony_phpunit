<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerFb1qr18\appTestDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerFb1qr18/appTestDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerFb1qr18.legacy');

    return;
}

if (!\class_exists(appTestDebugProjectContainer::class, false)) {
    \class_alias(\ContainerFb1qr18\appTestDebugProjectContainer::class, appTestDebugProjectContainer::class, false);
}

return new \ContainerFb1qr18\appTestDebugProjectContainer(array(
    'container.build_hash' => 'Fb1qr18',
    'container.build_id' => '5ff0c95a',
    'container.build_time' => 1546022081,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerFb1qr18');
