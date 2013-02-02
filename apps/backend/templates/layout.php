<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Bbva Admin Interface</title>

<link rel="shortcut icon" href="/favicon.ico" />
<?php use_stylesheet('admin.css') ?>
<?php include_javascripts() ?>
<?php include_stylesheets() ?>
</head>
<body>
<div id="container">
<div id="header">
<h1>
<a href="<?php echo url_for('@homepage') ?>">
<img src="/images/logo.gif" alt="Bbva admin Board" />
</a>
</h1>
</div>
    
<div id="menu">
    <?php if ($sf_user->isAuthenticated()): ?>
<ul>
<li>
<?php echo link_to('Dificultad', '@dificulty_quiz') ?>
</li>
<li>
<?php echo link_to('Preguntas', '@question') ?>
</li>
<li>
<?php echo link_to('Respuestas', '@answer') ?>
</li>
<li>
<?php echo link_to('Preguntas examen', '@questions_quiz') ?>
</li>
<li>
<?php echo link_to('Respuesta correcta pregunta', '@correct_answer_question') ?>
</li>
<li>
<?php echo link_to('Examen', '@quiz') ?>
</li>
<li>
<?php echo link_to('Instrucciones', '@instructions') ?>
</li>
<li>
<?php echo link_to('Grupos', '@sf_guard_group') ?>
</li>
<li>
<?php echo link_to('Permisos', '@sf_guard_permission') ?>
</li>
<li>
<?php echo link_to('Usuarios', '@sf_guard_user') ?>
</li>
    <li><?php echo link_to('Logout', '@sf_guard_signout') ?></li>
</ul>
    <?php endif; ?>
</div>
<div id="content">
<?php echo $sf_content ?>
</div>
<div id="footer">
emotion-cd
</div>
</div>
</body>
</html>