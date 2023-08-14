<?php

namespace Provider\Trendyol;

use PiProvider\Trendyol\DependencyInjection\TrendyolExtension;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class TrendyolBundle extends Bundle
{
    public function getContainerExtension()
    {
        return new TrendyolExtension();
    }
}