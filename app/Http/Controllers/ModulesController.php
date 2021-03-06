<?php

namespace App\Http\Controllers;

use App\Modules;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Input;
use Redirect;
use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\Exception\UnsatisfiedDependencyException;

class ModulesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $modules = Modules::all();

        return view('admin.modulesList', ['modules' => $modules]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.modulesCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $module = new Modules;
        $module->uuid   = Uuid::uuid4();
        $module->name   = $request->name;
        $module->title  = $request->title;
        $module->icon   = $request->icon;
        $module->color  = $request->color;
        $module->save();
        return Redirect::route('admin.category.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $modules = Modules::find($id);
        return view('admin.modulesShow', ['modules' => $modules]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $modules = Modules::find($id);
        return view('admin.modulesEdit', ['modules' => $modules]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $module = Modules::find($id);
        $module->name   = $request->name;
        $module->title  = $request->title;
        $module->icon   = $request->icon;
        $module->color  = $request->color;
        $module->save();
        return Redirect::route('admin.category.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $module = Modules::find($id);
        $module->delete();

        return Redirect::route('admin.category.index');
    }
}
