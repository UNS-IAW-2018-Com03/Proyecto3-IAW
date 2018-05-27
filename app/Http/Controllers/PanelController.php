<?php

namespace MisReclamos\Http\Controllers;

use Illuminate\Http\Request;

class PanelController extends Controller
{
    public function index()
    {
        return view('admin.panelReclamo');
    }
}
