<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lesson;
use App\User;

class LessonsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lessons = Lesson::all();
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
      $user = new User();
      $user->email = '1989alpan@gmail.com';
      $user->name = 'Quicks';
      $user->password = 123456;
      $user->save();
      $lesson = new Lesson($request->all());
      $lesson->user_id = $user->id;
      $lesson->save();
      return redirect()->route('lessons.show', $lesson->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $lesson = Lesson::find($id);
      return view('lessons.show')
        ->with('lesson', $lesson);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($lesson_date)
    {
      $lesson = Lesson::find($lesson_date);
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
      $lesson = Lesson::find($id);
      $lesson->update($request->all());
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
    public function users()
    {
      $users = User::all();
      return view('lessons.users')
        ->with('users', $users);
    }
}
