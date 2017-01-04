<?php
	require_once 'clases_base.php' ;
	require_once 'class_paginai.php' ;
	require_once 'clase_resultado.php' ;
	require_once 'db.php' ;
	//
	// Instancia clases
	//
	$Entidad = new resultado() ;
	//
	// Manejo de Eventos
	//	
	$okVer = $Entidad->obtiene_prefijo_campo().'okVer' ;
	$okModificar = $Entidad->obtiene_prefijo_campo().'okModificar' ;
	$okagregar = $Entidad->obtiene_prefijo_campo().'_okAgregar' ;
	$okborrar  = $Entidad->obtiene_prefijo_campo().'_okBorrar' ;
	$okImprimir = $Entidad->obtiene_prefijo_campo().'okImprimir' ;
	$okExportar = $Entidad->obtiene_prefijo_campo().'okExportar' ;
	if ( isset($_POST[$okVer]) )
		{
			//
			// Mustra capacitaciones Disponibles
			muestra_ver($Entidad) ;
		}
	elseif ( isset($_GET[$okModificar]) )
		{
			//
			// Edita
			$nomid= $Entidad->obtiene_prefijo_campo().'_Id' ;
			$Entidad->Set_id($_REQUEST[$nomid]) ;
			muestra_modificar($Entidad) ;
		}
	elseif ( isset($_GET[$okImprimir]) )
		{
			$nomid= $Entidad->obtiene_prefijo_campo().'_Id' ;
			$Entidad->Set_id($_REQUEST[$nomid]) ;
			muestra_imprimir($Entidad) ;
		}
	elseif ( isset($_POST['okGrabaActualizar']) )
		{
			// Graba Modificaciones
			$Entidad->texto_actualizar_okGrabar();
			if ( $Entidad->hay_error() == true ) muestra_error($Entidad) ;
			else muestra_ok('Estudio # '.$Entidad->id().' actualizado') ;
		}
	elseif ( isset($_POST['okGrabaAgregar']) )
		{
			// Graba Modificaciones
			$Entidad->texto_agregar_okGrabar();
			if ( $Entidad->hay_error() == true ) muestra_error($Entidad) ;
			else muestra_ok('Estudio # '.$Entidad->id().' agregado') ;
		}
	elseif ( isset($_POST[$okagregar]) )
		{
			//
			// Mustra capacitaciones Disponibles
			muestra_alta($Entidad) ;
		}
	elseif ( isset($_POST[$okborrar] ) )
		{
			//
			// Borra la capacitacion seleccionada
			borra_capa_elegida($reg_dte) ;
			muestra_capas_elegidas($reg_dte,$edcn) ;
		}
	elseif ( isset($_POST['okSalir'] ) )
		//
		// Vuelve al inicio
		//header('Location:'.$Entidad->pagina_url_anterior);
		$Entidad->ok_salir();
	else
		{
			//
			// Mustra lista
			muestra_lista($Entidad) ;
		}


//
// Formularios
//

	function muestra_modificar($Entidad)
		{
			//
			// Arma la página
			$pagina=new Paginai('LABORATORIO','<input type="submit" value="Grabar" name="okGrabaActualizar"><input type="submit" value="Salir" name="cancel">');
			$txt = 	$Entidad->texto_actualizar();
			$pagina->insertarCuerpo($txt);
			$pagina->graficar_c_form($_SERVER['PHP_SELF']);
		}

	function muestra_imprimir($Entidad) 
		{
			//
			// Arma la impresion
			$pagina=new Paginai('LABORATORIO','<a href="imprimir.php?'.$Entidad->obtiene_prefijo_campo().'_Id='.$Entidad->id().'">Imprimir</a><input type="submit" value="Salir" name="okSalir">');
			$pagina->sinborde();
			$txt = 	$Entidad->texto_impresion();
			$pagina->insertarCuerpo($txt);
			$pagina->graficar_c_form($_SERVER['PHP_SELF']);
		}
	function muestra_lista($Entidad)
		{
			//
			// Arma la página
			$pagina=new Paginai('LABORATORIO','<input type="submit" value="Salir" name="okSalir">');
			$txt = 	$Entidad->texto_mostrar_abm();
			$pagina->insertarCuerpo($txt);
			$pagina->graficar_c_form($_SERVER['PHP_SELF']);
		}

	function muestra_alta($Entidad)
		{
			//
			// Arma la página
			$pagina=new Paginai('LABORATORIO','<input type="submit" value="Grabar" name="okGrabaAgregar"><input type="submit" value="Salir" name="okSalir">');
			$txt = 	$Entidad->texto_agregar();
			$pagina->insertarCuerpo($txt);
			$pagina->graficar_c_form($_SERVER['PHP_SELF']);
		}

	function actualizar($Entidad)
		{
			//
			//
		}
	function muestra_ok($texto)
		{
			$pagina=new Paginai('LABORATORIO','<input type="submit" value="Ok" name="okMje">');
			$txt = 	$texto ;
			$pagina->insertarCuerpo($txt);
			$pagina->graficar_c_form($_SERVER['PHP_SELF']);
		}
	function muestra_error($Entidad)
		{
			//
			// Arma la página
			$pagina=new Paginai('LABORATORIO','<input type="submit" value="Grabar" name="okGrabaAgregar"><input type="submit" value="Salir" name="okSalir">');
			$txt = 	$Entidad->textoError();
			$pagina->insertarCuerpo($txt);
			$pagina->graficar_c_form($_SERVER['PHP_SELF']);
		}

?>
