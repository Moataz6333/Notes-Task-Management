@extends('layouts.task')
@section('title') Tasks @endsection
@section('username') <a href="{{route('notes.profile')}}">@ {{$username}}</a>@endsection

@section('content')
        <div class="container">
            <h2 class="weekText">Week Management </h2>
             <!-- create Btn -->
             <form action="{{route('tasks.save')}}" method="POST">
                @csrf

             
     <button class="addNote" type="submit">
        <img src="{{asset('./images/note-medical.png')}}" alt="">
        <a>Save</a>
     </button>
       
        <!-- small -->
        <table class="small-screen">
            <tr ><th>Week #75</th></tr>
         
                <tr class="fri"><th >Friday </th></tr>
             
                <tr class="fri-tr"><td><input type="text" name="fri-inp1" class="fri"></td></tr>
                <tr class="fri-tr"><td><input type="text" name="fri-inp2" class="fri"></td></tr>
                <tr class="fri-tr"><td><input type="text" name="fri-inp3" class="fri"></td></tr>
        
               <tr class="fri-tr"  id="fri-add-row"><td><button id="fri-add" class="add" type="button">+</button></td></tr>
               

            <tr class="sat"><th>Satureday </th></tr>
            <tr class="sat-tr"><td><input type="text" name="sat-inp1" class="sat"></td></tr>
            <tr class="sat-tr"><td><input type="text" name="sat-inp2" class="sat"></td></tr>
            <tr class="sat-tr"><td><input type="text" name="sat-inp3" class="sat"></td></tr>
    
           <tr class="sat-tr"  id="sat-add-row"><td><button id="sat-add"  class="add" type="button">+</button></td></tr>
           

            <tr class="sun"><th>Sunday </th></tr>
            <tr class="sun-tr"><td><input type="text" name="sun-inp1" class="sun"></td></tr>
            <tr class="sun-tr"><td><input type="text" name="sun-inp2" class="sun"></td></tr>
            <tr class="sun-tr"><td><input type="text" name="sun-inp3" class="sun"></td></tr>
    
           <tr class="sun-tr"  id="sun-add-row"><td><button id="sun-add" class="add" type="button">+</button></td></tr>
           
            <tr class="mon"><th>Monday</th></tr>
            <tr class="mon-tr"><td><input type="text" name="mon-inp1" class="mon"></td></tr>
            <tr class="mon-tr"><td><input type="text" name="mon-inp2" class="mon"></td></tr>
            <tr class="mon-tr"><td><input type="text" name="mon-inp3" class="mon"></td></tr>
    
           <tr class="mon-tr"  id="mon-add-row"><td><button id="mon-add"  class="add" type="button">+</button></td></tr>
           
            <tr class="tue"><th>Tuesday </th></tr>
            <tr class="tue-tr"><td><input type="text" name="tue-inp1" class="tue"></td></tr>
        <tr class="tue-tr"><td><input type="text" name="tue-inp2" class="tue"></td></tr>
        <tr class="tue-tr"><td><input type="text" name="tue-inp3" class="tue"></td></tr>

           <tr class="tue-tr"  id="tue-add-row"><td><button id="tue-add" class="add" type="button">+</button></td></tr>
           
            <tr class="wed"><th>Wednessday</th></tr>
            <tr class="wed-tr"><td><input type="text" name="wed-inp1" class="wed"></td></tr>
            <tr class="wed-tr"><td><input type="text" name="wed-inp2" class="wed"></td></tr>
            <tr class="wed-tr"><td><input type="text" name="wed-inp3" class="wed"></td></tr>
    
           <tr class="wed-tr"  id="wed-add-row"><td><button id="wed-add" class="add" type="button">+</button></td></tr>
           
            <tr class="thr"><th>Thurthday </th></tr>
            <tr class="thr-tr"><td><input type="text" name="thr-inp1" class="thr"></td></tr>
            <tr class="thr-tr"><td><input type="text" name="thr-inp2" class="thr"></td></tr>
            <tr class="thr-tr"><td><input type="text" name="thr-inp3" class="thr"></td></tr>
    
           <tr class="thr-tr"  id="thr-add-row"><td><button id="thr-add" class="add" type="button">+</button></td></tr> 


        </table>
    </form>


        </div>
        
       
    <script src="{{asset('./js/task-create.js')}}"></script>

@endsection