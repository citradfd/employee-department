<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;

class departemen extends Controller{
    public function index()
    {
        return view('departemen');
    }

    public function add(Request $request){
        DB::table('departemen')->insert([
            'id' => $request->id,
            'nama_departemen' => $request->nama_departemen,
        ]);
        return redirect('viewDepartment');
    }

    public function view(){
        $departemen = DB::table('departemen')->get();
        $parameter = [
            'departemen' => $departemen
        ];

        return view('view', $parameter);
    }

    public function edit($id){
        $departemen = DB::table('departemen')->where('id', $id)->first();

        $parameter = [
            'departemen' => $departemen,
            'id' => $id,
        ];

        return view('edit', $parameter);
    }

    public function update(Request $request, $id){
        DB::table('departemen')->where('id', $id)->update([
            'id' => $request->id,
            'nama_departemen'=> $request->nama_departemen,
        ]);
        return redirect('viewDepartment');
    }

    public function delete($id){
        DB::table('departemen')->where('id', $id)->delete();
        return redirect('viewDepartment');
    }
}