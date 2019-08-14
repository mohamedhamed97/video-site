

/***************** start the navbar tabs in dashboard */

function fadeEl(element){
    element.classList.add('opacity-block');

}
let buttons = document.getElementsByClassName('btn-dashboard');
for(let i = 0 ; i < buttons.length ; i++ ){
    buttons[i].addEventListener('click' , function(){
        for(let ii = 0 ; ii < buttons.length ; ii ++ ){
            buttons[ii].classList.remove('btn-info');
            buttons[ii].classList.add('btn-dark');
            this.classList.remove('btn-dark');
            this.classList.add('btn-info');
        }
        let box = this.getAttribute('data-class');
        let el = document.getElementById(box);
        for(var e = 0 ; e < el.parentElement.children.length ; e ++ ){
            el.parentElement.children[e].classList.remove('opacity-block');
            el.parentElement.children[e].classList.add('opacity-none');
        }
        fadeEl(el);

    });
}

// get the button of add new skills
let skills_btn = document.getElementById('add-skills-btn');
// get the form of the skills
let skills_form = document.getElementById('user-skills-form');
// add event listener to btn
// counter for skills
let skills_counter = 0;
/*** for delete ****/
let delete_input = document.getElementById('delete-skills-btn');
skills_btn.addEventListener('click' , function (e) {
    e.preventDefault();
    if(skills_counter > 5){
        skills_btn.disabled  =  true;
        skills_btn.style.cursor= 'no-drop';
        delete_input.disabled = false;
        delete_input.style.cursor= 'pointer';
    }else{
        delete_input.disabled = false;
        delete_input.style.cursor= 'pointer';
        // create new input
        let input = document.createElement('input');
        // add attribute
        input.setAttribute('name' , 'skills[]');
        input.setAttribute('class' , 'form-control');
        input.setAttribute('placeholder' , ' مهاره جديده(اجباري)');
        input.setAttribute('autofocus' , 'autofocus');
        // insert the input and <br> to form
        skills_form.insertBefore(input , skills_form.childNodes[0]);
        skills_counter ++;
        if(skills_counter > 5){
            skills_btn.disabled  =  true;
            skills_btn.style.cursor= 'no-drop';
            delete_input.disabled = false;
            delete_input.style.cursor= 'pointer';
        }
    }

});

/***** delete input ***/
delete_input.addEventListener('click' , function (e) {
    e.preventDefault();
    if(skills_counter == 0){
        skills_btn.disabled = false;
        skills_btn.style.cursor= 'pointer';
        delete_input.disabled = true;
        delete_input.style.cursor= 'no-drop';
    }else{
        delete_input.disabled = false;
        delete_input.style.cursor= 'pointer';
        skills_btn.disabled = false;
        skills_btn.style.cursor= 'pointer';
        skills_form.removeChild(skills_form.childNodes[0]);
        skills_counter = skills_counter - 1 ;
        if(skills_counter == 0){
            skills_btn.disabled = false;
            skills_btn.style.cursor= 'pointer';
            delete_input.disabled = true;
            delete_input.style.cursor= 'no-drop';
        }
    }

});




