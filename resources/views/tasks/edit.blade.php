@extends('layouts.task')
@section('title') Tasks @endsection
@section('username') <a href="{{route('notes.profile')}}">@ {{$username}}</a>@endsection

@section('content')
        <div class="container">
            <h2 class="weekText">Week Management </h2>
            <button id="scrollToTopBtn" class="scroll-to-top" title="Go to top">
               ↑ Save
           </button>
             <!-- create Btn -->
             <form action="{{route('tasks.updateWeek',$week)}}" method="POST">
                @csrf

             
     <button class="addNote" type="submit">
        <img src="{{asset('./images/note-medical.png')}}" alt="">
        <a>Save</a>
     </button>
       
        <!-- small -->
        <table class="small-screen">
            <tr ><th>Week #{{$week}}</th></tr>
         
                <tr class="fri"><th >Friday </th></tr>
             
                @foreach ($tasks->where('day','fri') as $task)
             <td>
                <input type="text" name="{{$task->id}}" class="fri" value="{{$task->title}}">
                
                <button type="button" id="{{$task->id}}" class="deleteBtn"><img src="{{asset('./images/trash (1).png')}}" alt=""></button> 
               
              
              </td></tr>

             @endforeach                
               <tr class="fri-tr "  id="fri-add-row"><td><button class="add" id="fri-add" type="button">+</button></td></tr>
               

            <tr class="sat"><th>Satureday </th></tr>
            @foreach ($tasks->where('day','sat') as $task)
            <tr class="sat-tr"><td><input type="text" name="{{$task->id}}" class="sat" value="{{$task->title}}" >        
           <button type="button" id="{{$task->id}}" class="deleteBtn"><img src="{{asset('./images/trash (1).png')}}" alt=""></button> 
            </td></tr>
            @endforeach
           <tr class="sat-tr"  id="sat-add-row"><td><button class="add" id="sat-add" type="button">+</button></td></tr>
           

            <tr class="sun"><th>Sunday </th></tr>
            @foreach ($tasks->where('day','sun') as $task)
            <tr class="sun-tr"><td><input type="text" name="{{$task->id}}" class="sun" value="{{$task->title}}" >
               <button type="button" id="{{$task->id}}" class="deleteBtn"><img src="{{asset('./images/trash (1).png')}}" alt=""></button> 
            </td></tr>
            @endforeach
           <tr class="sun-tr"  id="sun-add-row"><td><button class="add" id="sun-add" type="button">+</button></td></tr>
           
            <tr class="mon"><th>Monday</th></tr>
             @foreach ($tasks->where('day','mon') as $task)
                           <tr class="mon-tr"><td><input type="text" name="{{$task->id}}" class="mon" value="{{$task->title}}" >
                              <button type="button" id="{{$task->id}}" class="deleteBtn"><img src="{{asset('./images/trash (1).png')}}" alt=""></button> 
                           </td></tr>
 
            @endforeach
           <tr class="mon-tr"  id="mon-add-row"><td><button class="add" id="mon-add" type="button">+</button></td></tr>
           
            <tr class="tue"><th>Tuesday </th></tr>
            @foreach ($tasks->where('day','tue') as $task)
                            <tr class="tue-tr"><td><input type="text" name="{{$task->id}}" class="tue" value="{{$task->title}}" >
                              <button type="button" id="{{$task->id}}" class="deleteBtn"><img src="{{asset('./images/trash (1).png')}}" alt=""></button> 
                           </td></tr>

            @endforeach
           <tr class="tue-tr"  id="tue-add-row"><td><button id="tue-add" class="add" type="button">+</button></td></tr>
           
            <tr class="wed"><th>Wednessday</th></tr>
            @foreach ($tasks->where('day','wed') as $task)
            <tr class="wed-tr"><td><input type="text" name="{{$task->id}}" class="wed" value="{{$task->title}}" >
               <button type="button" id="{{$task->id}}" class="deleteBtn"><img src="{{asset('./images/trash (1).png')}}" alt=""></button> 

            </td></tr>

            @endforeach
           <tr class="wed-tr"  id="wed-add-row"><td><button id="wed-add" class="add" type="button">+</button></td></tr>
           
            <tr class="thr"><th>Thurthday </th></tr>
            @foreach ($tasks->where('day','thr') as $task)
                            <tr class="thr-tr"><td><input type="text" name="{{$task->id}}" class="thr" value="{{$task->title}}" >
               <button type="button" id="{{$task->id}}" class="deleteBtn"><img src="{{asset('./images/trash (1).png')}}" alt=""></button> 

                           </td></tr>

            @endforeach
           <tr class="thr-tr"  id="thr-add-row"><td><button id="thr-add" class="add" type="button">+</button></td></tr> 


        </table>
    </form>


        </div>
        
       
    <script src={{asset('./js/task-create.js')}}></script>
    <script>
      // Show or hide the button depending on scroll position
window.addEventListener('scroll', function() {
  var scrollToTopBtn = document.getElementById('scrollToTopBtn');
  if (window.scrollY > 300) { // Show the button when scrolled down 300px
      scrollToTopBtn.style.display = 'block';
  } else {
      scrollToTopBtn.style.display = 'none';
  }
});

// Scroll back to the top when the button is clicked
document.getElementById('scrollToTopBtn').addEventListener('click', function() {
  window.scrollTo({
      top: 0,
      behavior: 'smooth' // Smooth scroll to the top
  });
});

  </script>
@endsection