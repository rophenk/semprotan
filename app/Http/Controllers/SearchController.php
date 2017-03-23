<?php

namespace App\Http\Controllers;

use Redirect;
use App\Modules;
use App\ModulesContent;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;


class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $modules = Modules::all();
        $modules_content = ModulesContent::all();

        return view('index', ['modules' => $modules, 'modules_content' => $modules_content]);
    }

    public function linksListJson($module_id)
    {
        $links = ModulesContent::where('modules_id', $module_id)->simplePaginate(10);
        return $links;

    }

    public function fbpage()
    {
        return view('fbpage');
    }

    public function result(Request $request)
    {
    	//$url = 'http://simapta.local/api/v1/search/result';
    	$url = 'http://simapta.pertanian.go.id/api/v1/search/result';
    	$postData = 'keyword='.$request->keyword;

    	$curl = curl_init();

        curl_setopt($curl,CURLOPT_URL,$url);
    	curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);
    	curl_setopt($curl,CURLOPT_HEADER, false); 
    	curl_setopt($curl, CURLOPT_POST, count($postData));
        curl_setopt($curl, CURLOPT_POSTFIELDS, $postData);    

        $result = curl_exec($curl);
        // Get info
        $info = curl_getinfo($curl);

        $httpcode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
        
        if ($httpcode=="200") {

            $availability = "available";

        } else {

            $availability = "unavailable";

        }

        curl_close($curl);
        return view('result', ['result' => json_decode($result), 'keyword' => $request->keyword]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($uuid)
    {
        //$url = 'http://simapta.local/api/v1/show/'.$uuid;
        $url = 'http://simapta.pertanian.go.id/api/v1/show/'.$uuid;

         // create curl resource 
        $ch = curl_init(); 

        // set url 
        curl_setopt($ch, CURLOPT_URL, $url); 

        //return the transfer as a string 
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 

        // $output contains the output string 
        $data = curl_exec($ch); 

        // close curl resource to free up system resources 
        curl_close($ch);

        return view('detail', ['data' => json_decode($data)]);
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
    public function extended(Request $request)
    {
        $q = $request->extended_search_query;
        /*var_dump($q);die();*/
        $url = "https://www.google.com/search?q=".$q."+site%3A*.pertanian.go.id";

        return Redirect::to($url);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
