<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerZsiWC5D\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerZsiWC5D/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerZsiWC5D.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerZsiWC5D\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerZsiWC5D\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'ZsiWC5D',
    'container.build_id' => '0a981521',
    'container.build_time' => 1575480808,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerZsiWC5D');