<?php
require_once 'model/Configuracion.php';

class estadisticasConfig
{

  public static function bannerConfig()
  {

    $configuracion = new configuracion;

    $sumaDeudas = $configuracion->sumaDeudas();

    echo  "<script>document.getElementById('sumaDeudas').innerHTML=  $sumaDeudas + ' €'</script>";
  }
  
}
