<?php
include_once 'php/headerHTML.php';
include_once 'menuAdmin.php';
?>

<div class="container mt-4">
    <h2 class="text-center">Subir calificaciones</h2>
    <p>
    Suba el archivo de calificaciones para ser almacenadas en la base de datos del sistema. 
    Descargue un archivo ejemplo para realizar esta acción. <a href="php/temp/example.csv">Archivo ejemplo.</a>
    </p>
	<form method="POST" action="php/upload.php" enctype="multipart/form-data">
	<div class="row">
		<div class="col-md-2 col-lg-2 col-sm-2">
		<input type="file" name="file-1[]" id="file-1" class="inputfile inputfile-1" data-multiple-caption="{count} files selected" multiple />
		<label for="file-1"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg> <span>Subir archivo&hellip;</span></label>
		</div>
		<div class="col-md-3 col-lg-3 col-sm-3">
		<button type="submit" class="button" id="file-1">subir</button>
		</div>
	</div>
	
	</form>
</div>

<script >
/*
	By Osvaldas Valutis, www.osvaldas.info
	Available for use under the MIT License
*/

'use strict';

;( function ( document, window, index )
{
	var inputs = document.querySelectorAll( '.inputfile' );
	Array.prototype.forEach.call( inputs, function( input )
	{
		var label	 = input.nextElementSibling,
			labelVal = label.innerHTML;

		input.addEventListener( 'change', function( e )
		{
			var fileName = '';
			if( this.files && this.files.length > 1 )
				fileName = ( this.getAttribute( 'data-multiple-caption' ) || '' ).replace( '{count}', this.files.length );
			else
				fileName = e.target.value.split( '\\' ).pop();

			if( fileName )
				label.querySelector( 'span' ).innerHTML = fileName;
			else
				label.innerHTML = labelVal;
		});

		// Firefox bug fix
		input.addEventListener( 'focus', function(){ input.classList.add( 'has-focus' ); });
		input.addEventListener( 'blur', function(){ input.classList.remove( 'has-focus' ); });
	});
}( document, window, 0 ));
</script>
<?php
include_once 'php/footerHTML.php';