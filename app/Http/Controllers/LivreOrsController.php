<?php

namespace App\Http\Controllers;

use App\Models\LivreOrs;
use Illuminate\Http\Request;

class LivreOrsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $livreOrs = LivreOrs::all();
        return view('pages.livreOrs', compact('livreOrs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.addLivreOr');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'authorName' => 'required|max:20',
            'authorText' => 'required|max:300',
            'authorNote' => 'required|max:5|min:1'
        ]);

        $livreOr = new LivreOrs;
        $livreOr->authorName = $request->authorName;
        $livreOr->authorText = $request->authorText;
        $livreOr->authorNote = $request->authorNote;
        $livreOr->save();
        return redirect("/livreOr")->with('success', "Membre crée");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LivreOrs  $livreOrs
     * @return \Illuminate\Http\Response
     */
    public function show(LivreOrs $livreOrs, $id)
    {
        $livreOr = $livreOrs::find($id);
        return view('pages.livreOr', compact('livreOr'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LivreOrs  $livreOrs
     * @return \Illuminate\Http\Response
     */
    public function edit(LivreOrs $livreOrs, $id)
    {
        $livreOr = $livreOrs::find($id);
        return view('pages.editLivreOr', compact('livreOr'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\LivreOrs  $livreOrs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LivreOrs $livreOrs, $id)
    {
        request()->validate([
            'authorName' => 'required|max:20',
            'authorText' => 'required|max:300',
            'authorNote' => 'required|max:5|min:1'
        ]);

        $livreOr = $livreOrs::find($id);
        $livreOr->authorName = $request->authorName;
        $livreOr->authorText = $request->authorText;
        $livreOr->authorNote = $request->authorNote;
        $livreOr->save();
        return redirect("/livreOr")->with('success', "Membre" . $livreOr->authorName . "modifié");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LivreOrs  $livreOrs
     * @return \Illuminate\Http\Response
     */
    public function destroy(LivreOrs $livreOrs, $id)
    {
        $livreOr = $livreOrs::find($id);
        $livreOr->delete();
        return redirect("/livreOr")->with('warning', $livreOr->authorName . "supprimer");
    }
}
