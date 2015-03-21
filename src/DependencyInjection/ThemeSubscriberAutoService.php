<?php

namespace Lia\Bridge\JqueryBundle\DependencyInjection;

use Lia\Kernel\ThemeBundle\Core\AssetBag;
use Lia\Kernel\ThemeBundle\Core\SubscriberBase;

class ThemeSubscriberAutoService
    extends SubscriberBase
{
    /**
     * @return string
     */
    public function getPathOfAsset()
    {
        return '/bundles/liabridgejquery/';
    }

    /**
     * Allows to set the assets for the bundle
     * They will be on the top of the page
     * @param AssetBag $bag
     */
    public function setTop(AssetBag $bag)
    {
        $bag->javascript->files->set([
            'components/jquery/dist/jquery.min.js'
        ]);
    }

    /**
     * Allows to set the assets for the bundle
     * They will be on the bottom of the page
     * @param AssetBag $bag
     */
    public function setBottom(AssetBag $bag)
    {

    }
}