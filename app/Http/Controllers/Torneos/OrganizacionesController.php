<?php

namespace App\Http\Controllers\Torneos;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Torneos\Organizaciones;
use App\Models\Torneos\Equipos;
use Auth;
use Session;
use Str;

class OrganizacionesController extends Controller
{
    public function organizacionIndex($id,$codigo)
    {
        $data = Organizaciones::where([
            ['user_id','=',$id],['user_codigo','=','MKS11180']
            ])->get()->all();
        return view('xhimigo.organizacion.organizacion-index',['data'=>$data]);
    }

    public function organizacionModal(Request $request)
    {
        $ajaxData = $request->all();
        // dd($ajaxData);die;
        $id = $ajaxData['orgId'];
        $data = Organizaciones::where('id','=',$ajaxData['orgId'])->first();
        return view('xhimigo.organizacion.organizacion-modal',['data'=>$data, 'id'=>$id]);
    }

    public function organizacionAddEdit(Request $request,$id=null)
    {
        Session::put('pagina','organizaciones');
        $user_id = auth()->id();
        $user_codigo = $request->user()->codigo;
        $data = $request->all();
        if ($id=="")
        {
            $boton = "Agregar Organización";
            $tipo_page = "agregar";
            $clase = "border-green-400 text-green-600 hover:bg-green-400";
            $organizacion = new Organizaciones;
            $message = "Organización Agregada Correctamente";

        }
        else
        {
            $boton = "Actualizar Organización";
            $tipo_page = "editar";
            $clase = "border-red-400 text-red-600 hover:bg-red-400";
            $organizacion = Organizaciones::find($id);
            $message = "Organización Actualizada Correctamente";
        }

        if ($request->isMethod('post'))
        {
            $rules = [
                'organizacion' => 'required',
                'documento_tipo' => 'required|regex:/^[\pL\s\-]+$/u',
                'documento_numero' => 'required|numeric',
                'pais' => 'required',
                'ciudad' => 'required',
                'direccion' => 'required',
                'telefono' => 'required',
                'representante' => 'required',
                'manager_nombre' => 'required',
                'manager_telefono' => 'required',
            ];
            $customMessages = [
                'organizacion.required' => 'Organización es obligatorio',
                'documento_tipo.required' => 'Tipo de Documento es obligatorio',
                'documento_tipo.regex' => 'Tipo de Documento no es válido',
                'documento_numero.required' => 'Número de Documento es obligatorio',
                'pais.required' => 'País es obligatorio',
                'ciudad.required' => 'Ciudad es obligatorio',
                'direccion.required' => 'Dirección es obligatorio',
                'telefono.required' => 'Teléfono es obligatorio',
                'representante.required' => 'Representante es obligatorio',
                'manager_nombre.required' => 'Nombre del Manager es obligatorio',
                'manager_telefono.required' => 'Teléfono del manager es obligatorio',
            ];
            $this->validate($request,$rules,$customMessages);

            $data = $request->all();
            $organizacion->user_id = $user_id;
            $organizacion->user_codigo = $user_codigo;
            $organizacion->organizacion=$data['organizacion'];
            if ($id==""){$organizacion->codigo = Str::random(10);}
            $organizacion->documento_tipo=$data['documento_tipo'];
            $organizacion->documento_numero=$data['documento_numero'];
            $organizacion->pais=$data['pais'];
            $organizacion->ciudad=$data['ciudad'];
            $organizacion->direccion=$data['direccion'];
            $organizacion->telefono=$data['telefono'];
            $organizacion->representante=$data['representante'];
            $organizacion->manager_nombre=$data['manager_nombre'];
            $organizacion->manager_telefono=$data['manager_telefono'];
            // $organizacion->logo='https://i.ibb.co/4gqzhZ9/siro-400-400.png';
            $organizacion->status="activo";
            $organizacion->save();
            $data = Organizaciones::query()->where('id', '=', $id)->first();
            return redirect('my-organizacion/'.$user_id.'/'.$user_codigo)->with('success_message',$message);
        }
        return view('xhimigo.organizacion.organizacion-add-edit')->with(compact('organizacion','boton','clase'));

    }




    public function OrganizacionDetalle($id)
    {
        $data = Organizaciones::where('id','=',$id)->first();
        $equipos = Equipos::where('organizacion_id','=',$id)->get()->all();
        return view('xhimigo.organizacion.organizacion-detalle',['miOrganizacionDetalle'=>$data,'misEquipos'=>$equipos]);
    }

    // public function editarOrganizacion(Request $request)
    // {
    //     $ajaxData = $request->all();
    //     $boton = "Actualizar Organización";
    //     $data = Organizaciones::where('id','=',$ajaxData['orgId'])->first();
    //     return view('xhimigo.organizacion.add-edit-organizacion',['organizacion'=>$data,'boton'=>$boton]);
    // }

    // public function organizacionNueva(Request $request)
    // {
    //     $ajaxData = $request->all();
    //     $boton = "Agregar Organización";
    //     $data = new Organizaciones;
    //     return view('xhimigo.organizacion.add-edit-organizacion',['organizacion'=>$data,'boton'=>$boton]);
    // }


    // public function equipoNuevo($id)
    // {
    //     $boton = "Agregar";
    //     $tipo_page = "agregar";
    //     $data = Organizaciones::where('id','=',$id)->first();
    //     $equipo = new Equipos;
    //     return view('xhimigo.equipos.equipo-add-edit',['organizacion'=>$data, 'equipo'=>$equipo, 'boton'=>$boton]);
    // }

    // public function equipoEditar(Request $request)
    // {
    //     $boton = "Editar";
    //     $tipo_page = "editar";
    //     $ajaxData = $request->all();
    //     $dataOrg = Organizaciones::where('id','=',$ajaxData['idOrg'])->first();
    //     $dataEqu = Equipos::query()->where('id', '=', $ajaxData['idEqu'])->first();
    //     return view('xhimigo.equipos.equipo-add-edit',['organizacion'=>$dataOrg, 'equipo'=>$dataEqu, 'boton'=>$boton]);
    // }





    public function addEditOrganizacion(Request $request,$id=null)
    {
        Session::put('pagina','organizaciones');
        $codigoOrg = Str::random(10);
        $user_id = auth()->id();
        $user_codigo = $request->user()->codigo;
        $data = $request->all();
        if ($id=="")
        {
            $boton = "Agregar Organizacion";
            $tipo_page = "agregar";
            $organizacion = new Organizaciones;
            $getOrganizacion = array();
            $message = "Organización Agregada Correctamente";
        }
        else
        {
            $boton = "Actualizar Organización";
            $tipo_page = "editar";
            $organizacion = Organizaciones::find($id);
            $message = "Organización Actualizada Correctamente";
        }

        if ($request->isMethod('post'))
        {
            $rules = [
                // 'organizacion' => 'required|regex:/^[\pL\s\-]+$/u',
                'organizacion' => 'required',
                'documento_tipo' => 'required|regex:/^[\pL\s\-]+$/u',
                'documento_numero' => 'required|numeric',
                'pais' => 'required',
                'ciudad' => 'required',
                'direccion' => 'required',
                'telefono' => 'required',
                'representante' => 'required',
                'manager_nombre' => 'required',
                'manager_telefono' => 'required',
            ];
            $customMessages = [
                'organizacion.required' => 'Organización es obligatorio',
                // 'organizacion.regex' => 'Organización no es válido',
                'documento_tipo.required' => 'Tipo de Documento es obligatorio',
                'documento_tipo.regex' => 'Tipo de Documento no es válido',
                'documento_numero.required' => 'Número de Documento es obligatorio',
                'pais.required' => 'País es obligatorio',
                'ciudad.required' => 'Ciudad es obligatorio',
                'direccion.required' => 'Dirección es obligatorio',
                'telefono.required' => 'Teléfono es obligatorio',
                'representante.required' => 'Representante es obligatorio',
                'manager_nombre.required' => 'Nombre del Manager es obligatorio',
                'manager_telefono.required' => 'Teléfono del manager es obligatorio',
            ];
            $this->validate($request,$rules,$customMessages);

            $data = $request->all();
            $organizacion->user_id = $user_id;
            $organizacion->user_codigo = $user_codigo;
            $organizacion->organizacion=$data['organizacion'];
            $organizacion->codigo=$codigoOrg;
            $organizacion->documento_tipo=$data['documento_tipo'];
            $organizacion->documento_numero=$data['documento_numero'];
            $organizacion->pais=$data['pais'];
            $organizacion->ciudad=$data['ciudad'];
            $organizacion->direccion=$data['direccion'];
            $organizacion->telefono=$data['telefono'];
            $organizacion->representante=$data['representante'];
            $organizacion->manager_nombre=$data['manager_nombre'];
            $organizacion->manager_telefono=$data['manager_telefono'];
            $organizacion->logo='xxx-logo';
            $organizacion->status="activo";
            $organizacion->save();
            $data = Organizaciones::query()->where('id', '=', $id)->first();
            return redirect('my-organizacion/'.$user_id.'/'.$user_codigo)->with('success_message',$message);
        }
        return view('xhimigo.organizacion.add-edit-organizacion')->with(compact('organizacion'));

    }

    public function addEditEquipo(Request $request,$id=null)
    {
        Session::put('pagina','equipos');
        $codigoEquipo = Str::random(10);
        $user_id = auth()->id();
        $user_codigo = $request->user()->codigo;
        $data = $request->all();
        if ($id=="")
        {
            $boton = "Agregar Equipo";
            $tipo_page = "agregar";
            $equipo = new Equipos;
            $getEquipo = array();
            $message = "Equipo Agregada Correctamente";
        }
        else
        {
            $boton = "Actualizar Equipo";
            $tipo_page = "editar";
            $equipo = Equipos::find($id);
            $message = "Equipo Actualizada Correctamente";
        }

        if ($request->isMethod('post'))
        {
            $rules = [
                // 'organizacion' => 'required|regex:/^[\pL\s\-]+$/u',
                'nombre' => 'required',
                'color_1' => 'required|regex:/^[\pL\s\-]+$/u',
                'color_2' => 'required|regex:/^[\pL\s\-]+$/u',
                'lema' => 'required',
                'descripcion' => 'required'
            ];
            $customMessages = [
                'nombre.required' => 'Equipo es obligatorio',
                // 'organizacion.regex' => 'Organización no es válido',
                'color_1.required' => 'Tipo de Documento es obligatorio',
                'color_1.regex' => 'Tipo de Documento no es válido',
                'color_2.required' => 'Tipo de Documento es obligatorio',
                'color_2.regex' => 'Tipo de Documento no es válido',
                'lema.required' => 'País es obligatorio',
                'descripcion.required' => 'Ciudad es obligatorio',
            ];
            $this->validate($request,$rules,$customMessages);

            $data = $request->all();
            $equipo->user_id = $user_id;
            $equipo->user_codigo = $user_codigo;
            $equipo->organizacion_id=$data['organizacion'];
            $equipo->codigo=$codigoEquipo;
            $equipo->nombre=$data['nombre'];
            $equipo->color_1=$data['color_1'];
            $equipo->color_2=$data['color_2'];
            $equipo->logo=$data['logo'];
            $equipo->lema=$data['lema'];
            $equipo->representante_id=$data['representante_id'];
            $equipo->categoria_id=$data['categoria_id'];
            $equipo->descripcion=$data['descripcion'];
            $equipo->status="activo";
            $equipo->save();
            $data = Equipos::query()->where('id', '=', $id)->first();
            return redirect('my-organizacion/'.$user_id.'/'.$user_codigo)->with('success_message',$message);
        }
        return view('xhimigo.organizacion.add-edit-equipo')->with(compact('equipo'));

    }





}
