<?php

namespace App\Http\Controllers\Torneos;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Torneos\Torneos;
use App\Models\Torneos\TorneosCompact;
use App\Models\Torneos\Organizaciones;
use Auth;
use Session;
use Str;

class TorneosController extends Controller
{
    public function torneoIndex($id,$codigo)
    {
        $data = Torneos::where([['user_id','=',$id]])->get()->all();
        return view('xhimigo.torneos.torneo-index',['data'=>$data]);
    }

    public function torneoModal(Request $request)
    {
        $ajaxData = $request->all();
        $torneo = $ajaxData['nombre'];
        $codigo = $ajaxData['codigo'];
        $id = $ajaxData['torId'];
        $data = Torneos::where('id','=',$ajaxData['torId'])->first();
        // dd($data);die;
        $getTorneoCompact = TorneosCompact::where('torneo_id','=',$ajaxData['torId'])->get();
        $count = $getTorneoCompact->count();
        return view('xhimigo.torneos.torneo-modal',['data'=>$data,'torneo'=>$torneo, 'codigo'=>$codigo, 'id'=>$id, 'cuenta'=>$count]);
    }

    public function torneoAddEdit(Request $request,$id=null)
    {
        Session::put('pagina','torneos');
        $codigoTor = Str::random(10);
        $user_id = auth()->id();
        $user_codigo = $request->user()->codigo;
        $data = $request->all();
        if ($id=="")
        {
            $boton = "Agregar Torneo";
            $tipo_page = "agregar";
            $clase = "border-green-400 text-green-600 hover:bg-green-400";
            $torneo = new Torneos;
            // $getOrganizacion = array();
            $message = "Torneo Agregada Correctamente";
        }
        else
        {
            $boton = "Actualizar Torneo";
            $tipo_page = "editar";
            $clase = "border-red-400 text-red-600 hover:bg-red-400";
            $torneo = Torneos::find($id);
            $message = "Torneo Actualizada Correctamente";
        }

        if ($request->isMethod('post'))
        {
            $rules = [
                'nombre' => 'required',
                'nombre_2' => 'required',
                'disciplina' => 'required',
                'modalidad' => 'required',
                'categoria' => 'required',
                'fecha_inicio' => 'required',
                'fecha_fin' => 'required'
            ];
            $customMessages = [
                'nombre.required' => 'Nombre Princicpal es obligatorio',
                'nombre_2.required' => 'Nombre Secundario es obligatorio',
                'disciplina.required' => 'Disciplina de Documento es obligatorio',
                'modalidad.required' => 'Modalidad es obligatorio',
                'categoria.required' => 'Categoría es obligatorio',
                'fecha_inicio.required' => 'Fecha de Inicio es obligatorio',
                'fecha_fin.required' => 'Fecha Fin es obligatorio'
            ];
            $this->validate($request,$rules,$customMessages);
            $data = $request->all();
            $torneo->user_id = $user_id;
            $torneo->nombre=$data['nombre'];
            $torneo->nombre_2=$data['nombre_2'];
            $torneo->disciplina=$data['disciplina'];
            $torneo->modalidad=$data['modalidad'];
            $torneo->categoria=$data['categoria'];
            $torneo->fecha_inicio=$data['fecha_inicio'];
            $torneo->fecha_fin=$data['fecha_fin'];
            $torneo->codigo=$codigoTor;
            $torneo->logo=$data['logo'];
            $torneo->status="activo";
            $torneo->save();
            $data = torneos::query()->where('id', '=', $id)->first();
            return redirect('my-torneo/'.$user_id.'/'.$user_codigo)->with('success_message',$message);
        }
        return view('xhimigo.torneos.torneo-add-edit')->with(compact('torneo','boton','clase'));
    }

    public function torneoDetalle($id)
    {
        $data = Torneos::where('id','=',$id)->first();
        $equipos = TorneosCompact::where('torneo_id','=',$id)->with('equipos')->get()->toArray();
        return view('xhimigo.torneos.torneo-detalle',['torneo'=>$data,'equipos'=>$equipos]);
    }







    public function searchTorneo(Request $request)
    {
        $ajaxData = $request->all();
        if($ajaxData['codigo']== null)
        {
            return "Ingrese un código para la búsqueda!....";
        }
        else
        {
            $data = Torneos::query()->where('codigo', '=', $ajaxData['codigo'])->first();
            if($data  == null)
            {
                 return "<span class='text-sm text-gray-500'>El torneo : <span class='bg-red-200 px-1 rounded'>".$ajaxData['codigo']."</span> aún no está registrado en nuestra base de datos...</span>";
            }
            else{return view('xhimigo.torneos.editar-torneo',['searchData' => $data]);}
        }

    }

    public function misTorneos(Request $request)
    {
        $ajaxData = $request->all();
        $data = Torneos::where('user_id','=',$ajaxData['codigo'])->get()->all();
        // dd($data);die;
        return view('xhimigo.torneos.mis-torneos',['data'=>$data]);
    }

    public function myTorneo($id)
    {
        $data = Torneos::where('user_id','=',$id)->get()->all();
        // dd($data);die;
        return view('xhimigo.torneos.my-torneo',['data'=>$data]);
    }

    public function misTorneosDetalle(Request $request)
    {
        $ajaxData = $request->all();
        $data = Torneos::where('id','=',$ajaxData['codigo'])->first();
        // dd($data);die;
        return view('xhimigo.torneos.mis-torneos-detalle',['data'=>$data]);
    }

    public function miTorneoDetalle(Request $request)
    {
        $ajaxData = $request->all();
        $data = Torneos::where('id','=',$ajaxData['codigo'])->first();
        // $dataOrganizacion = TorneosCompact::where('torneo_id','=',$ajaxData['codigo'])->with('organizaciones')->get()->toArray();
        $dataOrganizacion = TorneosCompact::where('torneo_id','=',$ajaxData['codigo'])->with('equipos')->get()->toArray();
        return view('xhimigo.torneos.mi-torneo-detalle',['miTorneoDetalle'=>$data,'listaOrganizaciones'=>$dataOrganizacion]);

    }

















}
