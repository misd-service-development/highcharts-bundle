HighchartsBundle
================

*This bundle is currently under development.*

This bundle integrates [PHP Highcharts](https://github.com/misd-service-development/php-highcharts) into your Symfony2 application, which allows the programmatic creation of [Highcharts](http://www.highcharts.com/).

Authors
-------

* Chris Wilkinson <chris.wilkinson@admin.cam.ac.uk>

Requirements
------------

* [Highcharts](http://www.highcharts.com/)
* [Symfony 2.1](http://symfony.com/)

Installation
------------

 1. Add HighchartsBundle to your dependencies:

        // composer.json

        {
           // ...
           "require": {
               // ...
               "misd/highcharts-bundle": "dev-master"
           }
        }

 2. Use Composer to download and install HighchartsBundle:

        $ php composer.phar update misd/highcharts-bundle

 3. Register the bundle in your application:

        // app/AppKernel.php

        class AppKernel extends Kernel
        {
            // ...
            public function registerBundles()
            {
                $bundles = array(
                    // ...
                    new Misd\HighchartsBundle\MisdHighchartsBundle()
                );
            }
        }

Usage
-----

### Creating a chart

See the [PHP Highcharts documentation](https://github.com/misd-service-development/php-highcharts) for details on how to create a chart object.

### Rendering a chart

Use the service:

    $chart = $this->container->get('misd_highcharts.renderer')->render($chart);
    $container = $this->container->get('misd_highcharts.renderer')->renderContainer($chart);

In a Twig template:

    {{ highcharts_render(chart) }}
    {{ highcharts_render_container(container) }}

In a PHP template:

    <?php echo $view['misd_highcharts.renderer']->render($chart); ?>
    <?php echo $view['misd_highcharts.renderer']->renderContainer($container); ?>

Reporting an issue or a feature request
---------------------------------------

Issues and feature requests are tracked in the [Github issue tracker](https://github.com/misd-service-development/highcharts-bundle/issues).
