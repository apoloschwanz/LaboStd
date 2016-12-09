<?php

class resultado extends entidadi{

	protected function Pone_Datos_Fijos_No_Heredables()
		{	
			//
			// Prefijo campo
			$this->prefijo_campo = 'm_res_' ;
			//
			// Nombre de la tabla
			$this->nombre_tabla = "Resultados" ;
			$this->nombre_fisico_tabla = "resultados" ;
			//
			// Nombre de la pagina
			$this->nombre_pagina = $_SERVER['PHP_SELF'] ;
			$this->pagina_url_anterior = 'index.php' ;
			//
			// Paginacion
			$this->desde = 0 ;																					// by DZ 2015-08-14 - agregado lista de datos
			$this->cuenta = 15 ;																				// by DZ 2015-08-14 - agregado lista de datos			
			//
			// Lista de Campos
			//
			// tipos:  'pk' 'fk' 'other' 'date' 'datetime' 'time' 'number' 'email' 'url' 'password'
			//								el tipo 'fk' espera que se defina una clase 
			$this->lista_campos_lectura=array();

														  
			$this->lista_campos_lectura[]=array( 'nombre'=>'Id' 	,
													'tipo'=>'pk' 		,
													'descripcion'=>'# Protocolo:'	,
													'clase'=>NULL ) ; 
			$this->lista_campos_lectura[]=array( 'nombre'=>'numero_externo' 	,
													'tipo'=>'text' 		,
													'descripcion'=>'# Externo'	,
													'clase'=>NULL ) ; 
			
			$this->lista_campos_lectura[]=array( 'nombre'=>'doctor' 	,
													'tipo'=>'text' 		,
													'descripcion'=>'Doctor/a:'	,
													'clase'=>NULL ) ; 
			$this->lista_campos_lectura[]=array( 'nombre'=>'paciente_nombre' 	,
													'tipo'=>'text' 		,
													'descripcion'=>'Informe de la Sra.:'	,
													'clase'=>NULL ) ; 
			
			$this->lista_campos_lectura[]=array( 'nombre'=>'tomas' 	,
													'tipo'=>'text' 		,
													'descripcion'=>'Tomas'	,
													'clase'=>NULL ) ; 
			
			$this->lista_campos_lectura[]=array( 'nombre'=>'estudio' 	,
													'tipo'=>'text' 		,
													'descripcion'=>'Coloración técnica de'	,
													'clase'=>NULL ) ; 
			
			$this->lista_campos_lectura[]=array( 'nombre'=>'fecha' 	,
													'tipo'=>'date' 		,
													'descripcion'=>'Fecha'	,
													'clase'=>NULL ) ; 
			
			//$this->lista_campos_lectura[]=array( 'nombre'=>'colpocitograma_hormonal' 	,
			//										'tipo'=>'text' 		,
			//										'descripcion'=>'COLPOCITOGRAMA HORMONAL:'	,
			// DZ 2016-08-02										'clase'=>NULL ) ; 
			
			$this->lista_campos_lectura[]=array( 'nombre'=>'celulas_eosinofilas' 	,
													'tipo'=>'text' 		,
													'descripcion'=>'células eosinófilas superficiales:'	,
													'clase'=>NULL ) ; 
			
			$this->lista_campos_lectura[]=array( 'nombre'=>'celulas_cinanofilas' 	,
													'tipo'=>'text' 		,
													'descripcion'=>'células cianófilas superficiales :'	,
													'clase'=>NULL ) ; 
			
			$this->lista_campos_lectura[]=array( 'nombre'=>'celulas_intermedias' 	,
													'tipo'=>'text' 		,
													'descripcion'=>'células intermedias'	,
													'clase'=>NULL ) ; 
			
			$this->lista_campos_lectura[]=array( 'nombre'=>'celulas_parabasales' 	,
													'tipo'=>'text' 		,
													'descripcion'=>'células parabasales'	,
													'clase'=>NULL ) ; 
			
			$this->lista_campos_lectura[]=array( 'nombre'=>'leucocitos' 	,
													'tipo'=>'text' 		,
													'descripcion'=>'Leucocitos:'	,
													'clase'=>NULL ) ; 
			
			$this->lista_campos_lectura[]=array( 'nombre'=>'histiocitos' 	,
													'tipo'=>'text' 		,
													'descripcion'=>'Histiocitos:'	,
													'clase'=>NULL ) ; 
			
			$this->lista_campos_lectura[]=array( 'nombre'=>'hematies' 	,
													'tipo'=>'text' 		,
													'descripcion'=>'Hematíes:'	,
													'clase'=>NULL ) ; 
			
			$this->lista_campos_lectura[]=array( 'nombre'=>'trinchomas' 	,
													'tipo'=>'text' 		,
													'descripcion'=>'Trichomonas:'	,
													'clase'=>NULL ) ; 
			
			$this->lista_campos_lectura[]=array( 'nombre'=>'monilias' 	,
													'tipo'=>'text' 		,
													'descripcion'=>'Monilias:'	,
													'clase'=>NULL ) ; 
			
			$this->lista_campos_lectura[]=array( 'nombre'=>'otros_elementos' 	,
													'tipo'=>'text' 		,
													'descripcion'=>'otros elementos :'	,
													'clase'=>NULL ) ; 
			
			$this->lista_campos_lectura[]=array( 'nombre'=>'aspecto_extendido' 	,
													'tipo'=>'text' 		,
													'descripcion'=>'Aspecto del extendido:'	,
													'clase'=>NULL ) ; 
			
			$this->lista_campos_lectura[]=array( 'nombre'=>'colpocitograma_oncologico' 	,
													'tipo'=>'textarea' 		,
													'descripcion'=>'COLPOCITOGRAMA ONCOLÓGICO:'	,
													'clase'=>NULL ) ; 
			
			$this->lista_campos_lectura[]=array( 'nombre'=>'aspecto_oncologico' 	,
													'tipo'=>'text' 		,
													'descripcion'=>'Aspecto oncológico :'	,
													'clase'=>NULL ) ; 
			
			$this->lista_campos_lectura[]=array( 'nombre'=>'extendido_clase' 	,
													'tipo'=>'text' 		,
													'descripcion'=>'Extendido clase'	,
													'clase'=>NULL ) ; 
			//
			//
			$this->lista_campos_lista=array();
			$this->lista_campos_lista[]=array( 'nombre'=>'Id' 	,
													'tipo'=>'pk' 		,
													'descripcion'=>'# Protocolo:'	,
													'clase'=>NULL ) ; 
			$this->lista_campos_lista[]=array( 'nombre'=>'numero_externo' 	,
													'tipo'=>'text' 		,
													'descripcion'=>' '	,
													'clase'=>NULL ) ; 
			$this->lista_campos_lista[]=array( 'nombre'=>'doctor' 	,
													'tipo'=>'text' 		,
													'descripcion'=>'Doctor/a:'	,
													'clase'=>NULL ) ; 
			//$this->lista_campos_lista[]=array( 'nombre'=>'paciente_id' 	,
			//										'tipo'=>'text' 		,
			//										'descripcion'=>'Paciente Nro.'	,
			//										'clase'=>NULL ) ; 
			
			$this->lista_campos_lista[]=array( 'nombre'=>'paciente_nombre' 	,
													'tipo'=>'text' 		,
													'descripcion'=>'Informe de la Sra.:'	,
													'clase'=>NULL ) ; 
			$this->lista_campos_lista[]=array( 'nombre'=>'fecha' 	,
													'tipo'=>'date' 		,
													'descripcion'=>'Fecha'	,
													'clase'=>NULL ) ; 
			//
			// Acciones Extra para texto_mostrar_abm
			//$this->acciones[] = array( 'nombre'=>'okAsignarDte' , 'texto'=>'Asignar Docente' ) ;
			//$this->acciones[] = array( 'nombre'=>'okAsignarCordo' , 'texto'=>'Asignar Coordinador' ) ;
			//$this->acciones[] = array( 'nombre'=>'okImprimir' , 'texto'=>'Imprimir' ) ;
			//
			// Filtros
			$this->con_filtro_fecha = false;
			$this->con_filtro_general = true;
			//
		}	

	protected function Carga_Sql_Lectura()
	{
		$this->strsql = " SELECT
							Id ,
							numero_externo,
							doctor ,
							paciente_nombre,
							tomas  ,
							estudio  ,
							CAST(fecha AS DATE) AS fecha  ,
							celulas_eosinofilas  ,
							celulas_cinanofilas  ,
							celulas_intermedias  ,
							celulas_parabasales  ,
							leucocitos  ,
							histiocitos  ,
							hematies  ,
							trinchomas  ,
							monilias  ,
							otros_elementos  ,
							aspecto_extendido  ,
							colpocitograma_oncologico  ,
							aspecto_oncologico  ,
							extendido_clase
							
							FROM resultados 
							Where Id = " .$this->id . "  "  ;
			
	}

	protected function Carga_Sql_Lista()
	{
		$this->strsql = " SELECT 
							Id ,
							' ' as Estado,
							Id as Resultado,
							numero_externo,
							doctor ,
							paciente_nombre,
							CAST(fecha AS DATE) AS fecha
							FROM resultados " ;
									
		$filtro = " ";
		//
		// Si hay un id para filtrar
		$hay_id = false ;
		if ( isset( $_REQUEST[$this->prefijo_campo.'filtro_id'] ) )
		{
			if ( ! empty( $this->filtro_id ) and $this->filtro_id > 0 )
			{
				$hay_id = true ;
				$filtro .= " where Id = '".$this->filtro_id."'" ;
			}
		}
		//
		// Si no hay id
		if ( ! $hay_id )
		{			 
			//$filtro.= 	" where Fecha >='".$this->filtro_f_desde."' " ;
			//$filtro.= 	" AND Fecha <='".$this->filtro_f_hasta."' " ;
			if ( isset( $_REQUEST[$this->prefijo_campo.'filtro_general'] ) )
			{
				if( ! empty( $_REQUEST[$this->prefijo_campo.'filtro_general'] ) )
				{
				$filtro.= 	" WHERE paciente_nombre like '%".$this->filtro_gral."%' " ;
				}
				
			}
		}
		$this->strsql.= $filtro  ;
		$this->strsql.=		" ORDER BY Fecha, Id "  ;
			$this->lista_campos_descrip=array();
			foreach( $this->lista_campos_lista as $campo )
			{
				$this->lista_campos_descrip[] = $campo['descripcion'];
			}
			//$this->lista_campos_descrip[]='#' ;
			//$this->lista_campos_descrip[]='Fecha' ;
			//$this->lista_campos_descrip[]='Escuela' ;
			//$this->lista_campos_descrip[]='Turno' ;
			//$this->lista_campos_descrip[]='Desde' ;
			//$this->lista_campos_descrip[]='Hasta' ;
			//$this->lista_campos_descrip[]='Estado' ;
			//$this->lista_campos_descrip[]='Matrícula' ;
			//$this->lista_campos_descrip[]='Direccion' ;
			//$this->lista_campos_descrip[]='Tipo' ;
			//$this->lista_campos_descrip[]='Comuna' ;
			//$this->lista_campos_descrip[]='Barrio' ;
			//
			$this->lista_campos_tipo[0]='text' ; //'date' 'datetime' 'time' 'number' 'email' 'url' 'password' 
			$this->lista_campos_tipo[1]='text';

	}

	public function texto_mostrar_abm()
		{
			$this->leer_filtros();
			$this->leer_lista();
			$cntcols = count($this->lista_campos_descrip)+count($this->lista_detalle_enc_columnas)+2 ;
			$txt = '';
			$txt=$txt.'<table>';
			//
			// Filtros
			if ( $this->con_filtro_fecha or $this->con_filtro_general)
			{
				$txt .= '<tr>';
				$txt .= '<td colspan="'.$cntcols.'">';
				$txt .= '<table>' ;
				$txt .= '<tr>';
				$txt .= '<td style="border: none;">Filtros:</td>';
				$cpo = new Campo();
				if ( $this->con_filtro_fecha )
				{
					$cpo->pone_tipo( 'date' ) ;
					$txt .='<td>Fecha Desde:</td>';
					$cpo->pone_nombre( $this->prefijo_campo.'filtro_f_desde' ) ;
					$cpo->pone_valor( $this->filtro_f_desde ) ;
					$txt = $txt.$cpo->txtMostrarParaModificar() ;
					$txt .='<td>Fecha Hasta:</td>' ;
					$cpo->pone_nombre( $this->prefijo_campo.'filtro_f_hasta' ) ;
					$cpo->pone_valor( $this->filtro_f_hasta) ;
					$txt = $txt.$cpo->txtMostrarParaModificar() ;
					
				}
				if ( $this->con_filtro_general )
				{
					$cpo->pone_tipo( 'text' );
					$txt .='<td>Nombre:</td>';
					$cpo->pone_nombre( $this->prefijo_campo.'filtro_general' ) ;
					$cpo->pone_valor( $this->filtro_gral ) ;
					$txt = $txt.$cpo->txtMostrarParaModificar() ;
					
				}
				if ( $this->con_filtro_fecha or $this->con_filtro_general )
				{
					$cpo->pone_tipo( 'number' );
					$txt .='<td>#:</td>';
					$cpo->pone_nombre( $this->prefijo_campo.'filtro_id' ) ;
					$cpo->pone_valor( $this->filtro_id ) ;
					$txt.= $cpo->txtMostrarParaModificar() ;
				}
				//$txt .= '</td>';
				$txt .= '<td>' ;
				$txt .= '<input type="submit" value="Filtrar" name="'.$this->prefijo_campo.'_okFiltrar">' ;
				$txt .= '</td>';
				$txt .= '</tr>';
				$txt .='</table>';
				$txt .='</tr>';
			}
			//
			// Encabezados
			$txt=$txt.'<tr>' ;
			$txt=$txt.'<th> </th>';
			for($i=0;$i<count($this->lista_campos_descrip);$i++)
				{
				$txt=$txt.'<th>';
				$txt=$txt.$this->lista_campos_descrip[$i];
				$txt=$txt.'</th>';
				}
			//
			// Encabezados detalle
			foreach( $this->lista_detalle_enc_columnas as $tit )
				{
				$txt.='<th>';
				$txt.=$tit;
				$txt.='</th>';
				}
			$txt.='<th>Acciones</th>';
			$txt=$txt.'</tr>';
			//
			// Registros
			$numdet = 0 ;
			while ($this->existe == true and $reg=mysqli_fetch_array($this->registros,MYSQLI_NUM) )
				{
				$txt=$txt.'<tr>';
				$txt=$txt.'<td>';
				$txt=$txt.'<input type="checkbox" name="'.$this->prefijo_campo.'_Id'.$reg[0].'">';
				$txt=$txt.'</td>';
				//
				// Datos
				for($f=2;$f<count($reg);$f++)
					{
					$txt=$txt.'<td>';
					$txt=$txt.$reg[$f];
					$txt=$txt.'</td>';
					}
				//
				// Detalle
				//
				if ( $this->tiene_lista_detalle )
				{
					$arreglo_detalle = $this->lista_detalle[$numdet] ;
					foreach( $arreglo_detalle as $det )
					{
						$txt.='<td>';
						$txt.=$det;
						$txt.='</td>';
					}
					$numdet++;
				}
				
				// Acciones
				$txt=$txt.'<td>' ;
				//$txt=$txt.' <a href="'.$this->nombre_pagina.'?'.$this->prefijo_campo.'_Id='.$reg[0].'&'.$this->prefijo_campo.'okVer=1">Ver</a>' ;
				$txt=$txt.' <a href="'.$this->nombre_pagina.'?'.$this->prefijo_campo.'_Id='.$reg[0].'&'.$this->prefijo_campo.'okModificar=1">Modificar</a>' ;
				$txt=$txt.' <a href="imprimir.php?'.$this->prefijo_campo.'_Id='.$reg[0].'&'.$this->prefijo_campo.'" target="_blank" >Imprimir</a>' ;
				foreach( $this->acciones as $accion )
					{
						$txt=$txt.' <a href="'.$this->nombre_pagina.'?'.$this->prefijo_campo.'_Id='.$reg[0].'&'.$this->prefijo_campo.$accion['nombre'].'=1">'.$accion['texto'].'</a>' ;
					} 
					$txt=$txt.'</td>' ;
					$txt=$txt.'</tr>';
				}
			if ( $this->existe == true )
				{ 
					$txt=$txt.'<tr><td colspan="'.$cntcols.'">';
    			$txt=$txt.'<input type="submit" value="Agregar" name="'.$this->prefijo_campo.'_okAgregar">';
    			//$txt=$txt.'<input type="submit" value="Borrar" name="'.$this->prefijo_campo.'_okBorrar">';
    			$txt=$txt.'</td></tr>'; 
				}
			else
				{
					$txt=$txt.'<tr><td colspan="'.$cntcols.'">';
    			$txt=$txt.'<input type="submit" value="Agregar" name="'.$this->prefijo_campo.'_okAgregar">';
    			$txt=$txt.'</td></tr>'; 
				}
			$txt=$txt.'</table>';
			return $txt;
		}

	public function texto_impresion()
		{
			$this->error= false ;
			$this->Leer();
			if ( $this->existe == false )
			{ 
				$this->error = true ;
				$this->textoError = "El registro con Id: ".$this->ID." no se encuentra en la base de datos " ;
			}
			//
			// Otra validacion
			//
			//if ($this->Error == false )
			//	{ 
			//		//.....validacion
			//		if ( condicion de error )
			//			{
			//			$this->Error = true;

			//			$this->TextoError = ' Texto del error ' ;
			//			}
			//		
			//	}
			if ( $this->error == true )
				{
					$txt = '<td>'.$this->textoError.'</td>';
				}
			else
				{
					//
					// Abre tabla
					$txt = '<table>';
					if ( $reg=mysqli_fetch_array($this->registros) )
						{
							$txt=$txt.'<tr>';
							$txt=$txt.'<td></td><td><input type="hidden" name="'.$this->prefijo_campo.'id" value="'.$this->id.'"></td>';
							$txt=$txt.'</tr>';
							//
							// Encabezado
							$txt.='<tr>';
							$txt.='<td align="center">';
							$txt.='<table>';
							//
							$txt.='<tr>';
							$txt.='<td width="108px"></td>';
							$txt.='<td align="center">Dr/a. XXXX XXXXXX' ;
							$txt.='<br>médica ginecóloga';
							$txt.='<br>m.n. 32.162</td>';
							$txt.='<td>&nbsp&nbsp&nbsp  </td>';
							$txt.='<td align="center">Dr/a. XXXXXX XXXXXXXX';
							$txt.='<br>médica ginecóloga';
							$txt.='<br>m.n. 34.658</td>';
							$txt.='<td></td>';

							$txt.='</tr>';
							$txt.='</table>';
							$txt.='</td>';
							$txt.='</tr>';
							//
							// Paciente
							$txt.='<tr>';
								$txt.='<td align="left">';
									$txt.='<table>';
										$txt.='<tr>';
											$txt.='<td width="108px">';
												$txt.='&nbsp';
											$txt.='</td>';
											$txt.='<td>';
												$txt.='Doctor/a ';
											$txt.='</td>';
											$txt.='<td>';
												$txt.=':&nbsp'.$reg['doctor'];
											$txt.='</td>';
										$txt.='</tr>';
										$txt.='<tr>';
											$txt.='<td>';
												$txt.='&nbsp';
											$txt.='</td>';
											$txt.='<td>';
												$txt.='Informe de la Sra '; 
											$txt.='</td>';
											$txt.='<td>';
												$txt.=':&nbsp'.$reg['paciente_nombre'];
											$txt.='</td>';
										$txt.='</tr>';
										$txt.='<tr>';
											$txt.='<td>';
												$txt.='&nbsp';
											$txt.='</td>';
											$txt.='<td>';
												$txt.='Protocolo ';
											$txt.='</td>';
											$txt.='<td>';
												$txt.=':&nbsp'.$reg['Id'];
												$txt.='('.$reg['numero_externo'].')';
											$txt.='</td>';
										$txt.='</tr>';
										$txt.='<tr>';
											$txt.='<td>';
												$txt.='&nbsp';
											$txt.='</td>';
											$txt.='<td>';
												$txt.='Tomas ';
											$txt.='</td>';
											$txt.='<td>';
												$txt.=':&nbsp'.$reg['tomas'];
											$txt.='</td>';
										$txt.='</tr>';
										$txt.='<tr>';
											$txt.='<td>';
												$txt.='&nbsp';
											$txt.='</td>';
											$txt.='<td>';
												$txt.='Coloración técnica de ';
											$txt.='</td>';
											$txt.='<td>';
												$txt.=':&nbsp'.$reg['estudio'];
											$txt.='</td>';
										$txt.='</tr>';
										$txt.='<tr>';
											$txt.='<td>';
												$txt.='&nbsp';
											$txt.='</td>';
											$txt.='<td>';
												$txt.='Fecha  ';
											$txt.='</td>';
											$txt.='<td>';
												$txt.=':&nbsp'.$reg['fecha'];
											$txt.='</td>';
										$txt.='</tr>';
									$txt.='</table>';
								$txt.='</td>';
							$txt.='</tr>';
							//
							//
							//
							// Colpocitograma
							$txt.='<tr>';
							$txt.='<td>';
							$txt.='<table>';
							//
							//
							$txt.='<tr>';
							//$txt.='<td  style="vertical-align: top;">COLPOCITOGRAMA HORMONAL</td>';
							//$txt.='<td style="vertical-align: top;">:&nbsp</td>';
							//$txt.='<td><textarea rows="3" cols="50" readonly >'.$reg['colpocitograma_hormonal'].'</textarea></td>';
							$txt.='<td colspan="3">' ;
							$txt.='COLPOCITOGRAMA HORMONAL';
							$txt.='</td>';
							$txt.='</tr>';
							$txt.='<tr></tr>';
							//
							$txt.='</table>';
							$txt.='</td>';
							$txt.='</tr>';
							//
							
							
							//
							// Células
							$txt.='<tr>';
							$txt.='<td>';
							$txt.='<table>';
							//
							//
							$txt.='<tr>';
							$txt.='<td>células eosinófilas superficiales</td>';
							$txt.='<td>:&nbsp'.$reg['celulas_eosinofilas'].'</td>';
							$txt.='<td>&nbsp%</td>';
							$txt.='</tr>';
							$txt.='<tr>';
							$txt.='<td>células cianófilas superficiales</td>';
							$txt.='<td>:&nbsp'.$reg['celulas_cinanofilas'].'</td>';
							$txt.='<td>&nbsp%</td>';
							$txt.='</tr>';
							$txt.='<tr>';
							$txt.='<td>células intermedias</td>';
							$txt.='<td>:&nbsp'.$reg['celulas_intermedias'].'</td>';
							$txt.='<td>&nbsp%</td>';
							$txt.='</tr>';
							$txt.='<tr>';
							$txt.='<td>células parabasales</td>';
							$txt.='<td>:&nbsp'.$reg['celulas_parabasales'].'</td>';
							$txt.='<td>&nbsp%</td>';
							$txt.='</tr>';
							//
							$txt.='</table>';
							$txt.='</td>';
							$txt.='</tr>';
							//
							//
							
							//
							// Leucocitos
							
							$txt.='<tr>';
							$txt.='<td>';
							$txt.='<table>';
							//
							$txt.='<tr>';
							$txt.='<td>Leucocitos</td>';
							$txt.='<td>:&nbsp'.$reg['leucocitos'].'</td>';
							$txt.='<td>&nbsp</td>';
							//
							$txt.='<td>histiocitos</td>';
							$txt.='<td>:&nbsp'.$reg['histiocitos'].'</td>';
							$txt.='<td>&nbsp</td>';
							//
							$txt.='<td>Hematíes</td>';
							$txt.='<td>:&nbsp'.$reg['hematies'].'</td>';
							$txt.='<td>&nbsp</td>';
							//
							$txt.='<td>Trichomonas</td>';
							$txt.='<td>:&nbsp'.$reg['trinchomas'].'</td>';
							$txt.='<td>&nbsp</td>';
							//
							$txt.='</tr>';
							//
							$txt.='<tr>';
							//
							$txt.='<td>Monilias</td>';
							$txt.='<td>:&nbsp'.$reg['monilias'].'</td>';
							$txt.='<td>&nbsp</td>';
							//
							$txt.='<td>otros elementos</td>';
							$txt.='<td>:&nbsp'.$reg['otros_elementos'].'</td>';
							$txt.='<td>&nbsp</td>';
							//
							$txt.='</tr>';
							//
							$txt.='</table>';
							$txt.='</td>';
							$txt.='</tr>';
							
							//
							// Aspecto del Extendido
							$txt.='<tr>';
							$txt.='<td>';
							$txt.='<table>';
							//
							$txt.='<tr>';
							$txt.='<td>Aspecto del Extendido</td>';
							$txt.='<td>:&nbsp'.$reg['aspecto_extendido'].'</td>';
							$txt.='</tr>';
							//
							$txt.='</table>';
							$txt.='</td>';
							$txt.='</tr>';
							//
							
							//
							// Colpositograma Oncológico
							$txt.='<tr>';
							$txt.='<td>';
							$txt.='<table>';
							//
							$txt.='<tr>';
							$txt.='<td  style="vertical-align: top;">COLPOCITOGRAMA ONCOLÓGICO</td>';
							$txt.='<td style="vertical-align: top;">:&nbsp</td>';
							$txt.='<td><textarea rows="5" cols="50" readonly >'.$reg['colpocitograma_oncologico'].'</textarea></td>';
							$txt.='</tr>';
							//
							$txt.='</table>';
							$txt.='</td>';
							$txt.='</tr>';
							//
							
							//
							// Aspecto
							$txt.='<tr>';
							$txt.='<td>';
							$txt.='<table>';
							//
							$txt.='<tr>';
							$txt.='<td>Aspecto oncológico</td>';
							$txt.='<td>:&nbsp'.$reg['aspecto_oncologico'].'</td>';
							$txt.='</tr>';
							//
							$txt.='<tr>';
							$txt.='<td>Extendido Clase</td>';
							$txt.='<td>:&nbsp'.$reg['extendido_clase'].'</td>';
							$txt.='</tr>';
							//
							$txt.='</table>';
							$txt.='</td>';
							$txt.='</tr>';
							//
							
							//
						}
					else
						{
							$txt=$txt.'<td> mysqli_fetch_array No encontro registro </td>';
						}
					//
					// Cierra tabla
					$txt = $txt.'</table>';
				}
				return $txt ;
		}
	
	private function crear_tabla() {
		$this->strsql = "
						CREATE TABLE resultados
						(
							Id INT PRIMARY KEY NOT NULL AUTO_INCREMENT ,
							numero_externo varchar(150) ,
							doctor varchar(150) ,
							paciente_id INT ,
							paciente_nombre varchar(150),
							tomas varchar(150) ,
							estudio varchar(150) ,
							fecha date ,
							celulas_eosinofilas varchar(150) ,
							celulas_cinanofilas varchar(150) ,
							celulas_intermedias varchar(150) ,
							celulas_parabasales varchar(150) ,
							leucocitos varchar(150) ,
							histiocitos varchar(150) ,
							hematies varchar(150) ,
							trinchomas varchar(150) ,
							monilias varchar(150) ,
							otros_elementos text ,
							aspecto_extendido text ,
							colpocitograma_oncologico text ,
							aspecto_oncologico varchar(150) ,
							extendido_clase varchar(150)
						)
						
						" ;
	// DZ 2016-08-02
		$this->strsql = "
						alter table `resultados` add numero_externo varchar(150)
						alter table `resultados` drop column `colpocitograma_hormonal`
						" ;
	}
}
?>
