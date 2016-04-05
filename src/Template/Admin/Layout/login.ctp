<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title> <?= $this->fetch('title') ?> </title>
    <?= $this->Html->meta('icon') ?>
    <?= $this->fetch('meta') ?>
    <?= $this->Html->css(['bootstrap.min', 'font-awesome/css/font-awesome']) ?>
    <?= $this->Html->css(['animate', 'style']) ?>
    <?= $this->fetch('css') ?>

</head>

<body class="gray-bg">

    <div class="loginColumns animated fadeInDown">
        <div class="row">
            <?= $this->fetch('content') ?>
        </div>
        <hr/>
        <div class="row">
            <div class="col-md-6">
                
            </div>
            <div class="col-md-6 text-right">
               <small>© LearJet <?php echo date('Y'); ?></small>
            </div>
        </div>
    </div>
     <?= $this->Html->script([
         'jquery-2.1.1', 
         'bootstrap.min.js',
         'inspinia'
         ]); ?>

</body>

</html>
