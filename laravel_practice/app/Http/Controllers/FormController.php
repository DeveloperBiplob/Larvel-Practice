<?php

namespace App\Http\Controllers;

use App\Http\Requests\DefaultRequest;
use App\Models\Form;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rules\Unique;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $forms = Form::latest()->get();
        return view('Forms.index', compact('forms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Forms.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DefaultRequest $request)
    {

       $addNew = Form::create([
           'name' => $request->name,
           'email' => $request->email,
           'image' => $this->UploadFile($request->file('image'), 'Forms')
       ]);

        if($addNew){
            return redirect()->route('form.index');
        }

        // return dd($request->file('image'));
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
    public function edit(Form $form)
    {
        return view('Forms.edit', compact('form'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Form $form)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:50', 'min:2', "unique:forms,name,{$form->id}"],
            'email' => ['required', 'email', 'max:50', 'min:2', "unique:forms,email,{$form->id}"],
            'image' => ['file', 'min:2'],
        ]);

        if($request->has('image')){
            $this->deleteFile($form->image);

            $form->update([
                'name' => $request->name,
                'email' => $request->email,
                'image' => $this->UploadFile($request->file('image'), 'Forms')
            ]);
        }else{
            $form->update([
                'name' => $request->name,
                'email' => $request->email
            ]);
        }

        return redirect()->route('form.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Form $form)
    {
       $this->deleteFile($form->image);
       $form->delete();
       return back();
    }

}
