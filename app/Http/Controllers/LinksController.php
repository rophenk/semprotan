<?php

namespace App\Http\Controllers;

use App\Modules;
use App\ModulesContent;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Redirect;

class LinksController extends Controller
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
    public function index($id)
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $modules = Modules::find($id);
        return view('admin.modulesContentCreate', ['modules' => $modules]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $module = new ModulesContent;
        $module->modules_id     = $request->modules_id;
        $module->modules_uuid   = $request->modules_uuid;
        $module->address        = $request->address;
        $module->title          = $request->title;
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, $idlink)
    {
        $modules = Modules::find($id);
        $link    = ModulesContent::find($idlink);
        return view('admin.modulesContentEdit', ['modules' => $modules, 'link' => $link]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id, $idlink)
    {
        $module = ModulesContent::find($idlink);
        $module->address = $request->address;
        $module->title   = $request->title;
        $module->save();
        return Redirect::route('admin.category.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, $idlink)
    {
        $module = Modules::find($id);
        $link = ModulesContent::find($idlink);
        $link->delete();

        return Redirect::route('admin.category.index');
    }
}
