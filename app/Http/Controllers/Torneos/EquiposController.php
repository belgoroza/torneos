<?php

namespace App\Http\Controllers\Torneos;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Torneos\Equipos;
use App\Models\Torneos\Organizaciones;
use App\Models\Torneos\TorneosCompact;
use Auth;
use Session;
use Str;

class EquiposController extends Controller
{
    public function equipoIndex($id,$codigo)
    {
        $data = Organizaciones::where([
            ['user_id','=',$id],['user_codigo','=','MKS11180']
            ])->get()->all();
        return view('xhimigo.equipos.equipo-index',['data'=>$data]);
    }

    public function equipoModal(Request $request)
    {
        $ajaxData = $request->all();
        // dd($ajaxData);die;
        $id = $ajaxData['orgId'];
        $data = Equipos::where('id','=',$ajaxData['orgId'])->first();
        return view('xhimigo.equipos.equipo-modal',['data'=>$data, 'id'=>$id]);
    }

    public function equipoListaModal(Request $request)
    {
        $ajaxData = $request->all();
        $organizacion = $ajaxData['organizacion'];
        $codigo = $ajaxData['codigo'];
        $id = $ajaxData['orgId'];
        $listaEquipos = Equipos::where('organizacion_id','=',$ajaxData['orgId'])->get();
        // $organizacion = Organizaciones::where('id','=',$ajaxData['orgId'])->first();
        // dd($organizacion);die;
        return view('xhimigo.equipos.equipo-lista-modal',['data'=>$listaEquipos, 'id'=>$id,'organizacion'=>$organizacion,'codigo'=>$codigo]);
    }

    public function equipoTorneoListaModal(Request $request)
    {
        $ajaxData = $request->all();
        $torneo = $ajaxData['nombre'];
        $codigo = $ajaxData['codigo'];
        $id = $ajaxData['torId'];
        // $listaEquipos = TorneosCompact::where('torneo_id','=',$id)->get();
        $listaEquipos = TorneosCompact::where('torneo_id','=',$ajaxData['torId'])->with('equipos')->get()->toArray();
        return view('xhimigo.equipos.equipo-torneo-lista-modal',['equipos'=>$listaEquipos, 'id'=>$id,'torneo'=>$torneo,'codigo'=>$codigo]);
    }

    public function equipoAddEdit(Request $request,$id=null)
    {
        Session::put('pagina','equipos');
        $user_id = auth()->id();
        $user_codigo = $request->user()->codigo;
        $data = $request->all();
        // $orgId = $data['orgId'];
        if ($id=="")
        {
            $orgId = $data['orgId'];
            $boton = "Agregar Equipo";
            $tipo_page = "agregar";
            $clase = "border-green-400 text-green-600 hover:bg-green-400";
            $equipo = new Equipos;
            $message = "Equipo Agregada Correctamente";
        }
        else
        {
            $boton = "Actualizar Equipo";
            $tipo_page = "editar";
            $clase = "border-red-400 text-red-600 hover:bg-red-400";
            $equipo = Equipos::find($id);
            $message = "Equipo Actualizada Correctamente";
        }

        if ($request->isMethod('post'))
        {
            $rules = [
                'nombre' => 'required',
                'color_1' => 'required',
                'color_2' => 'required',
                'lema' => 'required',
                'descripcion' => 'required'
            ];
            $customMessages = [
                'nombre.required' => 'Equipo es obligatorio',
                'color_1.required' => 'Uniforme Principal es obligatorio',
                'color_2.required' => 'Uniforme Alterno es obligatorio',
                'lema.required' => 'Lema es obligatorio',
                'descripcion.required' => 'Descripción es obligatorio',
            ];
            $this->validate($request,$rules,$customMessages);

            $data = $request->all();
            $equipo->user_id = $user_id;
            $equipo->user_codigo = $user_codigo;
            $equipo->organizacion_id=$orgId;
            if ($id==""){$equipo->codigo = Str::random(10);}
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
        return view('xhimigo.equipos.equipo-add-edit')->with(compact('equipo','boton','clase','orgId'));

    }

    public function equipoDetalle($id)
    {
        $data = Equipos::where('id','=',$id)->first();
        return view('xhimigo.equipos.equipo-detalle',['equipoDetalle'=>$data]);
    }

    public function equipoBuscarModal($id)
    {
        return view('xhimigo.equipos.equipo-buscar-modal',['id'=>$id]);
    }

    public function equipoBuscarAjax(Request $request,$id)
    {
        $ajaxData = $request->all();
        $getEquipo = Equipos::where('nombre','LIKE',"%{$ajaxData['txtEquipoBuscar']}%")->get();
        return view('xhimigo.equipos.equipo-buscar-ajax',['getEquipo'=>$getEquipo,'torneo_id'=>$id]);
    }

    public function equipoAgregarTorneoAjax(Request $request)
    {
        $dataAjax = $request->all();
        $consultaTorneoCompact = TorneosCompact::where('torneo_id','=',$dataAjax['torneo_id'])->where('equipo_id','=',$dataAjax['equipo_id'])->first();
        if($consultaTorneoCompact){return "errores";}
        else
        {
            $guardarTorneoCompact = TorneosCompact::create(
                [
                    'torneo_id' => $dataAjax['torneo_id'],
                    'organizacion_id' => $dataAjax['organizacion_id'],
                    'equipo_id' => $dataAjax['equipo_id'],
                ]);
            $equipos = TorneosCompact::where('torneo_id','=',$dataAjax['torneo_id'])->with('equipos')->get()->toArray();
            return view('xhimigo.equipos.equipo-lista-ajax',['equipos'=>$equipos]);
        }
    }

    public function partidos()
    {
        return view('xhimigo.partidos.partidos-index');
    }

    public function posiciones()
    {
        return view('xhimigo.posiciones.posiciones-index');
    }













































    // public function index($id,$codigo)
    // {
    //     $data = Equipos::where([
    //         ['user_id','=',$id],['user_codigo','=','MKS11180']
    //         ])->get()->all();
    //     return view('xhimigo.equipos.index',['data'=>$data]);
    // }

    // public function indexModalEquipo(Request $request)
    // {
    //     $ajaxData = $request->all();
    //     $data = Equipos::where('id','=',$ajaxData['equId'])->first();
    //     return view('xhimigo.equipos.index-modal',['data'=>$data]);
    // }

    // public function equiposModal(Request $request)
    // {
    //     $ajaxData = $request->all();
    //     $organizacion = $ajaxData['organizacion'];
    //     $codigo = $ajaxData['codigo'];
    //     $id = $ajaxData['orgId'];
    //     $data = Equipos::where('organizacion_id','=',$ajaxData['orgId'])->get();
    //     return view('xhimigo.equipos.equipos-modal',['data'=>$data,'organizacion'=>$organizacion, 'codigo'=>$codigo, 'id'=>$id]);
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

    // public function equipoAddEdit(Request $request,$id=null)
    // {
    //     Session::put('pagina','organizaciones');
    //     $codigoOrg = Str::random(10);
    //     $user_id = auth()->id();
    //     $user_codigo = $request->user()->codigo;
    //     $data = $request->all();
    //     if ($id=="")
    //     {
    //         $boton = "Agregar Equipo";
    //         $tipo_page = "agregar";
    //         $equipo = new Equipos;
    //         $getOrganizacion = array();
    //         $message = "Equipo Agregado Correctamente";
    //     }
    //     else
    //     {
    //         $boton = "Actualizar Equipo";
    //         $tipo_page = "editar";
    //         $equipo = Equipos::find($id);
    //         $message = "Equipo Actualizado Correctamente";
    //     }

    //     if ($request->isMethod('post'))
    //     {
    //         $rules = [
    //             'nombre' => 'required',
    //             'color_1' => 'required|regex:/^[\pL\s\-]+$/u',
    //             'color_2' => 'required|regex:/^[\pL\s\-]+$/u',
    //             'lema' => 'required',
    //             'descripcion' => 'required'
    //         ];
    //         $customMessages = [
    //             'nombre.required' => 'Equipo es obligatorio',
    //             'color_1.required' => 'Tipo de Documento es obligatorio',
    //             'color_1.regex' => 'Tipo de Documento no es válido',
    //             'color_2.required' => 'Tipo de Documento es obligatorio',
    //             'color_2.regex' => 'Tipo de Documento no es válido',
    //             'lema.required' => 'País es obligatorio',
    //             'descripcion.required' => 'Ciudad es obligatorio',
    //         ];
    //         $this->validate($request,$rules,$customMessages);

    //         $data = $request->all();
    //         $equipo->user_id = $user_id;
    //         $equipo->user_codigo = $user_codigo;
    //         $equipo->organizacion_id = $data['organizacion_id'];
    //         if($codigoOrg){}
    //         else{$equipo->codigo=$codigoOrg;}
    //         $equipo->nombre=$data['nombre'];
    //         $equipo->color_1=$data['color_1'];
    //         $equipo->color_2=$data['color_2'];
    //         $equipo->logo=$data['logo'];
    //         $equipo->lema=$data['lema'];
    //         $equipo->representante_id=$data['representante_id'];
    //         $equipo->categoria_id=$data['categoria_id'];
    //         $equipo->descripcion=$data['descripcion'];
    //         $equipo->status="activo";
    //         $equipo->save();
    //         $data = Equipos::query()->where('id', '=', $id)->first();
    //         return redirect('my-organizacion/'.$user_id.'/'.$user_codigo)->with('success_message',$message);
    //     }
    //     return view('xhimigo.equipos.equipo-add-edit')->with(compact('equipo'));

    // }










}
