<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Validator;

class departemen extends Controller{
    public function index()
    {
        return view('departemen');
    }

    public function add(Request $request){
        $validator = validator::make($request->all(), [
            'id' => 'required | numeric | min: 1 | max: 3',
            'nama_departemen' => 'required | max: 50',
        ],
        [
            'id.required' => 'Field harus diisi.',
            'id.numeric' => 'Input harus berupa angka.',
            'id.min' => 'Input angka minimal 1.',
            'id.max' => 'Input angka maksimal 3.',
            'nama_departemen.required' => 'Field harus diisi',
            'nama_departemen.max' => 'Input huruf maksimal 50 huruf.',
        ]
    );

        if($validator->fails()){
            return response()->json([
                'errors' => $validator->errors(),
            ], 422);
        };

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