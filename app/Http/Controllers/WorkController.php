<?php

namespace App\Http\Controllers;

use App\Work;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WorkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $works = Work::all();
        return view('work.list', compact('works', 'works'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('work.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
        ]);

        $validatedData['user_id'] = Auth::user()->id;

        $show = Work::create($validatedData);

        return redirect('/work')->with('success', 'Corona Case is successfully saved');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Work $work
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(Work $work)
    {
        return view('work.show', compact('work', 'work'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Work $work
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(Work $work)
    {
        return view('work.edit', compact('work'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Work $work
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, Work $work)
    {
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
        ]);
        $work->update($request->all());

        return redirect('/work')->with('success', 'Work is successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Work $work
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy(Work $work)
    {
        $work->delete();

        return redirect('/work')->with('success', 'Work is successfully deleted');
    }
}
