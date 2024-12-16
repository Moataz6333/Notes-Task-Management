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
addFriBtn.addEventListener('click',function(){
    let newRow = document.createElement('tr');
    newRow.style.display='block';
    newRow.className = 'fri-tr';
    newRow.innerHTML = `<td><input type="text" name="fri-inp${fri_index++}" class="fri"></td>`;

    // Get the reference to the button row
    let buttonRow = document.getElementById('fri-add-row');

    // Insert the new row before the button row
    buttonRow.parentNode.insertBefore(newRow, buttonRow);
    
});

//help function 
let pre_days=['fri','sat','sun','mon','tue','wed','thr'];




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


//add sat btn
let addsatBtn =document.getElementById('sat-add');

addsatBtn.addEventListener('click',function(){
    let newRow = document.createElement('tr');
    newRow.style.display='block';
    newRow.className = 'sat-tr';
    newRow.innerHTML = `<td><input type="text" name="sat-inp${sat_index++}" class="sat"></td>`;

    // Get the reference to the button row
    let buttonRow = document.getElementById('sat-add-row');

    // Insert the new row before the button row
    buttonRow.parentNode.insertBefore(newRow, buttonRow);
    
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


//add sun btn
let addsunBtn =document.getElementById('sun-add');

addsunBtn.addEventListener('click',function(){
    let newRow = document.createElement('tr');
    newRow.style.display='block';
    newRow.className = 'sun-tr';
    newRow.innerHTML = `<td><input type="text" name="sun-inp${sun_index++}" class="sun"></td>`;

    // Get the reference to the button row
    let buttonRow = document.getElementById('sun-add-row');

    // Insert the new row before the button row
    buttonRow.parentNode.insertBefore(newRow, buttonRow);
    
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


//add mon btn
let addmonBtn =document.getElementById('mon-add');

addmonBtn.addEventListener('click',function(){
    let newRow = document.createElement('tr');
    newRow.style.display='block';
    newRow.className = 'mon-tr';
    newRow.innerHTML = `<td><input type="text" name="mon-inp${mon_index++}" class="mon"></td>`;

    // Get the reference to the button row
    let buttonRow = document.getElementById('mon-add-row');

    // Insert the new row before the button row
    buttonRow.parentNode.insertBefore(newRow, buttonRow);
    
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


//add tue btn
let addtueBtn =document.getElementById('tue-add');

addtueBtn.addEventListener('click',function(){
    let newRow = document.createElement('tr');
    newRow.style.display='block';
    newRow.className = 'tue-tr';
    newRow.innerHTML = `<td><input type="text" name="tue-inp${tue_index++}" class="tue"></td>`;

    // Get the reference to the button row
    let buttonRow = document.getElementById('tue-add-row');

    // Insert the new row before the button row
    buttonRow.parentNode.insertBefore(newRow, buttonRow);
    
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


//add wed btn
let addwedBtn =document.getElementById('wed-add');

addwedBtn.addEventListener('click',function(){
    let newRow = document.createElement('tr');
    newRow.style.display='block';
    newRow.className = 'wed-tr';
    newRow.innerHTML = `<td><input type="text" name="wed-inp${wed_index++}" class="wed"></td>`;

    // Get the reference to the button row
    let buttonRow = document.getElementById('wed-add-row');

    // Insert the new row before the button row
    buttonRow.parentNode.insertBefore(newRow, buttonRow);
    
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


//add thr btn
let addthrBtn =document.getElementById('thr-add');

addthrBtn.addEventListener('click',function(){
    let newRow = document.createElement('tr');
    newRow.style.display='block';
    newRow.className = 'thr-tr';
    newRow.innerHTML = `<td><input type="text" name="thr-inp${thr_index++}" class="thr"></td>`;

    // Get the reference to the button row
    let buttonRow = document.getElementById('thr-add-row');

    // Insert the new row before the button row
    buttonRow.parentNode.insertBefore(newRow, buttonRow);
    
});

let days=[firday,satday,sunday,monday,tueday,wedday,thrday];
function openTH(days){
    days.forEach((day)=>day.click());
}
openTH(days);

let deleteBtn =document.querySelectorAll('.deleteBtn');
deleteBtn.forEach((btn)=>{
    btn.addEventListener('click',function(){
        this.parentNode.querySelector('input[type=text]').name =`del${this.id}`;
        this.parentNode.style.display='none';
        
    });
});