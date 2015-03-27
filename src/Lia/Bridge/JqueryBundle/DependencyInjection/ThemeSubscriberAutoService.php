<?php

namespace Lia\Bridge\JqueryBundle\DependencyInjection;

use Lia\ThemeBundle\Core\AssetBag;
use Lia\ThemeBundle\Core\SubscriberBase;

class ThemeSubscriberAutoService
    extends SubscriberBase
{
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