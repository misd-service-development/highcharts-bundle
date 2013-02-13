<?php

/*
 * This file is part of the Symfony2 HighchartsBundle.
 *
 * (c) University of Cambridge
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Misd\HighchartsBundle\Helper;

use Misd\Highcharts\ChartInterface;
use Misd\Highcharts\Renderer\RendererInterface;
use Symfony\Component\Templating\Helper\HelperInterface;

/**
 * Highcharts renderer helper.
 *
 * @author Chris Wilkinson <chris.wilkinson@admin.cam.ac.uk>
 */
class RendererHelper implements HelperInterface
{
    /**
     * Renderer.
     *
     * @var RendererInterface
     */
    protected $renderer;

    /**
     * Charset.
     *
     * @var string
     */
    protected $charset = 'UTF-8';

    /**
     * Constructor.
     *
     * @param RendererInterface $renderer Renderer.
     */
    public function __construct(RendererInterface $renderer)
    {
        $this->renderer = $renderer;
    }

    /**
     * {@inheritdoc}
     */
    public function setCharset($charset)
    {
        $this->charset = $charset;
    }

    /**
     * {@inheritdoc}
     */
    public function getCharset()
    {
        return $this->charset;
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'highcharts.renderer';
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
        return $this->renderer->render($chart);
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
        return $this->renderer->renderContainer($chart, $element, $attributes);
    }
}
