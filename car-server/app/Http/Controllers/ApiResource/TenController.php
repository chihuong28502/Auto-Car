<?php

namespace App\Http\Controllers\ApiResource;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return 'test api resource';
    }

    public function store(Request $request)
    {
        return "post api";
    }

    public function update(Request $request, $id)
    {
        //
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
