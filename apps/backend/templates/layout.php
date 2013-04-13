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
        <?php $action = sfContext::getInstance()->getRouting()->getCurrentRouteName();
        $clase = ($sf_user->isAuthenticated()) ? 'layout-admin' : 'layout'; ?>
        <div class="<?php echo $clase ?>">
            <div class="logo"></div>
            <div class="menu">
                <a href="<?php echo url_for('logout') ?>">
                    <div class="men-clos"></div>
                </a>
                <a href="/frontend.php/help">
                    <div class="men-help"></div>
                </a>
                <a href="<?php echo url_for('instructions/index') ?>">
                    <div class="men-inst"></div>
                </a>
                <!--<a href="<?php //echo url_for('profile') ?>">
                    <div class="men-acco"></div>
                </a> -->


                <a href="<?php echo url_for('/') ?>">
                    <div class="men-home"></div>
                </a>

            </div> 
            <div class="clear-boot"></div>
            <div class="over-smenu">


                <div class="over-men-home-admin"></div>



              


                <div class="over-men-inst"></div>



                <div class="over-men-help"></div>



                <div class="over-men-clos"></div>



            </div> 

            <div class="home-admin">
                <?php if ($sf_user->isAuthenticated()): ?>
                    <div class="fond-admin"></div>

                    <div class="tit-subadmin">
                        <p class="titulo-inst">¡ GANA EL MAYOR PUNTAJE !</p>
                        <div class="linea"></div>
                        <p class="subtit-inst">Calidad eje fundamental del crecimiento</p>
                        <div class="tit-admin"></div>

                    </div>

                    <div class="pers-admin"></div>

                    <?php if (sfContext::getInstance()->getUser()->getGuardUser()->getIsSuperAdmin()) : ?>
                        <div class="menu-2">
                            <div class="menu-admin">
                                <?php $class =  ($action == 'quiz'|| $action == 'quiz_new' || $action == 'quiz_edit') ? 'men-active' : '' ?>
                                <?php echo link_to('Actividad', '@quiz', array('class'=>$class)) ?>
                            </div>
                            <div class="menu-admin">
                                <?php $class =  ($action == 'question'|| $action == 'question_new' || $action == 'question_edit') ? 'men-active' : '' ?>
                                <?php echo link_to('Preguntas', '@question', array('class'=>$class)) ?>
                            </div>
                             <div class="menu-admin">
                                <?php $class =  ($action == 'questions_quiz'|| $action == 'questions_quiz_new' || $action == 'questions_quiz_edit') ? 'men-active' : '' ?>
                                <?php echo link_to('Gestionar actividad', '@questions_quiz', array('class'=>$class)) ?>
                            </div>

                            <div class="menu-admin">
                                <?php $class =  ($action == 'dificulty_quiz' || $action == 'dificulty_quiz_new' || $action == 'dificulty_quiz_edit') ? 'men-active' : '' ?>
                                <?php echo link_to('Puntaje', '@dificulty_quiz', array('class'=>$class)) ?>
                            </div>
                            <div class="menu-admin">
                                <?php $class =  ($action == 'bonus_quiz' || $action == 'bonus_quiz_new' || $action == 'bonus_quiz_edit') ? 'men-active' : '' ?>
                                <?php echo link_to('Bono', '@bonus_quiz', array('class'=>$class)) ?>
                            </div>
                            <div class="menu-admin">
                                <?php $class =  ($action == 'instructions'|| $action == 'instructions_new' || $action == 'instructions_edit') ? 'men-active' : '' ?>
                                <?php echo link_to('Instrucciones', '@instructions', array('class'=>$class)) ?>
                            </div>
                            <div class="clear-boot"></div>
                            <div class="menu-admin">
                                <?php $class =  ($action == 'answer'|| $action == 'answer_new' || $action == 'answer_edit') ? 'men-active' : '' ?>
                                <?php echo link_to('Gestionar respuestas', '@answer', array('class'=>$class)) ?>
                            </div>
                            <!--<div class="menu-admin">
                            <?php //echo link_to('Respuesta correcta', '@correct_answer_question') ?>
                            </div> -->
                            <div class="menu-admin">
                                <?php $class =  ($action == 'sf_guard_group'|| $action == 'sf_guard_group_new' || $action == 'sf_guard_group_edit') ? 'men-active' : '' ?>
                                <?php echo link_to('Grupos', '@sf_guard_group', array('class'=>$class)) ?>
                            </div>
                            <div class="menu-admin">
                                <?php $class =  ($action == 'sf_guard_permission'|| $action == 'sf_guard_permission_new' || $action == 'sf_guard_permission_edit') ? 'men-active' : '' ?>
                                <?php echo link_to('Permisos', '@sf_guard_permission', array('class'=>$class)) ?>
                            </div>
                            <div class="menu-admin">
                                <?php $class =  ($action == 'sf_guard_user'|| $action == 'sf_guard_user_new' || $action == 'sf_guard_user_edit') ? 'men-active' : '' ?>
                                <?php echo link_to('Usuarios', '@sf_guard_user', array('class'=>$class)) ?>
                            </div>
                            <div class="menu-admin">
                                <a href="/frontend.php/quizlog/preparereport">Ranking</a>

                            </div>
                            <div class="menu-admin">
                                <a href="/frontend.php/quiz/prepareimport">Importar</a>

                            </div>
                                <!-- <div class="menu-admin"><?php //echo link_to('Logout', '@sf_guard_signout')  ?></div> -->


                        </div>
                    <?php endif; ?>




                    <div class="content-admin">    <?php endif; ?>
                    <?php echo $sf_content ?>
                    <?php if ($sf_user->isAuthenticated()): ?> </div> <?php endif; ?>
            </div>
            <div class="footer"></div>
            <?php //if() ?> 
           <!-- <a href="<?php //echo url_for('/')  ?>">
              <div class="back"></div>
            </a> -->

        </div>
    </body>
</html>

<script type="text/javascript">
    $(document).ready(function() {
            
    $('.confirmar').click(function() 
    {
       var c =  confirm(' Estas seguro que deseas salir ?');
       if(c){ 
           $(location).attr('href','<?php echo url_for('logout') ?>');
       }
    });  
    
    $('.men-home').mouseover(function() {
        $('.over-men-home-admin').show(); 
         
        $('.over-men-help').hide();
        $('.over-men-inst').hide();
        $('.over-men-acco').hide(); 
        $('.over-men-clos').hide();
      });
      
      $('.men-help').mouseover(function() {
        $('.over-men-help').show();
        
        $('.over-men-inst').hide();
        $('.over-men-acco').hide(); 
        $('.over-men-clos').hide(); 
        $('.over-men-home-admin').hide(); 
      });
      
      $('.men-inst').mouseover(function() {
        $('.over-men-inst').show(); 
        
        $('.over-men-help').hide();
        $('.over-men-acco').hide(); 
        $('.over-men-clos').hide(); 
        $('.over-men-home-admin').hide(); 
      });
      
      $('.men-acco').mouseover(function() {
        $('.over-men-acco').show(); 
        
        $('.over-men-help').hide();
        $('.over-men-inst').hide();
        $('.over-men-clos').hide(); 
        $('.over-men-home-admin').hide(); 
      });
      
      $('.men-clos').mouseover(function() {
        $('.over-men-clos').show(); 
        
        $('.over-men-help').hide();
        $('.over-men-inst').hide();
        $('.over-men-acco').hide(); 
        $('.over-men-home-admin').hide(); 
      });
      
       
        
    $('.men-home').mouseout(function() {
       fin();
    });
    $('.men-help').mouseout(function() {
       fin();
    });
    $('.men-inst').mouseout(function() {
       fin();
    });
    $('.men-acco').mouseout(function() {
       fin();
    });
    $('.men-clos').mouseout(function() {
       fin();
    });
    
    function fin(){
        $('.over-men-help').hide();
        $('.over-men-inst').hide();
        $('.over-men-acco').hide(); 
        $('.over-men-home-admin').hide(); 
        $('.over-men-clos').hide(); 
    }
    });
    
    
   

                
            
        </script>
