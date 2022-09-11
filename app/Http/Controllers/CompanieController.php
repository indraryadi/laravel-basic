<?php

namespace App\Http\Controllers;

use App\DataTables\CompanieDataTable;
use App\Models\Companie;
use Illuminate\Http\Request;
use App\Http\Requests\CompanieRequest;
use App\Http\Requests\StoreCompanieRequest;
use App\Http\Requests\UpdateCompanieRequest;

class CompanieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(CompanieDataTable $dataTable)
    {
        // // $data=Companie::all();
        // $data=Companie::paginate(5);
        // $no=0;
        // // return view('companie.index',compact('data'));
        // return view('companie.index',compact('data'))
        //     ->with('i', (request()->input('page',1) - 1) * 5);
        return $dataTable->render('companie.index');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('companie.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCompanieRequest $request)
    {
        $data=$request->validated();
        $savePath='images/';
        $logoName=$data['logo']->getClientOriginalName();
        $data['logo']->move($savePath,$logoName);
        $data['logo']=$logoName;
        Companie::create($data);

        return redirect()->route('companie.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Companie  $companie
     * @return \Illuminate\Http\Response
     */
    public function show(Companie $companie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Companie  $companie
     * @return \Illuminate\Http\Response
     */
    public function edit(Companie $companie)
    {
        return view('companie.edit',compact('companie'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Companie  $companie
     * @return \Illuminate\Http\Response
     */
    // public function update(UpdateCompanieRequest $request, Companie $companie)
    public function update(UpdateCompanieRequest $request, Companie $companie)
    {
        // dd($request->all());
        $updateData=$request->validated();
        $savePath='images';
        // dd($updateData['logo']); 
        if (array_key_exists('logo',$updateData)) {
            $logoName=$updateData['logo']->getClientOriginalName(); 
            $updateData['logo']->move($savePath,$logoName);
            $updateData['logo']=$logoName;
        }else{
            unset($updateData['logo']);
        }
        $companie->update($updateData);
        return redirect()->route('companie.index');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Companie  $companie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Companie $companie)
    {
        $companie->delete();
        return redirect()->route('companie.index');
    }
}
