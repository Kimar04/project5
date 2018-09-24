<?php 
//Encabezado de la pagina
include ('views/front/templates/head.php');

//validar errores
if(isset($_GET['error'])){

	include ('views/errors/errors.php');
}

?>
<section>
	<div class="tabimg">
<table>
  <tr>
    <td></td>
    <td><img class="imgslide" src="http://localhost/slideshow/public/images/ma.jpg"></td>
    <td><img class="imgslide" src="http://localhost/slideshow/public/images/avolite.jpg"></td>
    <td><img class="imgslide" src="http://localhost/slideshow/public/images/elation.jpg"></td>
  </tr>
   <tr>
    <td><img class="imgslide" src="http://localhost/slideshow/public/images/etc.jpg"></td>
    <td><img class="imgslide" src="http://localhost/slideshow/public/images/etclighting.jpg"></td>
    <td><img class="imgslide" src="http://localhost/slideshow/public/images/hog.jpg"></td>
    <td></td>
  </tr>
   <tr>
    <td></td>
    <td><img class="imgslide" src="http://localhost/slideshow/public/images/Martin.jpg"></td>
    <td><img class="imgslide" src="http://localhost/slideshow/public/images/shamsys.jpg"></td>
    <td><img class="imgslide" src="http://localhost/slideshow/public/images/stagehands.jpg"></td>
  </tr>
   <tr>
    <td></td>
    <td></td>
    <td><img class="imgslide" src="http://localhost/slideshow/public/images/wysiwyg.jpg"></td>
    <td></td>
</table>
 <article>
    <h1>Before the Events</h1>
    <p>Encontrar personal idóneo con las características requeridas para el correcto desarrollo del los eventos; Generar conciencia en los luminotécnicos de que hay que mejorar sus capacidades para  mejorar  su calidad de vida</p>
  </article>
<?php include ('views/front/forms/form-reg.php') ?>
  </div>
	<article class="slogan">
		<p><span>Mejoremos la calidad de los <span>eventos.
</span></p>
		<a href="">before the events</a>
</section>
<?php include('views/front/templates/foot.php'); ?>