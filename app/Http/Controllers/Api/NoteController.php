<?php

namespace App\Http\Controllers\Api;
use App\Models\Note;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    public function index(){
        $notes = Note::get();
        return response($notes,200,['Done']);
    }
    public function create(Request $request){
        dd($request);
        Note::create([
            'title'=>$request->title,
            'body'=>$request->description,
            'deadLine'=>$request->date." ".$request->time,
            'class'=>$request->class,
            'user_id'=>$request->user_id,
            'status'=>$request->status,
            
           ]);
    
           return respose('done',201,['Done']);
    }
}
