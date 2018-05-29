<?php

namespace MisReclamos\Http\Controllers;

use Illuminate\Http\Request;
use MisReclamos\ReclamoRealizado;

class PanelController extends Controller
{
    public function index()
    {
        $reclamos =  ReclamoRealizado::all();
        $cantTotal = 0;
        $cantPendiente = 0;
        $cantProceso = 0;
        $cantFinalizado = 0;
        foreach ($reclamos as $reclamo) {
          $cantTotal = $cantTotal + 1;
          if($reclamo->estado == 'Pendiente'){
            $cantPendiente = $cantPendiente +1;
          }
          if($reclamo->estado == 'Proceso'){
            $cantProceso = $cantProceso +1;
          }
          if($reclamo->estado == 'Finalizado'){
            $cantFinalizado = $cantFinalizado +1;
          }
        }

        return view('admin.panelReclamo',compact('reclamos', 'cantTotal', 'cantPendiente', 'cantProceso', 'cantFinalizado'));
    }

    public function tabla()
    {
        $reclamos =  ReclamoRealizado::all();
        return view('admin.tablaReclamo',compact('reclamos'));
    }

    public function setPendiente($id)
    {
        $reclamo =  ReclamoRealizado::find($id);
        $reclamo->estado = 'Pendiente';
        $reclamo->save();
        return redirect()->route('tablaDeReclamos');
    }

    public function setProceso($id)
    {
        $reclamo =  ReclamoRealizado::find($id);
        $reclamo->estado = 'Proceso';
        $reclamo->save();
        return redirect()->route('tablaDeReclamos');
    }

    public function setFinalizado($id)
    {
        $reclamo =  ReclamoRealizado::find($id);
        $reclamo->estado = 'Finalizado';
        $reclamo->save();
        return redirect()->route('tablaDeReclamos');
    }
}
