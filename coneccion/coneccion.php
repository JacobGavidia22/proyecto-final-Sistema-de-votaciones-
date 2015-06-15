<?php
    $dsn = 'mysql:dbname=sistemavotaciones;host=127.0.0.1';
    $usuario = 'root';
    $clave = '';   
        try {
            $con = new PDO($dsn,$usuario, $clave);
        } catch (PDOException $e) {
            print "<div id='dialogo' title='Error Salida' style='display: none;'>";
            print '<p>Error Generado:</p>';
            print '<p><span class="label label-warning glyphicon glyphicon-remove">Codigo: </span></p>';
            print $e->getCode();
            print '<p><span class="label label-warning glyphicon glyphicon-remove">Mensage de Error: </span></p>';
            print $e->getMessage();
            print "</div>";
        }  

              
    function consultaA($coneccion, $sql)
    {
      $ejecutor = $coneccion;
      $msgok = NULL;
      $msgerror = NULL;
      try {
          $condicion = strstr(trim($sql)," ", TRUE);
          switch ($condicion) 
          {
              case "INSERT":
                  $msgerror = "No se ha Podido Insertar los Datos!!";
                  $msgok = "Datos insertados Correctamente";
                  
                  break;
              case "DELETE":
                  $msgerror = "No se ha Podido Eliminar los Datos";                  
                  $msgok = "Datos Eliminados";
                  break;
              case "UPDATE":
                  $msgerror = "No se ha Podido Actualizar los Datos";                  
                  $msgok = "Datos Actualizados";
                  break;
              default:
                  $msgerror = "Es posible que no use un estandar de consulta SQL";
                  break;
          }
          
          $ejecutor->beginTransaction();
          $fila = $ejecutor->exec($sql);
          $ejecutor->commit();
          
          if($fila == 0){
              $msgok = $msgerror."<br> Error  "
                      . "al guardar ";
          }
          
          return $msgok;
          
          
      } catch (Exception $exc) {
          $ejecutor->rollBack();
          return $msgerror. ":(<br>".$exc->getMessage(); 
      }
    }
    
    function consultaD($coneccion, $sql,$modo=2,$presentacion=FALSE)
    {
        $ejecutor = $coneccion;
        $manejador = trim($sql);
        $devolucion = "";
        try {       
            $datos = $ejecutor->query($manejador);
            $datos->setFetchMode($modo);
            if($presentacion == TRUE){
                $devolucion .="<table border=1>";
                foreach ($datos->fetchAll() as $registros) {
                    $devolucion.="<tr>";
                    foreach ($registros as $valor) {
                        $devolucion.="<td>".$valor."</td>";
                    }
                    $devolucion.="</tr>";
                }
                $devolucion .="</table>";
            }else{
                $contenedor = $datos->fetchAll(); 
                $devolucion=$contenedor;
                
                
            }
       
        } catch (Exception $exc) {
            return  "No se pudieron Consultar los Datos<br/>".$exc->getMessage();  
        }        
        return $devolucion;
        
    }
        
       //tabla para imprimir consulta de partido
function imprimetabla($objeto,$form,$estilo="table",$id,$editar=0){
  if ($objeto != NULL) {
    if (is_array($objeto)) {
      $tabla = "<table id='table' border='0px>";

      $tabla .= "<thead>";

      $tabla .= "<tr class='info>";
      foreach (array_keys($objeto[0]) as $value) {
        
        $tabla .= "<td text align=center>";
        $tabla .= $value;
        $tabla .= "</td>";
       
      }
       $tabla .= "</tr>";

       $tabla .= "</thead>";

       $tabla .= "<tbody bgcolor=#c0c0c0>";

      $tabla .= "<tr>";
      foreach ($objeto as $datos){
        foreach ($datos as $registro) {
          $tabla .= "<td text align=center>";
          $tabla .= $registro;
          $tabla .="</td>";
        }
        if($editar != "0" ){
          @$tabla .=  "<td><button><a href=".$form."Buscar.php?idPartidos=".$datos['idPartidos'].">Modificar</a></button></td>";
          @$tabla .=  "<td><button><a href=".$form."Borrar.php?idPartidos=".$datos['idPartidos'].">Eliminar</a></button></td>";

        }
        $tabla .="</tr>";

      }
        $tabla .= "</tbody>";

        $tabla .="</table>";
    } else {
      $tabla = "<center>No hay registros que mostrar</center>";
    }
    
  } else {
    $tabla = "<center>No hay Registros!!</center>";
  }
  
return $tabla;
}
//FIN TABLA DE PARTIDOS

//TABLA PARA CONSULTA DE CANDIDATOS

function imprimetablac($objeto,$form,$estilo="table",$id,$editar=0){
  if ($objeto != NULL) {
    if (is_array($objeto)) {
      $tabla = "<table id='table'  border='0px>";

      $tabla .= "<thead>";

      $tabla .= "<tr class='info>";
      foreach (array_keys($objeto[0]) as $value) {
        
        $tabla .= "<td text align=center>";
        $tabla .= $value;
        $tabla .= "</td>";
       
      }
       $tabla .= "</tr>";

       $tabla .= "</thead>";

       $tabla .= "<tbody bgcolor=#c0c0c0>";

      $tabla .= "<tr>";
      foreach ($objeto as $datos){
        foreach ($datos as $registro) {
          $tabla .= "<td text align=center>";
          $tabla .= $registro;
          $tabla .="</td>";
        }
        if($editar != "0" ){
          @$tabla .=  "<td><button><a href=".$form."Buscar.php?idCandidato=".$datos['idCandidato'].">Modificar</a></button></td>";
          @$tabla .=  "<td><button><a href=".$form."Borrar.php?idCandidato=".$datos['idCandidato'].">Eliminar</a></button></td>";

        }
        $tabla .="</tr>";

      }
        $tabla .= "</tbody>";

        $tabla .="</table>";
    } else {
      $tabla = "<center>No hay registros que mostrar</center>";
    }
    
  } else {
    $tabla = "<center>No hay Registros!!</center>";
  }
  
return $tabla;
}

function imprimetablav($objeto,$form,$estilo="table",$id,$editar=0){
  if ($objeto != NULL) {
    if (is_array($objeto)) {
      $tabla = "<table id='table'  border='0px>";

      $tabla .= "<thead>";

      $tabla .= "<tr class='info>";
      foreach (array_keys($objeto[0]) as $value) {
        
        $tabla .= "<td text align=center>";
        $tabla .= $value;
        $tabla .= "</td>";
       
      }
       $tabla .= "</tr>";

       $tabla .= "</thead>";

       $tabla .= "<tbody bgcolor=#c0c0c0>";

      $tabla .= "<tr>";
      foreach ($objeto as $datos){
        foreach ($datos as $registro) {
          $tabla .= "<td text align=center>";
          $tabla .= $registro;
          $tabla .="</td>";
        }
        if($editar != "0" ){
          @$tabla .=  "<td><button><a href=".$form."Buscar.php?idVotantes=".$datos['idVotantes'].">Modificar</a></button></td>";
          @$tabla .=  "<td><button><a href=".$form."Borrar.php?idVotantes=".$datos['idVotantes'].">Eliminar</a></button></td>";

        }
        $tabla .="</tr>";

      }
        $tabla .= "</tbody>";

        $tabla .="</table>";
    } else {
      $tabla = "<center>No hay registros que mostrar</center>";
    }
    
  } else {
    $tabla = "<center>No hay Registros!!</center>";
  }
  
return $tabla;
}

function imprimetablaPE($objeto,$form,$estilo="table",$id,$editar=0){
  if ($objeto != NULL) {
    if (is_array($objeto)) {
      $tabla = "<table id='table'  border='0px>";

      $tabla .= "<thead>";

      $tabla .= "<tr class='info>";
      foreach (array_keys($objeto[0]) as $value) {
        
        $tabla .= "<td text align=center>";
        $tabla .= $value;
        $tabla .= "</td>";
       
      }
       $tabla .= "</tr>";

       $tabla .= "</thead>";

       $tabla .= "<tbody bgcolor=#c0c0c0>";

      $tabla .= "<tr>";
      foreach ($objeto as $datos){
        foreach ($datos as $registro) {
          $tabla .= "<td text align=center>";
          $tabla .= $registro;
          $tabla .="</td>";
        }
        if($editar != "0" ){
          @$tabla .=  "<td><button><a href=".$form."Buscar.php?idPeriodo=".$datos['idPeriodo'].">Modificar</a></button></td>";
          @$tabla .=  "<td><button><a href=".$form."Borrar.php?idPeriodo=".$datos['idPeriodo'].">Eliminar</a></button></td>";

        }
        $tabla .="</tr>";

      }
        $tabla .= "</tbody>";

        $tabla .="</table>";
    } else {
      $tabla = "<center>No hay registros que mostrar</center>";
    }
    
  } else {
    $tabla = "<center>No hay Registros!!</center>";
  }
  
return $tabla;
}

function imprimetablaCo($objeto,$form,$estilo="table",$id,$editar=0){
  if ($objeto != NULL) {
    if (is_array($objeto)) {
      $tabla = "<table id='table'  border='0px>";

      $tabla .= "<thead>";

      $tabla .= "<tr class='info>";
      foreach (array_keys($objeto[0]) as $value) {
        
        $tabla .= "<td text align=center>";
        $tabla .= $value;
        $tabla .= "</td>";
      }
       $tabla .= "</tr>";

       $tabla .= "</thead>";

       $tabla .= "<tbody bgcolor=#c0c0c0>";

      $tabla .= "<tr>";
      foreach ($objeto as $datos){
        foreach ($datos as $registro) {
          $tabla .= "<td text align=center>";
          $tabla .= $registro;
          $tabla .="</td>";
        }
        if($editar != "0" ){
          @$tabla .=  "<td><button><a href=".$form."Buscar.php?idCoalision=".$datos['idCoalision'].">Modificar</a></button></td>";
          @$tabla .=  "<td><button><a href=".$form."Borrar.php?idCoalision=".$datos['idCoalision'].">Eliminar</a></button></td>";

        }
        $tabla .="</tr>";

      }
        $tabla .= "</tbody>";

        $tabla .="</table>";
    } else {
      $tabla = "<center>No hay registros que mostrar</center>";
    }
    
  } else {
    $tabla = "<center>No hay Registros!!</center>";
  }
  
return $tabla;
}

function imprimetablaB($objeto,$form,$estilo="table",$id,$editar=0){
  if ($objeto != NULL) {
    if (is_array($objeto)) {
      $tabla = "<table id='table'  border='0px>";

      $tabla .= "<thead>";

      $tabla .= "<tr class='info>";
      foreach (array_keys($objeto[0]) as $value) {
        
        $tabla .= "<td text align=center>";
        $tabla .= $value;
        $tabla .= "</td>";
       
      }
       $tabla .= "</tr>";

       $tabla .= "</thead>";

       $tabla .= "<tbody bgcolor=#c0c0c0>";

      $tabla .= "<tr>";
      foreach ($objeto as $datos){
        foreach ($datos as $registro) {
          $tabla .= "<td text align=center>";
          $tabla .= $registro;
          $tabla .="</td>";
        }
        if($editar != "0" ){
          @$tabla .=  "<td><button><a href=".$form."Borrar.php?Id=".$datos['Id'].">Eliminar</a></button></td>";

        }
        $tabla .="</tr>";

      }
        $tabla .= "</tbody>";

        $tabla .="</table>";
    } else {
      $tabla = "<center>No hay registros que mostrar</center>";
    }
    
  } else {
    $tabla = "<center>No hay Registros!!</center>";
  }
  
return $tabla;
}

function imprimetablafoto($objeto,$form,$estilo="table",$id,$editar=0){
  if ($objeto != NULL) {
    if (is_array($objeto)) {
      $tabla = "<table id='table'  border='0px>";

      $tabla .= "<thead>";

      $tabla .= "<tr class='info>";
      foreach (array_keys($objeto[0]) as $value) {
        
        $tabla .= "<td text align=center>";
        $tabla .= $value;
        $tabla .= "</td>";
       
      }
       $tabla .= "</tr>";

       $tabla .= "</thead>";

       $tabla .= "<tbody bgcolor=#c0c0c0>";

      $tabla .= "<tr>";
      foreach ($objeto as $datos){
        foreach ($datos as $registro) {
          $tabla .= "<td text align=center>";
          $tabla .= $registro;
          $tabla .="</td>";
        }
        if($editar != "0" ){
          @$tabla .=  "<td><button><a href=".$form."Borrar.php?Id=".$datos['Id'].">Eliminar</a></button></td>";

        }
        $tabla .="</tr>";

      }
        $tabla .= "</tbody>";

        $tabla .="</table>";
    } else {
      $tabla = "<center>No hay registros que mostrar</center>";
    }
    
  } else {
    $tabla = "<center>No hay Registros!!</center>";
  }
  
return $tabla;
}

function imprimetablafotocoalision($objeto,$form,$estilo="table",$id,$editar=0){
  if ($objeto != NULL) {
    if (is_array($objeto)) {
      $tabla = "<table id='table'  border='0px>";

      $tabla .= "<thead>";

      $tabla .= "<tr class='info>";
      foreach (array_keys($objeto[0]) as $value) {
        
        $tabla .= "<td text align=center>";
        $tabla .= $value;
        $tabla .= "</td>";
       
      }
       $tabla .= "</tr>";

       $tabla .= "</thead>";

       $tabla .= "<tbody bgcolor=#c0c0c0>";

      $tabla .= "<tr>";
      foreach ($objeto as $datos){
        foreach ($datos as $registro) {
          $tabla .= "<td text align=center>";
          $tabla .= $registro;
          $tabla .="</td>";
        }
        if($editar != "0" ){
          @$tabla .=  "<td><button><a href=".$form."Borrar.php?Id=".$datos['Id'].">Eliminar</a></button></td>";

        }
        $tabla .="</tr>";

      }
        $tabla .= "</tbody>";

        $tabla .="</table>";
    } else {
      $tabla = "<center>No hay registros que mostrar</center>";
    }
    
  } else {
    $tabla = "<center>No hay Registros!!</center>";
  }
  
return $tabla;
}


?>