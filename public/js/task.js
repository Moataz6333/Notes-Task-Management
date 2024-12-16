// firday td
let fri_td=document.querySelectorAll('.fri');
//friday th
let firday =document.querySelector('.fri th');
firday.addEventListener('click',function(){
    let fri_tr=document.querySelectorAll('.fri-tr');

    if(!firday.classList.contains('active')){
        firday.classList.add('active');
        fri_tr.forEach((tr)=>tr.style.display = "block");

    }else{
        firday.classList.remove('active');

        fri_tr.forEach((tr)=>tr.style.display = "none");

    }

});


//add fri btn
let addFriBtn =document.getElementById('fri-add');
let firDiv=document.querySelector('fri');
let fri_index=4;
let sat_index=4;
let sun_index=4;
let mon_index=4;
let tue_index=4;
let wed_index=4;
let thr_index=4;


//help function 
 pre_days=['fri','sat','sun','mon','tue','wed','thr'];
// function exp(exe){
//     str =' ';
//     for(let i=1 ; i<exe.length ;i++){
//         str += `
//          <tr class="${exe[i]}-tr"><td><input type="checkbox" class="${exe[i]}"><input type="text"  class="${exe[i]}"></td></tr>
//                 <tr class="${exe[i]}-tr"><td><input type="checkbox" class="${exe[i]}"><input type="text"  class="${exe[i]}"></td></tr>
//                 <tr class="${exe[i]}-tr"><td><input type="checkbox" class="${exe[i]}"><input type="text"  class="${exe[i]}"></td></tr>
//                 <tr class="${exe[i]}-tr"><td><input type="checkbox" class="${exe[i]}"><input type="text"  class="${exe[i]}"></td></tr>
//                 <tr class="${exe[i]}-tr"><td><input type="checkbox" class="${exe[i]}"><input type="text"  class="${exe[i]}"></td></tr>
//                <tr class="${exe[i]}-tr"  id="${exe[i]}-add-row"><td><button id="${exe[i]}-add">+</button></td></tr>
               

//         `;
        
//     }
//     console.log(str);
// }

function allDays(exp){
    str=" ";
    for(let i=1 ;i<exp.length ;i++){
        str += `
        let ${exp[i]}_td=document.querySelectorAll('.${exp[i]}');
//${exp[i]}day th
let ${exp[i]}day =document.querySelector('.${exp[i]} th');
${exp[i]}day.addEventListener('click',function(){
    let ${exp[i]}_tr=document.querySelectorAll('.${exp[i]}-tr');

    if(!${exp[i]}day.classList.contains('active')){
        ${exp[i]}day.classList.add('active');
        ${exp[i]}_tr.forEach((tr)=>tr.style.display = "block");

    }else{
        ${exp[i]}day.classList.remove('active');

        ${exp[i]}_tr.forEach((tr)=>tr.style.display = "none");

    }

});


//add ${exp[i]} btn
let add${exp[i]}Btn =document.getElementById('${exp[i]}-add');

add${exp[i]}Btn.addEventListener('click',function(){
    let newRow = document.createElement('tr');
    newRow.style.display='block';
    newRow.className = '${exp[i]}-tr';
    newRow.innerHTML = '<td><input type="checkbox" class="${exp[i]}"><input type="text" class="${exp[i]}"></td>';

    // Get the reference to the button row
    let buttonRow = document.getElementById('${exp[i]}-add-row');

    // Insert the new row before the button row
    buttonRow.parentNode.insertBefore(newRow, buttonRow);
    
});
        `;
    }
    console.log(str);
}

// allDays(pre_days);
let sat_td=document.querySelectorAll('.sat');
//satday th
let satday =document.querySelector('.sat th');
satday.addEventListener('click',function(){
    let sat_tr=document.querySelectorAll('.sat-tr');

    if(!satday.classList.contains('active')){
        satday.classList.add('active');
        sat_tr.forEach((tr)=>tr.style.display = "block");

    }else{
        satday.classList.remove('active');

        sat_tr.forEach((tr)=>tr.style.display = "none");

    }

});



        
        let sun_td=document.querySelectorAll('.sun');
//sunday th
let sunday =document.querySelector('.sun th');
sunday.addEventListener('click',function(){
    let sun_tr=document.querySelectorAll('.sun-tr');

    if(!sunday.classList.contains('active')){
        sunday.classList.add('active');
        sun_tr.forEach((tr)=>tr.style.display = "block");

    }else{
        sunday.classList.remove('active');

        sun_tr.forEach((tr)=>tr.style.display = "none");

    }

});



        
        let mon_td=document.querySelectorAll('.mon');
//monday th
let monday =document.querySelector('.mon th');
monday.addEventListener('click',function(){
    let mon_tr=document.querySelectorAll('.mon-tr');

    if(!monday.classList.contains('active')){
        monday.classList.add('active');
        mon_tr.forEach((tr)=>tr.style.display = "block");

    }else{
        monday.classList.remove('active');

        mon_tr.forEach((tr)=>tr.style.display = "none");

    }

});



        
        let tue_td=document.querySelectorAll('.tue');
//tueday th
let tueday =document.querySelector('.tue th');
tueday.addEventListener('click',function(){
    let tue_tr=document.querySelectorAll('.tue-tr');

    if(!tueday.classList.contains('active')){
        tueday.classList.add('active');
        tue_tr.forEach((tr)=>tr.style.display = "block");

    }else{
        tueday.classList.remove('active');

        tue_tr.forEach((tr)=>tr.style.display = "none");

    }

});


        
        let wed_td=document.querySelectorAll('.wed');
//wedday th
let wedday =document.querySelector('.wed th');
wedday.addEventListener('click',function(){
    let wed_tr=document.querySelectorAll('.wed-tr');

    if(!wedday.classList.contains('active')){
        wedday.classList.add('active');
        wed_tr.forEach((tr)=>tr.style.display = "block");

    }else{
        wedday.classList.remove('active');

        wed_tr.forEach((tr)=>tr.style.display = "none");

    }

});


  
        let thr_td=document.querySelectorAll('.thr');
//thrday th
let thrday =document.querySelector('.thr th');
thrday.addEventListener('click',function(){
    let thr_tr=document.querySelectorAll('.thr-tr');

    if(!thrday.classList.contains('active')){
        thrday.classList.add('active');
        thr_tr.forEach((tr)=>tr.style.display = "block");

    }else{
        thrday.classList.remove('active');

        thr_tr.forEach((tr)=>tr.style.display = "none");

    }

});


