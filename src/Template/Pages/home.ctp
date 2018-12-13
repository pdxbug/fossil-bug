<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;

$this->layout = false;

if (!Configure::read('debug')) :
    throw new NotFoundException(
        'There appears to be a problem, please check the debug configuration.'
    );
endif;

$title = 'Home of a Computer Bug | Kerry Mraz';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $title ?>
    </title>

    <?= $this->Html->meta('icon') ?>
    <?= $this->Html->css('style.css') ?>
    <?= $this->Html->css('home.css') ?>
    <?= $this->Html->css('landing-page.css') ?>
    <?= $this->Html->css('font-awesome.min.css') ?>
    <link href="https://fonts.googleapis.com/css?family=Raleway:500i|Roboto:300,400,700|Roboto+Mono" rel="stylesheet">

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js" ></script>
    <?= $this->Html->script('fossil-bug.js') ?>

    <script type="text/javascript">
        <!--//--><![CDATA[//><!--
            var images = new Array()
            function preload() {
                for (i = 0; i < preload.arguments.length; i++) {
                    images[i] = new Image()
                    images[i].src = preload.arguments[i]
                }
            }
            preload(
                "img/28218790_ml.jpg",
                "img/14238282_ml.jpg",
                "img/30610324_ml.jpg",
                "img/29504125_ml.jpg"
            )
        //--><!]]>
    </script>

</head>
<body class="home">
    <div class="container">

        <header class="row">
            <div class="header-image"><?= $this->Html->image('bug_logo.png') ?></div>
            <div class="header-title">
                <h1>
                    Welcome to Fossil-bug Designs<br />
                    Home of a Computer Bug
                </h1>
            </div>
        </header>

        <hr class="intro-divider">

        <div class="row">
            <div class="columns large-12 text-center">
                <ul class="list-inline intro-social-buttons">
                <li class='network-name'>
                    <span id="prog-button">
                        <?php echo $this->Html->link(
                                ' Programming',
                                '/Programming',
                                array('class' => 'fa fa-file-code-o fa-fw btn btn-default btn-lg',
                                'style' => 'width:auto;')
                            );
                        ?>
                    </span>
                </li>
                <li class='network-name'>
                    <span id="othe-button">
                        <?php echo $this->Html->link(
                                ' Consultation',
                                '/Consultation',
                                array('class' => 'fa fa-users fa-fw btn btn-default btn-lg',
                                'style' => 'width:auto;')
                            );
                        ?>
                    </span>
                </li>
                <li class='network-name'>
                    <span id="abou-button">
                        <?php echo $this->Html->link(
                                ' More',
                                '/About',
                                array('class' => 'fa fa-users fa-fw btn btn-default btn-lg',
                                'style' => 'width:auto;')
                            );
                        ?>
                    </span>
                </li>
            </ul>
                <?php Debugger::checkSecurityKeys(); ?>
            </div>
        </div>
        <div id="main-content">
            <div class="prog">
                As a profession, I am a PHP web developer. I am currently working for a company that performs every conceivable task for creating, marketing, hosting and completing competative events. From photography, timing, results, SEO and SEM, registration, and much more. My job to is one of many. I work internally within the company to design and maintain tools that help my coworkers to get their jobs done more efficiently. I work with many of the departments on a daily basis to locate and correct bugs in the various systems and to make design updates as requested by the marketing and UI/UX teams. Once in a while, I assist in new functionality of the systems. I will be using this space to showcase my latest projects to provide a reference back and allow others to build from it. 
            </div>
        </div>
    </div><!-- container -->

</body>
</html>
