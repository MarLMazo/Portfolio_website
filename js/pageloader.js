
function pageLoader(){
    "use strict";
    var linkLocation;
    // console.log("pageloader");
    //Every call of this function will fade the loader first
    //Since every page will load the loader first in order to have an effect of changing the page
    $("#pageloader-cont").fadeOut(2000);

    //the click on the header with transition will do this function
    $("a.transition").click(function(event){
        //prevent the default functionality
        event.preventDefault();
        //get the href url
        linkLocation = this.href;
        $("#pageloader-cont").fadeIn(3000,redirectPage);
    });

    function redirectPage() {
        //redirect the page depending on the linklocation
        window.location = linkLocation;
    }

}
