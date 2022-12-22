<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ColController extends Controller
{
    public function index()
    {
        $collection = collect([1, 2, 3, 4, 5, 6, 7, 8, 9]);
        // dd($collection);
        //$data = $collection->all();
        //$data = $collection->avg();
        //$data = $collection->chunk(2)->all();
        // $data = $collection->reverse();
        // $data = $collection->map(function ($item, $key) {
        //     return $item + 2;
        // });

        // $data = $collection->map(function ($item, $key) {
        //     return $item + 2;
        // })->all();
        // dd($data);
    }
}
