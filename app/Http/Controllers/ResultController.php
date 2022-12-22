<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Result;

class ResultController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $search = $request['search'] ?? "";
        if ($search) {
            $result = Result::where('name', 'LIKE', "$search")->get();
        }

        $data = compact('search');
        $result = Result::paginate(3);

        return view('home', ['result' => $result]);
        //search

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $request->validate(
            [
                'name' => 'required',
                'city' => 'required',
                'email' => 'required|email',
                'gender' => 'required',
                'marks' => 'required'
            ]
        );

        $result = new Result;
        $result->name = $request->name;
        $result->city = $request->city;
        $result->email = $request->email;
        $result->gender = $request->gender;
        $result->marks = $request->marks;
        $result->save();
        return redirect(route('index'));
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

        $result = Result::find($id);
        return view('editform', ['result' => $result]);
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
        $request->validate(
            [
                'name' => 'required',
                'city' => 'required',
                'email' => 'required|email',
                'gender' => 'required',
                'marks' => 'required'
            ]
        );
        $result = Result::find($id);
        $result->name = $request->name;
        $result->city = $request->city;
        $result->email = $request->email;
        $result->gender = $request->gender;
        $result->marks = $request->marks;
        $result->save();
        return redirect(route('index'))->with('status', 'Updated succeesfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Result::destroy($id);
        return redirect(route('index'));
    }
}
