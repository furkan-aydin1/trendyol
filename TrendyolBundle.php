<?php

namespace ProductProvider\Trendyol;

use ProductProvider\Trendyol\DependencyInjection\TrendyolExtension;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class TrendyolBundle extends Bundle
{
    public function getContainerExtension()
    {
        return new TrendyolExtension();
    }
}