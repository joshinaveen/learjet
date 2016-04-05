<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Welcome to Learjet </title>
    <?= $this->Html->meta('icon') ?>
    <?= $this->fetch('meta') ?>
    
    <?= $this->Html->css(['bootstrap.min', '../font-awesome/css/font-awesome']) ?>
    <?= $this->fetch('pluginCss') ?>
    <?= $this->Html->css(['animate', 'style', 'custom-frontend']) ?>
    <?= $this->fetch('css') ?>
</head>
<body class="gray-bg">
    <div class="container">
        <div class="row wrapper border-bottom white-bg page-heading">
            <div class="col-lg-9">
                <h1>Welcome to Learjet</h1>
                <ol class="breadcrumb">
                    <li>
                        <a href="<?php $this->request->webroot; ?>">Home</a>
                    </li>
                    <li>
                        Service Facilities
                    </li>
                </ol>
            </div>
        </div>
        <?php echo $this->fetch('content'); ?>
        <div class="row wrapper white-bg" id="footer">
            <div>
                <strong>Copyright</strong> Learjet © <?php echo date('Y'); ?>
            </div>
        </div>
    </div>
     <?= $this->Html->script([
         'jquery-2.1.1', 
         'bootstrap.min.js',
         'plugins/metisMenu/jquery.metisMenu',
         'plugins/slimscroll/jquery.slimscroll.min',
         'plugins/validate/jquery.validate.min',
         'inspinia'
         ]); ?>
    <?= $this->fetch('pluginJs') ?>
    <?= $this->fetch('scriptBottom') ?>
    <script>
        jQuery(document).ready(function($) {
        });
    </script>
</body>
</html>