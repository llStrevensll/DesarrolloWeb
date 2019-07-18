<?php
//& paso por referencia(los valores se mantienen)
function productos_json(&$boletos, &$camisas = 0, &$etiquetas = 0){
  $dias = array(0 => 'un_dia', 1=> 'pase_completo', 2=> 'pase2dias');
  $total_boletos = array_combine($dias, $boletos);
  //Funcion para convertir un array a Json
  $json = array();

  foreach($total_boletos as $key => $boletos):
    if((int)$boletos > 0):
        $json[$key] = (int) $boletos;
    endif;
  endforeach;

  $camisas = (int)$camisas;
  if($camisas > 0):
    $json['camisas'] = $camisas;
  endif;

  $etiquetas = (int)$etiquetas;
  if($etiquetas > 0):
    $json['etiquetas'] = $etiquetas;
  endif;
  return json_encode($json);// regresa el arreglo formateado (quitar json_encode para ver la diferencia-arreglo asociativo)
  // acrónimo de JavaScript Object Notation, es un formato de texto ligero para el intercambio de datos. JSON es un subconjunto de la notación literal de objetos de JavaScript

}

function formatear_pedido($articulos){
  $articulos = json_decode($articulos, true);//dos parametros (1 el json-en este caso viene en "$articulos", 2 siquiere que sea un array asociativo)//pasar de un json a un array
  $pedido = '';
  if(array_key_exists('un_dia',$articulos)):// llave en el arreglo
    $pedido .= 'Pase(s) 1 día: ' . $articulos['un_dia'] . "<br/>";
  endif;
  if(array_key_exists('pase_2dias',$articulos)):// llave en el arreglo
    $pedido .= 'Pase(s) 2 día: ' . $articulos['pase_2dias'] . "<br/>";
  endif;
  if(array_key_exists('pase_completo',$articulos)):// llave en el arreglo
    $pedido .= 'Pase(s) Completos: ' . $articulos['pase_completo'] . "<br/>";
  endif;
  if(array_key_exists('camisas',$articulos)):// llave en el arreglo
    $pedido .= 'Camisas: ' . $articulos['camisas'] . "<br/>";
  endif;
  if(array_key_exists('etiquetas',$articulos)):// llave en el arreglo
    $pedido .= 'Etiquetas ' . $articulos['etiquetas'] . "<br/>";
  endif;

  return $pedido;
}

function eventos_json(&$eventos){
  $eventos_json = array();
  foreach ($eventos as $evento) :
    $eventos_json['eventos'][] = $evento;
  endforeach;
  return json_encode($eventos_json);
}

function formatear_eventos_a_sql($eventos){
  $eventos = json_decode($eventos, true);
  $sql = "SELECT `nombre_evento` FROM eventos WHERE clave = 'a' ";//no habra ninguno con clave = a

  foreach ($eventos['eventos'] as $evento) :
    $sql .= " OR clave = '{$evento}'";
  endforeach;
  return $sql;
}

function usuario_autenticado(){
  if(!revisar_usuario()){
    header('Location:login.php');
  }
}
function revisar_usuario(){
  return isset($_SESSION['usuario']);
}
?>
