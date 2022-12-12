


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
       
        <title>ADMIN Panel</title>



    </head>

  


      <div class="container">
          <div class="">
              <div class="">
                  <p style="text-align: center;  font-size: 20px;">Add User</p>
              </div>
              <div class="">
                  <!-- Form Start -->
                  <form id="form" action="checkregistration.php" method ="POST"  style=" background-color: lightblue;"    >
                      <div class="form-group">
                          <label>Id</label>
                          <input type="text" name="id"  id="input" placeholder="ID" required>
                      </div>

                      <div >
                          <label>Password</label>
                          <input type="password" id="Password1" onblur="passcheck() checkpass()" name="password" class="input"  placeholder="Password" required>
                             <span id="msg1"  style="color: red";></span>
                             <span id="checkpass"  style="color: red";></span>
                          
                      </div>
                          <div >
                          <label>confirmPassword</label>
                          <input type="password" id="password2" name="conpassword" class="input"  placeholder="confirm Password" onblur="passcheck()" required>
                            <p id="msg"  style="color: red";></p>
                          <span id="pass" style="color: red";  ></span>
                      </div>
                         
                      <div>
                          <label>Name</label>
                          <input type="text"  name="name" class="input user_id" onblur="validuser() usercheck()" id="username"  placeholder="username" required>
                            <span id="valid"></span>
                             <span id="valid2"></span>
                      </div>
                      <div>
                          <label>Email</label>
                          <input type="text" onblur="checkvalidemail()" name="email"  class="input"  id="email" placeholder="Email" required>
                            <span id="error" style="color: red"></span>
                      </div>

                     
                         
                      <div >
                          <label>User Role</label>
                          <select id="input" class="" name="role" >
                              <option value="0">Admin</option>
                              <option value="1">users</option>
                          </select>
                      </div>
                      <input type="submit" id="button"  name="submit" class="" value="submit" required />
                  </form>
                   <!-- Form End-->
               </div>
           </div>
       </div>
   </div>


<script type="text/javascript" >
  

//checkpassowrd
function passcheck() {
//pattern match password validation sir to ask


var p1=document.getElementById('Password1').value;
var p2=document.getElementById('password2').value;

if(p1.length<6){
document.getElementById('msg1').innerHTML="password length must be more than 6 charactor ";
document.getElementById('msg1').style.backgroundColor="rga(255,0,0";
}
else{

    document.getElementById('msg1').innerHTML=" password length ok";
}

if(p1!=p2)
{

   document.getElementById('pass').innerHTML="Password Don't match";
   document.getElementById('pass').style.backgroundColor="rga(255,0,0";
      document.getElementById('submitted').style.display="none";
}else{

  document.getElementById('pass').innerHTML="password matched";

}
}




/////////////////////////
//check phonenumber
function phonevalidation(){


var number=document.getElementById('phoneerror').value;
var two =number.substring(0,2);
if(number.length>11 || number.length<11)
{

   document.getElementById("errorphone").innerHTML="invalid phone number";
}

else if(two!= 01)
{
   document.getElementById(errorphone).innerHTML="invalid phone number";
}
else{

   document.getElementById("errorphone").innerHTML="valid phone number";

}


}







//Check email
function checkemail()
{
   var checkemail=document.getElementById('email').value;
    var erroremail=document.getElementById('error');
    erroremail.innerHTML="";

    if(checkemail.length<=2)
    {

       erroremail.innerHTML="Email address is invalid";
       return false;

    }
  
var atposition=checkemail.indexOf("@");  
var dotposition=checkemail.lastIndexOf(".");  
if (atposition<1 || dotposition<atposition+2 || dotposition+2>=checkemail.length){  
  erroremail.innerHTML="Email address is invalid";  
  return false;  
  } 
if (/^[\w.-]+@([\w-]+\.)+[\w-]{6,8}$/.test(checkemail)) {
console.log('Valid');
} else {
console.log('Not Valid');
}


}

function usercheck()
{   let uservalid=document.getElementById('valid2');
    let username = document.getElementById('username').value;
 if(/^[A-Za-z][A-Za-z0-9_]{4,14}$/.test(username)) {
  uservalid.innerHTML="";
} else {
uservalid.innerHTML="use strong username";
}
}  







function validuser(){
              let username = document.getElementById('username').value;
            let xhttp = new XMLHttpRequest();
            xhttp.open('POST', '../../controller/adminController/adminsignupcontroller.php', true);
            xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhttp.send('username='+username);
            xhttp.onreadystatechange = function (){
                if(this.readyState == 4 && this.status == 200){
                    //alert(this.responseText);
                    document.getElementById('valid').innerHTML = this.responseText;
                    document.getElementById('valid').style.color = "red";
                    document.getElementById('valid').style.fontSize = 12+'px';
                }
            }
                }
            
    




function checkvalidemail(){
              let email = document.getElementById('email').value;
            let xhttp = new XMLHttpRequest();
            xhttp.open('POST', '../../controller/adminController/adminsignupcontroller.php', true);
            xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhttp.send('email='+email);
            xhttp.onreadystatechange = function (){
                if(this.readyState == 4 && this.status == 200){
                    //alert(this.responseText);
                    document.getElementById('error').innerHTML = this.responseText;
                    document.getElementById('error').style.color = "red";
                    document.getElementById('error').style.fontSize = 12+'px';
                }
            }
                }






</script>  

 </body>

