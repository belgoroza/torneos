<?php

namespace App\Http\Controllers\Torneos;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Torneos\Personas;
use Auth;
use Session;

class PersonasController extends Controller
{
    public function index()
    {
        $data = Personas::get()->all();
        return view('xhimigo.personas.index',['data' => $data]);
    }

    public function searchPersona(Request $request)
    {
        $ajaxData = $request->all();
        $data = Personas::query()->where('documento_numero', '=', $ajaxData['texto'])->first();
        if($data  == null)
        {
             return "<span class='text-sm text-gray-500'>El documento : <span class='bg-red-200 px-1 rounded'>".$ajaxData['texto']."</span> no existe en nuestros registros...</span>";
        }
        else{return view('xhimigo.personas.editar-persona',['searchData' => $data]);}
    }

    public function addEditPersona(Request $request)
    {
        Session::put('page','categories');
        $data = $request->all();
        if ($data['dataId']=="")
        {
            $titulo = "Agregar Persona";
            $tipo_page = "agregar";
            $persona = new Personas;
            $getPersonas = array();
            $mensaje = "Persona Agregada Correctamente";
        }
        else
        {
            $titulo = "Editar Persona";
            $tipo_page = "editar";
            $persona = Personas::find($data['dataId']);
            $getPersona = Personas::query()->where('id', '=', $data['dataId'])->first();
            $message = "Persona Actualizada Correctamente";
        }

        if ($request->isMethod('post'))
        {
            $data = $request->all();
            $reglas = [
                'documento_numero' => 'required|max:255',
                'nombres' => 'required',
                'apellidos' => 'required',
                'telefono' => 'required|numeric',
                'email' => 'required',
                'pais_nacimiento' => 'required',
                'fecha_nacimiento' => 'required',
                'ciudad_actual' => 'required',
                'domicilio_actual' => 'required',
            ];
            $mensajes = [
                'documento_numero' => 'Campo requerido',
                'nombres' => 'Campo requerido',
                'apellidos' => 'Campo requerido',
                'telefono' => 'Campo requerido|numeric',
                'email' => 'Campo requerido',
                'pais_nacimiento' => 'Campo requerido',
                'fecha_nacimiento' => 'Campo requerido',
                'ciudad_actual' => 'Campo requerido',
                'domicilio_actual' => 'Campo requerido',
            ];
            $this->validate($request,$reglas,$mensajes);
            $persona->documento_numero=$data['documento_numero'];
            $persona->nombres=$data['nombres'];
            $persona->apellidos=$data['apellidos'];
            $persona->telefono=$data['telefono'];
            $persona->email=$data['email'];
            $persona->pais_nacimiento=$data['pais_nacimiento'];
            $persona->fecha_nacimiento=$data['fecha_nacimiento'];
            $persona->ciudad_actual=$data['ciudad_actual'];
            $persona->domicilio_actual=$data['domicilio_actual'];
            $persona->status=1;
            $persona->save();
            return "<div class='mt-6 bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md' role='alert'><div class='flex'><div class='py-1'><svg class='fill-current h-6 w-6 text-teal-500 mr-4' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 20 20'><path d='M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z'/></svg></div><div><p class='font-bold'>Registros tratados correctamente</p><p class='text-sm'>Los datos de la persona fueron Agregados/Editados correctamente.</p></div></div></div>";

            // return redirect('admin/categories')->with('success_message',$message);
            $data = Personas::query()->where('id', '=', $data['dataId'])->first();
            return view('xhimigo.personas.buscar-persona',['data' => $data]);
        }

    }



}

