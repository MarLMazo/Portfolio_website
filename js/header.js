"use strict";
function handler1() {
    //check the width of window
    let width = window.innerWidth;
    //if mobile, it should animate to the top
    if(width <= 550){
        $('#header-cont').animate({
            top: "0"
        }, 500);
        //if desktop, it should animate to the left
    }else{
        $('#header-cont').animate({
            left: "0"
        }, 500);
    }
    //removing and adding the fa-arrow class
    setTimeout( function(){
        $('#header-btn i').removeClass('fa-arrow-toggle').addClass('fa-arrow');
    }, 500);
    //It will be called the handler2 if all the values on the top is the same as what is the initial
    $('#header-cont').one("click", handler2);
}

function handler2() {
    let width = window.innerWidth;
    if(width <= 550){
        $('#header-cont').animate({
            top: "-40vh"
        }, 500);
    }else{
        $('#header-cont').animate({
            left: "-180px"
        }, 500);
    }

    setTimeout( function(){
        $('#header-btn i').removeClass('fa-arrow').addClass('fa-arrow-toggle');
    }, 500);
    //It will be called the handler1 if all the values on the top is the same as what is the initial
    $('#header-cont').one("click", handler1);
}
/*All under the handlers function, it the initial state is the same, it wont do any of the values below that handler,
 *Thats why every handler at the end of the function will be called the other handler function at the end so that if the current state
 *of the header is the same on the values inside of that handler, the other handler will be called which is at the bottom of each handlers
 *
 *For better understanding, if the value is on desktop mode, animation is only for the left values, if handler1 is called and the left is 0,
 *any animation inside that handler will not be called and instead it will go the the last part which is calling the handler2 function */
$('#header-btn').one("click", handler1);