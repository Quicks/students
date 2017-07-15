<?php
class LessonCreator
{
  public static function make($args){
    $lesson = new Lesson(args);

    $lesson->img = Storage::putFile('public/images', $request->file('image'));
    $lesson->user_id = Auth::user()->id;
    return $lesson;
  }

}
