<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div id="container" class="container mt-5">
	<div class="row">
		<div class="col-md-12 mt-5">
			<h1 class="mt-3 mb-3">Bienvenido a CodeIgniter 3.1.10 & Bootstrap 4.3.1!</h1>
			<h4>Éste empaquetado lo realicé para aquellos que deseen comenzar a desarrollar utilizando los frameworks Codeigniter y Bootstrap, apliaciones simples y sencillas.</h4>
		</div>
		<div class="col-md-12">
			<h4>Ustedes pueden descargar ambos frameworks desde sus páginas oficiales y empaquetarlos adaptándolos a sus necesidades</h4>
		</div>
	</div>
	<div class="row">
		<div class="col-6">
			<a class="btn btn-primary btn-block" href="https://getbootstrap.com" target="_blank">
				<i class="fab fa-bootstrap"></i> Bootstrap
			</a>
		</div>
		<div class="col-6">
			<a class="btn btn-primary btn-block" href="https://www.codeigniter.com" target="_blank">
				<i class="fab fa-free-code-camp"></i> Codeigniter
			</a>
		</div>
	</div>

	<div class="row">
		<div class="col-md-12">
			<h5 class="mt-5">Las características que incluye ésta empaquetado son:</h5>
			<ul>
				<li>Codeigniter v3.1.10</li>
				<li>Bootstrap v4.3.1</li>
				<li>jQuery v3.4.1</li>
				<li>Lightbox v2.9.0</li>
				<li>Highcharts JS v5.0.14</li>
				<li>Font Awesome v5.8.1</li>
			</ul>
			<h5 class="mt-5">Librerias de codeigniter en autoload:</h5>
			<ul>
				<li>database</li>
				<li>session</li>
				<li>email</li>
				<li>upload</li>
			</ul>
			<h5 class="mt-5">Helper de codeigniter en autoload:</h5>
			<ul>
				<li>url</li>
				<li>files</li>
			</ul>
		</div>
		<div class="col-md-12 mt-5">
			<p>Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
		</div>
	</div>
</div>