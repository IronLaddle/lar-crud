<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogisticController extends Controller
{
    public function index()
    {
        $data_logistic = \App\Logistic::all();
        return view('logistic.index',['data_logistic' => $data_logistic]);
        //return view('logistic');
    }

    public function create(Request $request)
    {
        \App\Logistic::create($request->all());
        return redirect('/logistic')->with('success', 'Data Successfully Added');
    }

    public function edit($id)
    {
        $logistic = \App\Logistic::find($id);
        return view('logistic/edit',['logistic'=> $logistic]);
    }

    public function update(Request $request, $id)
    {
        $logistic = \App\Logistic::find($id);
        $logistic -> update($request->all());
        return redirect('logistic')->with('success', 'Data Successfully Updated');
    }

    public function delete($id)
    {
        $logistic = \App\Logistic::find($id);
        $logistic -> delete($logistic);
        return redirect('logistic')->with('success', 'Data Successfully Deleted');
    }
}
