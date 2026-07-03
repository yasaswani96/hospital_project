/*=========================================
        validation.js
=========================================*/

function validateAppointment(){

    let name=document.getElementById("name").value.trim();

    let mobile=document.getElementById("mobile").value.trim();

    if(name===""){

        alert("Please Enter Patient Name");

        return false;

    }

    if(mobile.length!=10){

        alert("Enter Valid Mobile Number");

        return false;

    }

    alert("Appointment Booked Successfully!");

    return true;

}