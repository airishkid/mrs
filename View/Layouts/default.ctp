<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
?>
<!DOCTYPE html>
<html>
    <head>
        <?php echo $this->Html->charset(); ?>
        <title>
            <?php echo $title_for_layout; ?>
        </title>
        <?php
        echo $this->Html->meta('icon');

        echo $this->Html->css('cake.generic');

        echo $this->fetch('meta');
        echo $this->fetch('css');
        echo $this->fetch('script');
        ?>
    </head>

    <?php $logged_user = "Logout, " . $this->Session->read('Auth.User.first_name') . " " . $this->Session->read('Auth.User.last_name'); ?>

    <body>
        <div id="container">
            <div id="header">
                <h1><?php echo $this->Html->link('MRS of Internal Medicine Cardiology', array('controller' => 'pages', 'action' => 'home')); ?></h1>
            </div>
            
            <div id="content">
                <div id="logged-user">
                <?php
                if (!$this->Session->read('Auth.User.first_name')) {
                    echo $this->Html->link($logged_user, array('controller' => 'users', 'action' => 'logout'), array('hidden' => 'hidden'));
                } else {
                    echo $this->Html->link($logged_user, array('controller' => 'users', 'action' => 'logout'), array('hidden' => false));
                }
                ?>

            </div>

                <?php echo $this->Session->flash(); ?>

<?php echo $this->fetch('content'); ?>
            </div>
            <div id="footer">
                <?php
                echo $this->Html->link(
                        $this->Html->image('cake.power.gif', array('border' => '0')), 'http://www.cakephp.org/', array('target' => '_blank', 'escape' => false)
                );
                ?>
            </div>
        </div>
    </body>
</html>
