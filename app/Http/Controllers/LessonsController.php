<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lesson;
use App\User;
use Auth;
use Storage;
use File;
class LessonsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $lessons = Auth::user()->lessons;
      return view('lessons.index')
        ->with('lessons',$lessons);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function create()
     {
       $lesson = new Lesson();
       return view('lessons.create', ['lesson' => $lesson]);
     }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->validate($request, [
        'lesson_date' => 'required',
        'description' => 'required',
      ]);
      $lesson = new Lesson($request->all());
      $lesson->img = Storage::put('public/images', $request->img);
      $lesson->user_id = Auth::user()->id;
      $lesson->save();
      return redirect()->route('lessons.show', $lesson->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, Request $request)
    {
      $lesson = Auth::user()->lessons->find($id);
      return view('lessons.show')
        ->with('lesson', $lesson);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $lesson = Auth::user()->lessons->find($id);
      return view('lessons.edit')->with('lesson', $lesson);
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
      // $this->validate($request, [
      //   'lesson_date' => 'required',
      //   'description' => 'required',
      // ]);\
      Auth::user()->lessons()->where('id', $id)->update(array( 'description'=> 'test' ));
      $lesson = Auth::user()->lessons->find($id);

      // dd($request->file('image')->store('avatars'));

      // if( $request->hasFile('image') ) {
      //   $file = $request->file('image');
      //   $folderPath = 'test';
      //   $filename = $file->getClientOriginalName();
      //   $file->move($folderPath, $filename);
      //   $lesson->img = $folderPath.'/'.$filename;
      // }
      // $lesson->img = Storage::put('public/images', $request->file('img'));
      // $lesson->update($request->all());
      return redirect()->route('lessons.show', $lesson->id);

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
