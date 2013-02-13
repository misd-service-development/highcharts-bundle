<?php

/*
 * This file is part of the Symfony2 HighchartsBundle.
 *
 * (c) University of Cambridge
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Misd\HighchartsBundle\Twig\Extension;

use Misd\Highcharts\ChartInterface;
use Misd\HighchartsBundle\Helper\RendererHelper;
use Twig_Extension as Extension;
use Twig_Function_Method as Method;

/**
 * Highcharts renderer Twig extension.
 *
 * @author Chris Wilkinson <chris.wilkinson@admin.cam.ac.uk>
 */
class RendererTwigExtension extends Extension
{
    /**
     * Renderer helper.
     *
     * @var RendererHelper
     */
    protected $helper;

    /**
     * Constructor.
     *
     * @param RendererHelper $helper Renderer helper.
     */
    public function __construct(RendererHelper $helper)
    {
        $this->helper = $helper;
    }

    /**
     * {@inheritdoc}
     */
    public function getFunctions()
    {
        return array(
            'highcharts_render' => new Method($this, 'render', array('is_safe' => array('html'))),
            'highcharts_render_container' => new Method($this, 'renderContainer', array('is_safe' => array('html'))),
        );
    }

    /**
     * Render a chart.
     *
     * @param ChartInterface $chart Chart.
     *
     * @return string Rendered chart.
     */
    public function render(ChartInterface $chart)
    {
        return $this->helper->render($chart);
    }

    /**
     * Render a chart container.
     *
     * @param ChartInterface $chart      Chart.
     * @param string         $element    Element.
     * @param array          $attributes Element attributes.
     *
     * @return string Rendered container.
     */
    public function renderContainer(ChartInterface $chart, $element = 'div', $attributes = array())
    {
        return $this->helper->renderContainer($chart, $element, $attributes);
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'highcharts';
    }
}
