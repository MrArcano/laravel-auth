<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\TecnologyRequest;
use App\Models\Tecnology;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TecnologyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tecnologies = Tecnology::orderBy("id","desc")->paginate(10);
        return view('admin.tecnologies.index', compact('tecnologies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // sto utilizzando direttamente la pagina index, che rimanda allo store per creare una nuova istanza
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TecnologyRequest $request)
    {
        $exist = Tecnology::where('name', $request->name)->first();
        if ($exist) {
            return redirect()->route('admin.tecnology.index')->with('error','Categoria già presente!');
        }else{
            $new_tecnologies = new Tecnology;
            $new_tecnologies->name = $request->name;
            $new_tecnologies->slug = Str::slug($request->name, '-');
            $new_tecnologies->save();
            return redirect()->route('admin.tecnology.index')->with('success','Categoria aggiunta con successo!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TecnologyRequest $request, Tecnology $tecnology)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tecnology $tecnology)
    {
        $tecnology->delete();
        return redirect()->route('admin.tecnology.index')->with('success','Cancellato con successo !');
    }
}
