<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  
    <head>
      <title>Bbva Admin Interface</title>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
      <link rel="shortcut icon" href="/favicon.ico" />
<?php use_stylesheet('admin.css') ?>
    <link rel="shortcut icon" href="/favicon.ico" />
    <?php include_stylesheets() ?>
    <?php include_javascripts() ?>
  </head>
    
  <body>
      <?php $clase = ($sf_user->isAuthenticated()) ? 'layout-admin' : 'layout' ; ?>
      <div class="<?php echo $clase ?>">
          <div class="logo"></div>
      <div class="menu">
        <a href="<?php echo url_for('logout') ?>">
                <div class="men-clos"></div>
            </a>
          <a href="<?php echo url_for('help') ?>">
                <div class="men-help"></div>
            </a>
           <a href="<?php echo url_for('instructions/index') ?>">
                <div class="men-inst"></div>
            </a>
           <a href="<?php echo url_for('profile') ?>">
                <div class="men-acco"></div>
            </a>
            
          
            <a href="<?php echo url_for('/') ?>">
                <div class="men-home"></div>
            </a>

      </div> 
     <div class="clear-boot"></div>
      <div class="over-smenu">
       
           
                <div class="over-men-home"></div>
           
            
           
                <div class="over-men-acco"></div>
           
           
            
                <div class="over-men-inst"></div>
            
            
           
                <div class="over-men-help"></div>
           
            
           
                <div class="over-men-clos"></div>
           
           
      
      </div> 
         
      <div class="home-admin">
          <?php if ($sf_user->isAuthenticated()): ?>
          <div class="fond-admin"></div>
          <div class="pers-admin"></div>
          <div class="tit-subadmin">
            <p class="titulo-inst">¡ GANA EL MAYOR PUNTAJE !</p>
            <div class="linea"></div>
            <p class="subtit-inst">Calidad eje fundamental del crecimiento</p>
            <div class="tit-admin"></div>

        </div>
          
          <div class="menu-2">
               

<div class="menu-admin">
<?php echo link_to('Puntaje', '@dificulty_quiz') ?>
</div>
<div class="menu-admin">
<?php echo link_to('Actividad', '@quiz') ?>
</div>
              
<div class="menu-admin">
<?php echo link_to('Gestionar actividad', '@questions_quiz') ?>
</div>
<div class="menu-admin">
<?php echo link_to('Preguntas', '@question') ?>
</div>
<div class="menu-admin">
<?php echo link_to('Opciones de respuestas', '@answer') ?>
</div>
              <div class="clear-boot"></div>
<!--<div class="menu-admin">
<?php //echo link_to('Respuesta correcta', '@correct_answer_question') ?>
</div> -->
<div class="menu-admin">
<?php echo link_to('Instrucciones', '@instructions') ?>
</div>
<div class="menu-admin">
<?php echo link_to('Grupos', '@sf_guard_group') ?>
</div>
<div class="menu-admin">
<?php echo link_to('Permisos', '@sf_guard_permission') ?>
</div>
<div class="menu-admin">
<?php echo link_to('Usuarios', '@sf_guard_user') ?>
</div>
<div class="menu-admin">
<?php echo link_to('Ranking', '@sf_guard_user') ?>
</div>
    <!-- <div class="menu-admin"><?php //echo link_to('Logout', '@sf_guard_signout') ?></div> -->

 
          </div>
            
         
        
      
     
      <div class="content-admin">    <?php endif; ?>
          <?php echo $sf_content ?>
      <?php if ($sf_user->isAuthenticated()): ?> </div> <?php endif; ?>
 </div>
      <div class="footer"></div>
      <?php //if() ?> 
     <!-- <a href="<?php //echo url_for('/') ?>">
        <div class="back"></div>
      </a> -->
          
  </div>
  </body>
</html>