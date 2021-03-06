<?php

namespace Spatie\ImageOptimizer\Optimizers;

use Spatie\ImageOptimizer\Image;

class OptimizerNotInstalled extends BaseOptimizer
{
    public $binaryName = 'not_installed';

    /**
     * {@inheritdoc}
     */
    public function canHandle(Image $image): bool
    {
        return true;
    }
}
