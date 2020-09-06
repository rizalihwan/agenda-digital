<?php

namespace App\Http\Controllers;

use App\Agenda;
use Illuminate\Http\Request;

class AgendaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Agenda::latest()->paginate(6);
        $message = Agenda::Message();
        return view('agenda.index', compact('message', 'data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('agenda.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $attr = $this->validate(request(),[
            'judul_agenda' => 'required|min:2',
            'description' => 'required|min:2'
        ]);
        $attr['slug'] = \Str::slug(request()->judul_agenda.\Str::random(10));
        Agenda::create($attr);
        // parsing notif success to view
        session()->flash('success', 'Data Berhasil Disimpan');
        return redirect()->route('agenda.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Agenda  $agenda
     * @return \Illuminate\Http\Response
     */
    public function show(Agenda $agenda)
    {
        return view('agenda.show', compact('agenda'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Agenda  $agenda
     * @return \Illuminate\Http\Response
     */
    public function edit(Agenda $agenda)
    {
        return view('agenda.edit', compact('agenda'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Agenda  $agenda
     * @return \Illuminate\Http\Response
     */
    public function update(Agenda $agenda)
    {
        $attr = $this->validate(request(), [
            'judul_agenda' => 'required|min:2',
            'description' => 'required|min:2'
        ]);
        $agenda->update($attr);
        // parsing notif success to view
        session()->flash('success', 'Data Berhasil Diupdate');
        return redirect()->route('agenda.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Agenda  $agenda
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Agenda::findOrFail($id);
        $data->delete();
        // parsing notif success to view
        session()->flash('success', 'Data Berhasil Dihapus');
        return back();
    }
}
