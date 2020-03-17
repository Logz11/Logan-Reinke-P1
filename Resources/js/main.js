$(document).ready(function(){
    $("#popup").click(function(){
        var emailAddress1 = $("#emailAddress1").val();
        var emailAddress2 = $("#emailAddress2").val();
        var popup = document.getElementById("myPopup");
        var isValid = true;

        //VALIDATE FIRST EMAIL

        if (emailAddress1 == ""){
            $("#emailAddress1").next().text(" This field is required.");
            isValid = false;
        }

        else {
            $("#emailAddress1").next().text("");
        }

        //VALIDATE SECOND EMAIL

        if (emailAddress2 == ""){
            $("#emailAddress2").next().text(" This field is required.");
            isValid = false;
        }

        else if (emailAddress1 != emailAddress2){
            $('#emailAddress2').next().text(" Your email accounts don't match.");
            isValid = false;
        }

        else {
            $("#emailAddress2").next().text("");
        }

        //VALIDATE NAME

        if ($("#name").val() == ""){
            $("#name").next().text(" This field is required.");
            isValid = false;
        }

        else {
            $("#name").next().text("");

        }

        if (isValid) {
                popup.classList.toggle("show");
            //$("#contact-form").submit();
        }

    }); //END CLICK
}); //END READY