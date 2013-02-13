<?php

/*
 * This file is part of the Symfony2 HighchartsBundle.
 *
 * (c) University of Cambridge
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Misd\HighchartsBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * MisdHighchartsBundle configuration.
 *
 * @author Chris Wilkinson <chris.wilkinson@admin.cam.ac.uk>
 */
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritdoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('misd_highcharts');

        $rootNode
            ->children()
                ->scalarNode('renderer')->defaultValue('Misd\Highcharts\Renderer\Renderer')->end()
            ->end()
        ;

        return $treeBuilder;
    }
}
