<?php
require_once 'clases_base.php' ;
require_once 'class_paginai.php' ;
require_once 'clase_resultado.php' ;
require_once 'db.php' ;
//
// Instancia clases
//
$Entidad = new resultado() ;
$nomid= $Entidad->obtiene_prefijo_campo().'_Id' ;
$Entidad->Set_id($_REQUEST[$nomid]) ;
$txt = 	$Entidad->texto_impresion();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Laboratorio</title>
	<link rel= "stylesheet" href="impresion.css" >
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
	<body>
		<table class="tablaext" width="98%" >
			<tr>
				<td align="center">
					<table class="tablacert">
						<tr>
							<td align="center">
								<table class="tabladetnb">
									<tr>
										<td>
											<?php echo $txt ; ?>
										</td>
									</tr>
								</table>
							</td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td>
					<A ID="imprimir" HREF="javascript:window.print()">Imprimir</A>
				</td>
			</tr>
			<tr>
				<td height="310px">
				</td>
			</tr>
		</table>
	</body>
</html>
