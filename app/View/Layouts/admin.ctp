
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Administration | Eic Corporation</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <?php echo $this->fetch('meta'); ?>
    <!-- Le styles -->
    <?php echo $this->Html->css('bootstrap-2'); ?>
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
      .sidebar-nav {
        padding: 9px 0;
      }

      @media (max-width: 980px) {
        /* Enable use of floated navbar text */
        .navbar-text.pull-right {
          float: none;
          padding-left: 5px;
          padding-right: 5px;
        }
      }
    </style>
    <?php echo $this->Html->css('bootstrap-responsive-2'); ?>
    <?php echo $this->fetch('css'); ?>
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container-fluid">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button> 
          <a class="brand" href="<?php echo $this->Html->url(array('controller'=>'Pages','action'=>'index','admin'=>true));?>"><i class="icon-home icon-white"></i></a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="active"><a href="<?php echo $this->Html->url(array('controller'=>'Menus','action'=>'add','admin'=>true));?>">Gestion Menu</a></li>
              <li><a href="<?php echo $this->Html->url(array('controller'=>'Pages','action'=>'addPages','admin'=>true));?>">Gestion Pages</a></li>
              <li><a href="#contact">Gestion Users</a></li>
              <li><a href="<?php echo $this->Html->url(array('controller'=>'Blocs','action'=>'addBlocs','admin'=>true));?>">Gestion des Blocs</a></li>
                <li><a href="<?php echo $this->Html->url(array('controller'=>'Types','action'=>'addTypes','admin'=>true));?>">Gestion des Types</a></li>
              <li><a href="<?php echo $this->Html->url(array('controller'=>'Roles','action'=>'add','admin'=>true));?>">Gestion Roles</a></li>              
              <li><a href="<?php echo $this->Html->url(array('controller'=>'Articles','action'=>'index','admin'=>true));?>">Gestion Articles</a></li>
               <li><a href="<?php echo $this->Html->url(array('controller'=>'Banners','action'=>'add','admin'=>true));?>">Gestion Banner</a></li>               
               <li><a href="<?php echo $this->Html->url(array('controller'=>'Roles','action'=>'add','admin'=>true));?>">Gestion Images</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>
    <div class="container-fluid">
      <div class="row-fluid">
         <div class="span3">
          <div class="well sidebar-nav">
            <ul class="nav nav-list">
              <li class="nav-header">Profil Administrateur</li>
              <?php echo $this->Html->image('user.png',array('width'=>104,'height'=>100,'class'=>'img-polaroid')); ?>
              <li class="active"><a href="#">Edit</a></li>
              <li><a href="#">informations</a></li>
              <li><a href="#">calendrier</a></li>
              <li><a href="#">Deconnexion</a></li>
            </ul>
          </div><!--/.well -->
         </div><!--/span-->
         <div class="span9">
          <?php echo $this->Session->flash(); ?>
          <?php echo $this->fetch('content'); ?>
         </div><!--/span-->
        </div><!--/row-fluid-->
        <hr>
        <footer>
          <p>&copy; Eic Corporation <?php echo date('Y'); ?></p>
        </footer>
      </div><!--/.fluid-container-->
    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <?php echo $this->Html->script('//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'); ?>   
    <?php echo $this->Html->script('bootstrap-2'); ?>
    <?php echo $this->Html->script('main-admin'); ?>
    <?php echo $this->fetch('script'); ?>
  </body>
</html>
