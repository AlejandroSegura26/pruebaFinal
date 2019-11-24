<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//Se hace el llamado al modelo 'rol'
use App\Rol;

class RolController extends Controller
{
    //Función para mostrar todos los registros de la tabla 'rol' dependiendo de lo que se busque o no
    public function index(Request $request)
    {
        //Verifica que solo existan peticiones por Ajax, en caso de acceder a una ruta dirigira a la raiz
        if (!$request->ajax()) return redirect('/');
        $buscar = $request->buscar;
        $criterio = $request->criterio;
        //Verifica que el input del texto a buscar este vacio, en ese caso, realiza un select para recopilar los datos necesarios para llevar a cabo el crud y los ordena descendiente y los pagina de 10 en 10
        if ($buscar == '') {
            $roles = Rol::orderBy('id','desc')->paginate(10);
        //En caso contrario devuelve aquellos registros que coinciden con el texto a buscar y lo ordena descendentemente y los pagina de 10 en 10
        } else {
            $roles = Rol::where($criterio,'like','%'.$buscar.'%')->orderBy('id','desc')->paginate(10);
        }
        //Declaracion del arreglo 'pagination' que tiene los elementos necesarios para las funciones, siguiente, ir a la pagina y anterior
        return [
            'pagination' => [
                'total' => $roles->total(),
                'current_page' => $roles->currentPage(),
                'per_page' => $roles->perPage(),
                'last_page' => $roles->lastPage(),
                'from' => $roles->firstItem(),
                'to' => $roles->lastItem(),
            ],
            'roles' => $roles
        ];
    }
    //Devuelve todas los roles activados para utilizarse en un select
    public function selectRol(Request $request)
    {
        //Verifica que solo existan peticiones por Ajax, en caso de acceder a una ruta dirigira a la raiz
        if (!$request->ajax()) return redirect('/');
        //Verifica que traiga solo los roles que estan activas y las ordena ascendentemente para guardalas en el arreglo 'roles'
        $roles = Rol::where('condicion','=','1')
        ->select('id','nombre')->orderBy('nombre','asc')->get();
        return ['roles' => $roles];
    }
}
