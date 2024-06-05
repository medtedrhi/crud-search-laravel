<?php

namespace App\Http\Controllers;

use App\Models\students;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $s = students::paginate(5);

        return (count($s) == 0)?
            view('home', ['ZeroStudent'=>true])
        :   view('home', ['ss' => $s, 'index' => true]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {


        students::create($request->all());

        return redirect('/');
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        $s = students::find($request -> id);

        if ($s == null){
            return view('home',['notexist' => 1]);
        }else{
            return view('home',['found' => $s]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, $id)
    {
        if($request-> isMethod('get')){
            $s= students::find($id);

            return view('edit', ['s' =>$s]);
        }
        if($request ->isMethod('post')){

            students::find($id)->update($request->all());

            return redirect('/');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        students::find($id)->delete();
        return redirect('/');
    }


    public function destroyAll()
    {
        students::truncate();
        return redirect('/');
    }
}
