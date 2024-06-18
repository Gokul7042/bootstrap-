$(document).ready(function(){
    $(".registerbtn").click(function(){
        $(".formerror").each(function(){
            $(this).html("");
        });
        var username = $("#username").val();
        var email    = $("#email").val();
        var mobile_number = $("#mobile_number").val();
        var employee_id = $("#employee_id").val();
        var error = false;

        if(username.trim() == ""){
            error = true;
            $("#error-username").html("Please Enter Name ");
        }
        if(email.trim() == ""){
            error = true;
            $("#error-email").html("Please Enter Email");
        }

        if(mobile_number.trim() == ""){
            error = true;
            $("#error-mobile_number").html("Please Enter mobile number");
        }

        if(employee_id.trim() == ""){
            error = true;
            $("#error-employee_id").html("Please Enter Employee ID ");
        }

        if(error == false){
            $('[name="myform"]').submit();
        }
    });
});
