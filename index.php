
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
          <style>
            @import url("style.css");</style>
        <title>AJAX: Sign Up Page</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-3.1.0.js"></script>
        <script>
        
            function validateForm() {
                
                return false;
           
            }
            
        </script>
        
        <script>
            $(document).ready(function(){
                var isUser = false;
                var isPass= false;
                $("#zipCode").change(function(){
                    // alert($("#zipCode").val());
                    $.ajax({
                    type: "GET",
                    url: "http://itcdland.csumb.edu/~milara/ajax/cityInfoByZip.php",
                    dataType: "json",
                    data: { "zip": $("#zipCode").val() },
                    success: function(data,status) {
                        // alert(data.city);
                        
                        if(data == false){
                            $("#zipNotFound").html("Zip code not found");
                        }
                        else{
                            $("#zipNotFound").hide();
                            $("#city").html(data.city);
                            $("#latitude").html(data.latitude);
                            $("#longitude").html(data.longitude);
                        }
                    
                    
                    },
                    complete: function(data,status) { //optional, used for debugging purposes
                    //alert(status);
                    }
                    
                    });//ajax
                    // alert ($("#city").val());
                   
                }); // $("#zipCode").change
                
                $("select").change(function(){
                        
                    //   alert($("select").val()); 
                    $.ajax({
    
                    type: "GET",
                    url: "http://itcdland.csumb.edu/~milara/ajax/countyList.php",
                    dataType: "json",
                    data: { "state": $("#state").val()},
                    success: function(data,status) {
                        $("#county").html("<option> -select one-</option>");
                        for (c in data) {
                            $("#county").append("<option>" + data[c].county +"</option>")
                        }
                        // alert(data[0].county);
                    //alert(data);
                    
                    },
                    complete: function(data,status) { //optional, used for debugging purposes
                    //alert(status);
                    }
                    
                    });//ajax
                });//$(#select)
                
                $("#username").change(function() {
                    
                    $.ajax({
                    type: "GET",
                    url: "checkUsername.php",
                    dataType: "json",
                    data: { "username": $("#username").val() },
                    success: function(data,status) {
                        if(!data){
                            // $("#username").html("<h3>Username is taken</h3>");
                             $("#isthere").html("<h4 style = 'color: green;'>Username is avilable </h4>");
                            isUser = true;
                        }
                        else{
                        isUser = false;
                           $("#isthere").html("<h4 style = 'color: red;'>Username is taken </h4>");
                        }
                        // alert(data);
                    // alert(data.city);
                    
                    },
                    complete: function(data,status) { //optional, used for debugging purposes
                    //alert(status);
                    }
                    
                    });//ajax
                    
                    
                    
                    
                });//change
                
                
                
                $("#sub").click(function(){
                    if($("#p2").val() != $("#p1").val()){
                        isPass = false;
                        $("#wrongpass").html("<h4 style = 'color: red;'>Passwords do not match </h4>");
                    }
                    // if($("#p2") == $("#p1"))
                    else{
                        isPass = true;
                        $("#wrongpass").hide();
                    }
            
            
                    if(!isPass || !isUser){
                        $("#success").html("<h3 style = 'color: red;'>Error - Cannot sign up </h3>");
                        
                    } else{
                        $.ajax({
                            type: "POST",
                            url: "insertUser.php",
                            dataType: "json",
                            data: { "username": $("#username").val(),
                                    "firstName": $("#firstName").val(),
                                    ":lastName": $("#lastName").val(),
                                    ":email": $("#email").val(),
                                    ":password": $("#password").val(),
                                    ":zipCode": $("#zipCode").val()},
                            success: function(data,status) {
                                
                              $("#success").html("<h3 style = 'color: green;'>Record Added! </h3>");
                            },
                            complete: function(data,status) { //optional, used for debugging purposes
                            //alert(status);]
                            alert(status);
                            }
                    
                        });//ajax
                      
                    }
                })
                
            });//$(document).ready
        </script>

    </head>

    <body>
        <div id="top"><h1>Cst 336 lab8</h1></div>
    <div id = "middle">
       <h1> Sign Up Form </h1>
    
        <form onsubmit="return validateForm()">
            <fieldset>
               <legend>Sign Up</legend>
                First Name:  <input id = "firstName" type="text"><br> 
                Last Name:   <input id = "lastName" type="text"><br> 
                Email:       <input id = "email" type="text"><span class="glyphicon glyphicon-envelope"></span><br> 
                Phone Number:<input id = "number" type="text"><br>
                Zip Code:    <input id="zipCode" type="text"> <span style = "color:red;"id="zipNotFound"></span><br>
                City:        <span id="city"></span>
                <br>
                Latitude:    <span id="latitude"></span>
                <br>
                Longitude:   <span id="longitude"></span>
                <br><br>
                State: 
                <select id ="state">
                    <option value="">Select One</option>
                    <option value="ca"> California</option>
                    <option value="ny"> New York</option>
                    <option value="tx"> Texas</option>
                    <option value="va"> Virginia</option>
                </select><br />
                
                Select a County: <select id="county"></select><br>
                
                Desired Username: <input id="username" type="text"><span id = 'isthere'></span><br>
                
                
                Password: <input id = "p1" type="password"><br>
                
                Type Password Again: <input id = "p2" type="password"><span id = 'wrongpass'></span><br>
                
                <input class="btn btn-info" id ="sub" type="submit" value="Sign up!">
                <span id = "success"></span>
            </fieldset>
        </form>
    </div>
    </body>
    <footer>Created by: Daniel Ochoa</footer>
</html>