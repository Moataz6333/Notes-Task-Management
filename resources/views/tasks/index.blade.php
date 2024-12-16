@extends('layouts.task')
@section('title') Tasks @endsection
@section('username') <a href="{{route('notes.profile')}}">@ {{$username}}</a>@endsection

@section('content')
        <div class="container">
            <h2 class="weekText">Week Management </h2>

            <button class="addNote" >
                <img src="{{asset('./images/note-medical.png')}}" alt="">
                <a href="{{route('tasks.create')}}">Create-New-Plan</a>
             </button>
             <button class="addNote" >
               <img src="{{asset('./images/note-medical.png')}}" alt="">
               <a href="{{route('tasks.index',$week)}}">Current-Week</a>
            </button>
             @foreach ($allweeks as $week)
                  <button class="addNote" >
                <img src="{{asset('./images/note-medical.png')}}" alt="">
                <a href="{{route('tasks.index',$week->week)}}">Week #{{$week->week}}</a>
             </button>
             @endforeach
            





@endsection