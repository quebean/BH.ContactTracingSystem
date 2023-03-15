const pages = Array.from(document.querySelectorAll('form .page'));
const nextBtn = document.querySelectorAll('form .nextBtn');
const backBtn = document.querySelectorAll('form .backBtn');
const employeeBtn = document.getElementById('employeeBtn');
const form = document.querySelectorAll('form');
const firstName = document.getElementById("firsName");
const lastName = document.getElementById("lastName");
const birthDate = document.getElementById("birthDate");
const sex = document.getElementById("sex");
const firsNexttBtn = document.getElementById("firstNextButton");



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


function changePage(btn){
    
    let index = 0 ;
    // var x = getElementByClassName("page");
    const active = document.querySelector('form .page.active');
    index = pages.indexOf(active);
    pages[index].classList.remove('active');
    if(btn === 'next'){
        console.log();
        index ++;
        // if(index == 1){
        //     index = 5;
            // 
        // }
      
    }else if(btn === 'back'){ 
        index --;
        
    }
    pages[index].classList.add('active');
}
// $(document).ready(function() {
//     // Add event listeners to the input fields
//     $('input, select').on('input', function() {
//         // Check if any of the fields are empty
//         var currentStep = $(this).closest('.page');
//         var isEmpty = false;
//         $('input, select').each(function() {
//             if ($(this).val() === '') {
//                 isEmpty = true;
//                 console.log("walang laman");
//             }
//         });

//         // Disable the Next button if any of the fields are empty
//         if (isEmpty==true) {
//             $('#step1NextButton').attr('disabled', true);
//             console.log("disable yung button");
//         } else {
//             $('#step1NextButton').attr('disabled', false);
//             console.log("hindi disable yung button");
//         }
//     });
// });

$(document).ready(function() {
    // Add event listeners to the input fields
    $('input, select').on('input', function() {
        // Get the current step container
        var currentStep = $(this).closest('.step');

        // Check if any of the fields are empty
        var isEmpty = false;
        currentStep.find('input, select').each(function() {
            if ($(this).val() === '') {
                isEmpty = true;
            }
        });

        // Disable the Next button for the current step if any of the fields are empty
        var currentStepId = currentStep.attr('id');
        if (isEmpty) {
            $('#' + currentStepId + 'NextButton').attr('disabled', true);
            console.log("disabled");
        } else {
            $('#' + currentStepId + 'NextButton').attr('disabled', false);
            console.log(currentStepId);
        }
        var selectValue = $('#' + currentStepId + ' select').val();
        if (!selectValue) {
        $('#' + currentStepId + 'NextButton').attr('disabled', true);
        }
    });
});
