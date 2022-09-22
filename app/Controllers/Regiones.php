<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Region;
class Regiones extends Controller{
    public function listarRegiones(){
        //instanciar el modelo Region, el cual tiene conexión con la tabla de la BD
        $region = new Region();
        //Realizar una busqueda utilizando codeigniter, el resultado lo cargaremos en un array de PHP
        $datos['regionesBd']=$region->findAll();
        //enviar datos a la vista
        return view('regiones/lista_regiones',$datos);

    }
    public function agregarRegion(){
        $region = new Region();
        $codigo = $this->request->getVar('txt_codigo');
        $nombre= $this->request->getVar('txt_nombre');
        $descripcion= $this->request->getVar('txt_descripcion');
        
        
        $datos=['cod_region'=>$codigo,
        'nombre'=>$nombre,
        'descripcion'=>$descripcion
        ];

        $region->insert($datos);

        //Realizar una busqueda utilizando codeigniter, el resultado lo cargaremos en un array de PHP
        $datos['regionesBd']=$region->findAll();
        //enviar datos a la vista
        return view('regiones/lista_regiones',$datos);
        
    }

    public function eliminarRegion($codigo=null){
        $region = new Region();
        $region->delete($codigo);
       
        //Realizar una busqueda utilizando codeigniter, el resultado lo cargaremos en un array de PHP
        $datos['regionesBd']=$region->findAll();
        //enviar datos a la vista
        return view('regiones/lista_regiones',$datos);
       
    }
    public function datosRegion($codigo=null){

    }

}