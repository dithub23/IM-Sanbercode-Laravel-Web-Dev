<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CategoriesController extends Controller
{
        public function create(){
            return view('categories.create');
        }

        public function store(Request $request){
        // Validation
        $request->validate([
        'name' => 'required|min:3',
        'description' => 'required',
        ], [
            'required' => 'inputan :attribute wajib diisi',
            'min' => 'inputan minimal :min karakter'
        ]);
        //created at dan updated at (tanggal)
        $now = Carbon::now();

        // Insert Data
        DB::table('categories')->insert([
        'name' => $request->input('name'),
        'description' => $request->input('description'),
        'created_at' => $now,
        'updated_at' => $now,
        ]);

        // Redirect
        return redirect('/categories')->with('success', 'Categories created successfully!');
        }

        public function index()
        {
            $categories = DB::table('categories')->get();

             return view('categories.tampil', ['categories' => $categories]);
        }

        public function show($id)
        {
            $categories = DB::table('categories')->find($id);
            return view('categories.detail', ['categories' => $categories]);
        }

        public function edit($id)
        {
            $categories = DB::table('categories')->find($id);
            return view('categories.edit', ['categories' => $categories]);
        }

        public function update($id, Request $request)
        {
        // Validation
        $request->validate([
        'name' => 'required|min:3',
        'description' => 'required',
        ], [
            'required' => 'inputan :attribute wajib diisi',
            'min' => 'inputan minimal :min karakter'
        ]);

        // Update
        DB::table('categories')
            ->where('id', $id)
            ->update(
                [
                    'name' => $request->input('name'),
                    'description' => $request->input('description'),
                ]);

        // Redirect
        return redirect('/categories')->with('success', 'Categories updated successfully!');
        }

        // Destroy
        public function destroy($id)
        {
            DB::table('categories')->where('id', $id)->delete();
            return redirect('/categories')->with('success', 'Categories delete successfully!');
        }

} 
 