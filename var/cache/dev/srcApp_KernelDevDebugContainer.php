<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerUAlfpGq\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerUAlfpGq/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerUAlfpGq.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerUAlfpGq\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerUAlfpGq\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'UAlfpGq',
    'container.build_id' => '5f33e3b4',
    'container.build_time' => 1551400912,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerUAlfpGq');