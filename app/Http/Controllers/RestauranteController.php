<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use PDF;

use App\orden;


class RestauranteController extends Controller
{
  public function home()
  {
    return view('index');
  }

  public function mozo()
  {
    $sql = "SELECT A.idOrden, concat('Mesa ',A.mesa) as mesa, 
    B.cMenu, A.nCostoMenu,
    C.cRefresco, A.nCostoRefresco,
    (A.nCostoMenu + A.nCostoRefresco) as costoTotalMenu,
    D.idEstadoMenu, D.cDescripcion
    FROM orden A
    left join menu B on B.idMenu = A.idMenu
    left join refresco C on C.idRefresco = A.idRefresco
    left join estadomenu D on D.idEstadoMenu = A.idEstado
    order by A.idOrden desc limit 50;";

    $dataMenu = DB::select($sql);

    return view('mozo')->with('dataMenu', $dataMenu);

  }

  public function cocinero()
  {
    $sql = "SELECT A.idOrden, concat('Mesa ',A.mesa) as mesa, 
    B.cMenu, A.nCostoMenu,
    C.cRefresco, A.nCostoRefresco,
    (A.nCostoMenu + A.nCostoRefresco) as costoTotalMenu,
    A.idEstado, D.cDescripcion
    FROM orden A
    left join menu B on B.idMenu = A.idMenu
    left join refresco C on C.idRefresco = A.idRefresco
    left join estadomenu D on D.idEstadoMenu = A.idEstado
    order by A.idOrden desc limit 50;";

    $dataMenu = DB::select($sql);

    return view('cocinero')->with('dataMenu', $dataMenu);

  }

  public function cambioEstado(Request $request)
  {
    $orden = $_POST['orden'];
    $estado = $_POST['estado'];

    $sql = "UPDATE orden set idEstado =".$estado." WHERE idOrden =".$orden."";

    DB::update($sql);

    $resultadoView = array(
                      "success" => true,
                      "mensaje" => "Se cambio de Estado",
                      "orden" => $orden,
                      "estado" => $estado,
                    );  
  
      
      return json_encode($resultadoView);
  }

  public function registroPedido(Request $request)
  {
      //$periodo = $request->get('periodo');
      $mesa = $_POST['mesa_numero'];      

      $tam = sizeof($_POST['idMenu']); 
      $idMenu = $_POST['idMenu'];
      $costo_menu = $_POST['costo_menu'];
      $idRefresco = $_POST['idRefresco'];
      $costo_refresco = $_POST['costo_refresco'];

      
      for($i = 0; $i < $tam; $i++)
      {
        
        $orden = new orden();
        
        $orden->mesa = intval($mesa);
        $orden->idMenu = $idMenu[$i];
        $orden->nCostoMenu = $costo_menu[$i];
        $orden->idRefresco = $idRefresco[$i];
        $orden->nCostoRefresco = $costo_refresco[$i];
        $orden->idEstado = 1;//Solicitado
        $orden->lVigente = 1;

        $orden->save();
      }

      $resultadoView = array(
                      "success" => true,
                      "mensaje" => "Datos Guardados Correctamente",
                      
                    );  
  
      
      return json_encode($resultadoView);

  }


  
}