
let friCheckBoxs = getCheckBoxes('fri');


for(let i=0;i<getAll('fri');i++){

    getCheckBoxes('fri')[i].addEventListener('click',function(){
        setGrade('fri');
   
    });
   
}
function getAll(exp){
    return document.querySelectorAll(`input[type="checkbox"].${exp}`).length;
}
function getGrade(exp){
    return Array.from(getCheckBoxes(exp)).filter(ele => ele.checked).length;
}
function getCheckBoxes(exp){
    return document.querySelectorAll(`input[type="checkbox"].${exp}`);
}

function setGrade(exp){
    let p=document.querySelector(`.${exp}-grade`);
    p.textContent=`${getAll(exp)}/${getGrade(exp)}`;
    // console.log(p);
    // console.log(`${getAll(exp)}/${getGrade(exp)}`);
}



let satCheckBoxs = getCheckBoxes('sat');


for(let i=0;i<getAll('sat');i++){

    getCheckBoxes('sat')[i].addEventListener('click',function(){
        setGrade('sat');
   
    });
   
}
        
        let sunCheckBoxs = getCheckBoxes('sun');


for(let i=0;i<getAll('sun');i++){

    getCheckBoxes('sun')[i].addEventListener('click',function(){
        setGrade('sun');
   
    });
   
}
        
        let monCheckBoxs = getCheckBoxes('mon');


for(let i=0;i<getAll('mon');i++){

    getCheckBoxes('mon')[i].addEventListener('click',function(){
        setGrade('mon');
   
    });
   
}
        
        let tueCheckBoxs = getCheckBoxes('tue');


for(let i=0;i<getAll('tue');i++){

    getCheckBoxes('tue')[i].addEventListener('click',function(){
        setGrade('tue');
   
    });
   
}
        
        let wedCheckBoxs = getCheckBoxes('wed');

for(let i=0;i<getAll('wed');i++){

    getCheckBoxes('wed')[i].addEventListener('click',function(){
        setGrade('wed');
   
    });
   
}
        
        let thrCheckBoxs = getCheckBoxes('thr');


for(let i=0;i<getAll('thr');i++){

    getCheckBoxes('thr')[i].addEventListener('click',function(){
        setGrade('thr');
   
    });
   
}
      
let pre_days=['fri','sat','sun','mon','tue','wed','thr'];
pre_days.forEach((day)=>setGrade(day));

function getTotal(){
    let total=0;
    pre_days.forEach((day)=>total+=getAll(day));
   let grade=0;
   pre_days.forEach((day)=>grade+=getGrade(day));

   let p =document.querySelector('.total');
   p.textContent=`${grade}/${total}`;

    let percentage =  Math.ceil((grade / total) * 100);
    let spanGrade =document.querySelector('.result .content h3 span');
    spanGrade.textContent=`${percentage}%`;
    
    let bg =document.querySelector('.percentage');
    bg.textContent=`${percentage}%`;
    return percentage;
}
getTotal();
const days = [sunday, monday, tueday, wedday, thrday, firday, satday];
const today = new Date();
const currentDayName = days[today.getDay()];
currentDayName.click();


//grade
 
function setBackground(percentage){
    let div = document.querySelector('.circle');
    div.style.background=`conic-gradient(#00aaff 0% ${percentage}%, #ddd ${percentage}% 100%)`;
}

// console.log(getGrade());

function Grade(percentage) {
    let grade='';
    
     switch(true){
         case (percentage == 100):
             grade ="A+";
             break;
         case (percentage < 100 && percentage >= 90):
             grade ="A";
             break;
         case (percentage <90 && percentage >=85):
             grade="A-";
             break;
         case (percentage < 85 && percentage >= 75):
             grade ="B";
             break;
         case (percentage <75 && percentage>= 60 ):
             grade ="C";
             break;
         case (percentage <60 && percentage>= 50 ):
             grade ="C-";
             break;
         case (percentage <50):
             grade ="F";
             break;
             default:
             grade ="F";
             break;




     }
    //  console.log(grade);
    let span =document.querySelector('.result .content h3.grade span');
    span.textContent=grade;
    if(grade == "C" || grade =="C-" || grade =="F"){
        span.style.color="red";
    }else{
        span.style.color="rgb(0, 232, 35)";

    }
  }
  setBackground(getTotal());
  Grade(getTotal());