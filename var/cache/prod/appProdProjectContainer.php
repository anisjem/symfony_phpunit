<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerSbxza20\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerSbxza20/appProdProjectContainer.php') {
    touch(__DIR__.'/ContainerSbxza20.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\ContainerSbxza20\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \ContainerSbxza20\appProdProjectContainer(array(
    'container.build_hash' => 'Sbxza20',
    'container.build_id' => 'c802be1a',
    'container.build_time' => 1546013564,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerSbxza20');
