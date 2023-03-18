const pages = Array.from(document.querySelectorAll('form .page'));
const nextBtn = document.querySelectorAll('form .nextBtn');
const backBtn = document.querySelectorAll('form .backBtn');
const form = document.querySelectorAll('form');
const firstName = document.getElementById("firsName");
const lastName = document.getElementById("lastName");
const birthDate = document.getElementById("birthDate");
const sex = document.getElementById("sex");
const firsNexttBtn = document.getElementById("firstNextButton");
const visitorBtn = document.getElementById("visitorBtn");
const employeeBtn = document.getElementById("employeeBtn");




nextBtn.forEach(button =>{
    button.addEventListener('click',() =>{
        changePage('next');
    })
})
backBtn.forEach(button =>{
    button.addEventListener('click',() =>{
        changePage('back');
    })
})


//  form.addEventListener('submit', (e)=>{
//     e.preventDefault();
//     const inputs = [];
//     form.querySelectorAll('input').forEach(input=>{
//         const {name, value} = input;
//         inputs.push({name,value})
//     })
//     form.reset();
//     let index = 0 ;
//     const active = document.querySelector('form .page.active');
//     index = pages.indexOf(active);
//     pages[index].classList.remove('active');
//     pages[0].classList.add('active');
//  })
let asd=0;

// $("#employeeBtn").click(function () {
//    index=4;
//    console.log("asdsad"+index);
// });
function changePage(btn){
    
    let index = 0 ; 
    const active = document.querySelector('form .page.active');
    index = pages.indexOf(active);
    pages[index].classList.remove('active');
    if(btn === 'next'){
        
        index ++;
        // if(index == 1){
        //     index = 5;
            // 
        // }
        
        console.log(index);
    }else if(btn === 'back'){ 
        index --;
        console.log(index);
    }
    pages[index].classList.add('active');
}
$(document).ready(function() {
    
    $('input, select').on('input', function() {
       
        var currentStep = $(this).closest('.step');

        
        var isEmpty = false;
        currentStep.find('input, select').each(function() {
            if ($(this).val() === '') {
                isEmpty = true;
            }
        });
        var selectValue = $('#' + currentStepId + ' select').val();
        if (!selectValue) {
        $('#' + currentStepId + 'NextButton').attr('disabled', true);
        }
        
        var currentStepId = currentStep.attr('id');
        if (isEmpty) {
            $('#' + currentStepId + 'NextButton').attr('disabled', true);
            // console.log("disabled");
        } else {
            $('#' + currentStepId + 'NextButton').attr('disabled', false);
        }
       
    });
});
