<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerDgUwXto\srcDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerDgUwXto/srcDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerDgUwXto.legacy');

    return;
}

if (!\class_exists(srcDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerDgUwXto\srcDevDebugProjectContainer::class, srcDevDebugProjectContainer::class, false);
}

return new \ContainerDgUwXto\srcDevDebugProjectContainer(array(
    'container.build_hash' => 'DgUwXto',
    'container.build_id' => '39eb8075',
    'container.build_time' => 1534170189,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerDgUwXto');