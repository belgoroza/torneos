<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Agenda;
use Auth;

class AgendaController extends Controller
{
    public function agenda($ruta, $page)
    {
        $vista = "xhimigo.".$ruta.'.'.$page;
        $data = Agenda::get()->all();
        return view($vista,['data' => $data]);
    }

    public function verAgenda(Request $request)
    {
        $dat = $request->all();
        $data = Agenda::where('id','=',$dat['id'])->get()->first();
        // $data = Agenda::where('id','=',$id)->get()->first();
        $vista = "xhimigo.".$dat['ruta'].'.'.$dat['page'];
        return view($vista,['data' => $data]);
    }

    public function addEditAgenda(Request $request)
    {
        $dat = $request->all();

        // $rules = [
        //     'asunto' => 'required|regex:/^[\pL\s\-]+$/u',
        //     'inicio' => 'required',
        //     'fin' => 'required',
        //     'alarma' => 'required',
        //     'notificar' => 'required',
        //     'telefono' => 'required|numeric',
        //     'comentario' => 'required|regex:/^[\pL\s\-]+$/u',
        // ];
        // $customMessages = [
        //     'asunto.required' => 'El Campo Asunto es obligatorio',
        //     'asunto.regex' => 'Ingrese un Asunto válido',
        //     'inicio.required' => 'Campo Inicio es obligatorio',
        //     'fin.required' => 'Campo Fin es obligatorio',
        //     'notificar.required' => 'El Campo Notificar es obligatorio',
        //     'telefono.required' => 'Campo Teléfono es obligatorio',
        //     'telefono.numeric' => 'Ingrese un número de teléfono válido',
        //     'comentario.required' => 'El Campo Comentario es obligatorio',
        //     'comentario.regex' => 'Ingrese un Comentario válido',
        // ];
        // $this->validate($request,$rules,$customMessages);

        // $validated = $request->validate([
        //     'asunto' => 'required|regex:/^[\pL\s\-]+$/u',
        //     'inicio' => 'required',
        // ]);


        if($dat['tipo'] == "nuevo")
        {
            Agenda::create([
                'asunto' => $dat['asunto'],
                'inicio' => $dat['inicio'],
                'fin' => $dat['fin'],
                'alarma' => $dat['alarma'],
                'notificar' => $dat['notificar'],
                'telefono' => $dat['telefono'],
                'comentario' => $dat['comentario'],
                'status' => '1',
            ]);
            $mensaje = "Evento agregado correctamente!...";
        }
        else
        {
            $agenda = Agenda::findOrFail($dat['id']);
            $agenda->asunto = $dat['asunto'];
            $agenda->inicio = $dat['inicio'];
            $agenda->fin = $dat['fin'];
            $agenda->alarma = $dat['alarma'];
            $agenda->notificar = $dat['notificar'];;
            $agenda->telefono = $dat['telefono'];;
            $agenda->comentario = $dat['comentario'];;
            $agenda->save();
            $mensaje = "Evento actualizado correctamente!...";
        }
        $data = Agenda::get()->all();
        return view('xhimigo.agenda.index-new',['data' => $data, 'mensaje' => $mensaje])->with('mensajes',$mensaje);
    }

    public function agregarAgenda(Request $request)
    {
        $dat = $request->all();
        dd($dat);

    }

    public function buscarAgenda(Request $request)
    {
        $dat = $request->all();
        if($dat['texto'] == "" )
        {
            $data = Agenda::get()->all();
        }
        else
        {
            $data = Agenda::query()
               ->where('asunto', 'LIKE', "%{$dat['texto']}%")
               // ->orWhere('email', 'LIKE', "%{$searchTerm}%")
               ->get();
        }
        return view('xhimigo.agenda.index-new',['data' => $data]);
    }

    public function cerrarAgenda(Request $request)
    {
        $ajax = $request->all();
        // return $ajax['id'];
        Agenda::where('id', $ajax['id'])->update(['status' => '0']);
        $data = Agenda::where('id','=',$ajax['id'])->get();
        return view('xhimigo.agenda.index-new',['data' => $data]);
    }







}
