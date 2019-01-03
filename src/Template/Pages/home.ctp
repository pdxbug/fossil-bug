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
        $(function(){
            //initialize content
            updateBackground('<?php echo $page ?>');

            $('.network-name').hover(function(){
                var buttonId = $(this).find('span').attr('id').slice(7);
                updateBackground(buttonId);
            });

            function updateBackground(buttonId) {
                var backgroundImages = {
                    welcome : 'url(img/28218790_ml.jpg)',
                    work    : 'url(img/28218790_ml.jpg)',
                    life    : 'url(img/wedding.jpg)',
                    play    : 'url(img/bike01.jpg)',
                    else    : 'url(img/29504125_ml.jpg)',
                    //Copyright: <a href='https://www.123rf.com/profile_nexusplexus'>nexusplexus / 123RF Stock Photo</a>
                };
                $('#main-content div.content').hide();
                $('#main-content div.content.'+buttonId).show();
                if (buttonId == 'home') {
                    buttonId = 'welcome';
                }

                //load background and content depending on button/page loaded
                if (buttonId == 'welcome'){
                    $(".home").css('background-image', backgroundImages.welcome);
                } else if (buttonId == 'work'){
                    $(".home").css('background-image', backgroundImages.work);
                } else if(buttonId == 'life'){
                    $(".home").css('background-image', backgroundImages.life);
                } else if(buttonId == 'play'){
                    $(".home").css('background-image', backgroundImages.play);
                } else {
                    $(".home").css('background-image', backgroundImages.else);
                }
                $("div.main-content div").hide();
                $("div."+buttonId).show();
            }
        });
    </script>

</head>
<body class="home">
    <div class="container">
        <div class="row">
            <div class="header-image"><?= $this->Html->image('bug_logo.png', ['alt' => 'Image of a computer bug']) ?></div>
            <div id="main-nav">
                <div class="columns large-12">
                    <ul class="list-inline intro-social-buttons">
                        <li class='network-name'>
                            <span id="button-welcome">
                                <?php echo $this->Html->link(
                                        ' Home',
                                        '/',
                                        array('class' => 'fa fa-file-code-o fa-fw btn btn-default btn-lg',
                                        'style' => 'width:auto;')
                                    );
                                ?>
                            </span>
                        </li>
                        <li class='network-name'>
                            <span id="button-work">
                                <?php echo $this->Html->link(
                                        ' Work',
                                        '/Work',
                                        array('class' => 'fa fa-file-code-o fa-fw btn btn-default btn-lg',
                                        'style' => 'width:auto;')
                                    );
                                ?>
                            </span>
                        </li>
                        <li class='network-name'>
                            <span id="button-life">
                                <?php echo $this->Html->link(
                                        ' Life',
                                        '/Life',
                                        array('class' => 'fa fa-users fa-fw btn btn-default btn-lg',
                                        'style' => 'width:auto;')
                                    );
                                ?>
                            </span>
                        </li>
                        <li class='network-name'>
                            <span id="button-play">
                                <?php echo $this->Html->link(
                                        ' Play',
                                        '/Play',
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
        </div>

        <hr class="intro-divider">

        <div id="main-content">
            <?php echo $this->element('welcome', ['articles' => $articles]); ?>

            <?php echo $this->element('work'); ?>
            
            <?php echo $this->element('life'); ?>

            <?php echo $this->element('play'); ?>

        </div>
    </div><!-- container -->

</body>
</html>
