@extends('layouts.task')
@section('title') Tasks @endsection
@section('username') <a href="{{route('notes.profile')}}">@ {{$username}}</a>@endsection

@section('content')
        <div class="container">
            <button id="scrollToTopBtn" class="scroll-to-top" title="Go to top">
                ↑ Save
            </button>
            @if (count($tasks)==0)
            <h2 class="weekText">There is no plan yet!</h2>
                
            <div class="buttons">
                  <button class="addNote">
        <img src="{{asset('./images/note-medical.png')}}" alt="">
            <a href="{{route('tasks.create')}}">Create-Plan</a>
           </button>
                  <button class="addNote">
       
            <a href="{{route('tasks.week')}}">Back</a>
           </button>
            </div>
         
                
            @else
                <h2 class="weekText">Week Management </h2>
         
                @if ($isEnded)
                    <div class="isEnded">
                        <div class="result">
              
                            <div class="content">
                               <h2>You did great this week!</h2>
                            <h3>You did <span>90%</span> of tasks you want</h3>
                            <h3 class="grade">Your Grade is   :  <span class="grade">A</span></h3>
                           
                            
                            
                          </div>
                          <div class="circle">
                            <div class="percentage">90%</div>
                          </div>
                        </div>

                    </div>
                @endif
                
                @if(!$isEnded)
             <!-- create Btn -->
             <form action="{{route('tasks.update',$week)}}" method="POST">
                @csrf

             <div class="buttons">
                <button class="addNote" type="submit" >
        <img src="{{asset('./images/note-medical.png')}}" alt="">
        <a>Save</a>
     </button>  
          <button type="button" class="addNote"><a href="{{route('tasks.edit',$week)}}">Edit</a></button>

             </div>
     @endif
       
        <!-- small -->
        <table class="small-screen">
            <tr ><th>Week #{{$week}} <br><p class="total"></p></th></tr>
                <tr class="fri"><th >Friday <p class="fri-grade"></p></th></tr>
             @foreach ($tasks->where('day','fri') as $task)
             
             <tr class="fri-tr"><td><input type="checkbox" class="fri" name="fri-checkbox{{$index['f']}}" {{$task->status}}><input type="text" name="fri-inp{{$index['f']++}}" class="fri" value="{{$task->title}}" readonly></td></tr>

             @endforeach
        
               

            <tr class="sat"><th>Satureday <p class="sat-grade"></p></th></tr>
            @foreach ($tasks->where('day','sat') as $task)
             
            <tr class="sat-tr"><td><input type="checkbox" class="sat" name="sat-checkbox{{$index['s']}}" {{$task->status}}><input type="text" name="sat-inp{{$index['s']++}}" class="sat" value="{{$task->title}}" readonly></td></tr>

            @endforeach
       

            <tr class="sun"><th>Sunday <p class="sun-grade"></p></th></tr>

            @foreach ($tasks->where('day','sun') as $task)
            <tr class="sun-tr"><td><input type="checkbox" class="sun" name="sun-checkbox{{$index['n']}}" {{$task->status}}><input type="text" name="sun-inp{{$index['n']++}}" class="sun" value="{{$task->title}}" readonly></td></tr>
            @endforeach
           
            <tr class="mon"><th>Monday <p class="mon-grade"></p></th></tr>
            @foreach ($tasks->where('day','mon') as $task)
                           <tr class="mon-tr"><td><input type="checkbox" class="mon" name="mon-checkbox{{$index['m']}}" {{$task->status}}><input type="text" name="mon-inp{{$index['m']++}}" class="mon" value="{{$task->title}}" readonly></td></tr>
 
            @endforeach
           
            <tr class="tue"><th>Tuesday <p class="tue-grade"></p></th></tr>
            @foreach ($tasks->where('day','tue') as $task)
                            <tr class="tue-tr"><td><input type="checkbox" class="tue" name="tue-checkbox{{$index['t']}}" {{$task->status}}><input type="text" name="tue-inp{{$index['t']++}}" class="tue" value="{{$task->title}}" readonly></td></tr>

            @endforeach
       
            <tr class="wed"><th>Wednessday <p class="wed-grade"></p></th></tr>
            @foreach ($tasks->where('day','wed') as $task)
                            <tr class="wed-tr"><td><input type="checkbox" class="wed" name="wed-checkbox{{$index['w']}}" {{$task->status}}><input type="text" name="wed-inp{{$index['w']++}}" class="wed" value="{{$task->title}}" readonly></td></tr>

            @endforeach
            
            <tr class="thr"><th>Thurthday <p class="thr-grade"></p></th></tr>
            @foreach ($tasks->where('day','thr') as $task)
                            <tr class="thr-tr"><td><input type="checkbox" class="thr" name="thr-checkbox{{$index['th']}}" {{$task->status}}><input type="text" name="thr-inp{{$index['th']++}}" class="thr" value="{{$task->title}}" readonly></td></tr>

            @endforeach
          

        </table>
    </form>

    @endif
        </div>
        
       
    <script src={{asset('./js/task.js')}}></script>
    <script src={{asset('./js/grad.js')}}></script>
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