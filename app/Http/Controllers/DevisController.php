<?php

namespace App\Http\Controllers;

use App\Devis;
use App\Tasks;
use App\Customer;
use App\Devis_task;
use App\Cgu;
use Auth;

use Illuminate\Http\Request;

class DevisController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $devis = Devis::all();

        return view('devis.index', [
            'devis' => $devis
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $cgus          = Cgu::all();
        $customers     = Customer::all();
        $listDevisType = Devis::select('type')->groupBy('type')->get();

        return view('devis.create', [
            'cgus'          => $cgus,
            'customers'     => $customers,
            'listDevisType' => $listDevisType
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //---------------------------------
        //---------- CREATE TASK ----------
        //---------------------------------
        $free = ($request->input('task-free') === null) ? 0 : 1; 

        // Si la tache est payant, remplis toutes les champs
        // Sinon, remplace certains champs par "null"
        if($free === 0) {
            $newTask = Tasks::create([
                'title'    => $request->input('task-title'),
                'duration' => $request->input('task-duration'),
                'tasks'    => $request->input('task-tasks'),
                'category' => $request->input('task-category'),
                'free'     => $free
            ]);
        }else {
            $newTask = Tasks::create([
                'title'    => $request->input('task-title'),
                'duration' => null,
                'tasks'    => $request->input('task-tasks'),
                'category' => $request->input('task-category'),
                'free'     => $free
            ]);
        }

        //----------------------------------
        //---------- CREATE DEVIS ----------
        //----------------------------------
        $newDevis = Devis::create([
            'id_user'          => Auth::user()->id,
            'id_cgu'           => $request->input('cgu'),
            'id_customer'      => $request->input('devis-id_customer'),
            'type'             => $request->input('devis-type'),
            'title'            => $request->input('devis-title'),
            'prestation_start' => $request->input('devis-prestation_start'),
            'working_time'     => $request->input('devis-working_time')
        ]);
        //---------------------------------------
        //---------- CREATE DEVIS_TASK ----------
        //---------------------------------------
        Devis_task::create([
            'id_tasks' => $newTask->id,
            'id_devis' => $newDevis->id
        ]);
        return redirect()->route('devis.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Devis  $devis
     * @return \Illuminate\Http\Response
     */
    public function show(Devis $devis) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Devis  $devis
     * @return \Illuminate\Http\Response
     */
    public function edit(Devis $devis) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Devis  $devis
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Devis $devis) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Devis  $devis
     * @return \Illuminate\Http\Response
     */
    public function destroy(Devis $devis) {
        //
    }
}
