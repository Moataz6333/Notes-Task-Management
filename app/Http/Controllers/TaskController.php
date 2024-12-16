<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
date_default_timezone_set("Africa/cairo");
 function getCurrentWeek(){
    $currentDate = new \DateTime();
    $yearStart = new \DateTime($currentDate->format('Y-01-01'));

    // Adjust the start of the year to the first Friday
    if ($yearStart->format('N') != 5) {
        $yearStart->modify('first Friday of January');
    }

    // Adjust the current date to the previous or current Friday
    if ($currentDate->format('N') < 5) {
        $currentDate->modify('last Friday');
    }

    // Calculate the difference in days and divide by 7 to get the week number
    $daysDifference = $yearStart->diff($currentDate)->days;
    $weekNumber = floor($daysDifference / 7) + 1;

    return $weekNumber;
}
function resetTasks(){
      //first reset the status
      $records=Task::where('user_id',auth()->user()->id)->where('week',getCurrentWeek())->get();
        
      foreach($records as $record){
        $record->status = ' ';
        $record->save();
      }
}
class TaskController extends Controller
{
    
   
    public function index($week){
       $tasks= Task::where('user_id',auth()->user()->id)
       ->where('week',$week)->get();
      //    dd($tasks);
        // dd($tasks->where('day','fri'));
        $indeces =['f'=>0,'s'=>0,'n'=>0,'m'=>0,'t'=>0,'w'=>0,'th'=>0];
        $isEnded=false;
        if($week != getCurrentWeek()){$isEnded=true;}
       
        return view('tasks.task',['username'=>auth()->user()->name , 'tasks'=>$tasks , 'index'=>$indeces ,'week'=>$week ,'isEnded'=>$isEnded]);
    }
    public function save(Request $request){
        
        $names=array_keys($request->all());
        $tasks=$request->all();
       
     // Get the week number from the adjusted date
     $weekNumber = getCurrentWeek();

       
       for($i=1;$i<count($tasks);$i++){
            if($tasks[$names[$i]] !== null){
                 
                    Task::create([
                        'title'=>$tasks[$names[$i]],
                        'day'=>str_split($names[$i],3)[0],
                        'status'=>"",
                        'week'=>$weekNumber,
                        'user_id'=>auth()->user()->id,
                        'isEnded'=>false,
                    ]);
            }
        
        }
       return to_route('tasks.week');
        
    }     

    public function create(){
        return view('tasks.create',['username'=>auth()->user()->name]);
    }
    public function updateTasks(Request $request,$week){
        // dd($request->all());
        resetTasks();
        $records=Task::where('user_id',auth()->user()->id)->where('week',$week);
      

        $names=array_keys($request->all());
        $tasks = $request->all();
        $checkboxes=[];
        foreach($names as $name){
            if(strpos($name,'checkbox') !== false){
                array_push($checkboxes,$name);
            }
        }
   
        $titles=[];
        $prefix=[];
       foreach($checkboxes as $checkbox){
        $str=str_split($checkbox,3)[0]. '-inp'.str_split($checkbox,1)[count(str_split($checkbox))-1];
      
     //   $titles[str_split($checkbox,3)[0]]= $tasks[$str];
        array_push($prefix,str_split($checkbox,3)[0]);
        array_push($titles,$tasks[$str]);
       }
       
     
    
       for($i=0;$i<count($titles);$i++){
        $task=Task::where('user_id',auth()->user()->id)
        ->where('week',$week)
        ->where('day',$prefix[$i])
        ->where('title',$titles[$i]);
           
        $task->update([
            'status'=>'checked'
        ]);
       }
       return to_route('tasks.index',$week);
    }

    public function week(){
        $week=getCurrentWeek();
        $allWeeks=Task::select('week')->distinct()->get()->reverse();
        

        return view('tasks.index',['username'=>auth()->user()->name,'week'=>$week,'allweeks'=>$allWeeks]);
    }
    public function edit($week){
        $tasks=Task::where('user_id',auth()->user()->id)->where('week',$week)->get();
        $indeces =['f'=>0,'s'=>0,'n'=>0,'m'=>0,'t'=>0,'w'=>0,'th'=>0];
        return view('tasks.edit',['username'=>auth()->user()->name,'week'=>$week,'index'=>$indeces,'tasks'=>$tasks]);
    }
    public function updateWeek(Request $request,$week){
      
        [$keys,$values] =Arr::divide($request->all());
        // dd($keys,$values); 
        
                
        $tasks =Task::where('user_id',auth()->user()->id)
        ->where('week',$week);

     
        for($i=1;$i<count($keys);$i++){
            if(is_numeric($keys[$i])){
                //update
                $task = Task::find($keys[$i]);
                $task->update([
                    'title'=>$values[$i],
                ]);

            }
            elseif(str_split($keys[$i],3)[0] == 'del'){
                //delete
                $task = Task::find(+filter_var($keys[$i], FILTER_SANITIZE_NUMBER_INT));
                $task->delete();

            }else{
                //insert
                if($values[$i] !== null){
                    Task::create([
                        'title'=>$values[$i],
                        'status'=>'',
                        'week'=>$week,
                        'day'=>str_split($keys[$i],3)[0],
                        'user_id'=> auth()->user()->id
                    ]);
                }

            }
        }


        return to_route('tasks.index',$week);
    }
   

    
}
