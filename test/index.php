<!DOCTYPE html>
<html>
<head>
	<title>YogaVibe</title>
</head>
<body>

<script>
	function validateName(x){
		// Validation rule
		var re = /[A-Za-z -']$/;
		// Check input
		if(re.test(document.getElementById(x).value)){
			// Style green
			document.getElementById(x).style.background ='#ccffcc';
			// Hide error prompt
			document.getElementById(x + 'Error').style.display = "none";
			return true;
		}else{
			// Style red
			document.getElementById(x).style.background ='#e35152';
			// Show error prompt
			document.getElementById(x + 'Error').style.display = "block";
			return false;  
		}
	}
	// Validate username
	function validateuser(user){
		var userid=document.getElementById('user');
		  var uu=userid.value;
		  var chrlen=uu.length;
		  if(chrlen==0)  {
			document.getElementById('user').style.background ='#e35152';
		   return false;
			}
			else{
			document.getElementById('user').style.background ='#ccffcc';
			document.getElementById('userError').style.display = "none";
			return true;
			}
	}
	// Validate password
	function validatepassword(password){
		var pass=document.getElementById('password');
		  var wordsss=pass.value;
		  var chr=wordsss.length;
		  if(chr==0)  {
			document.getElementById('password').style.background ='#e35152';
		   return false;
			}
			else{
			document.getElementById('password').style.background ='#ccffcc';
			document.getElementById('passwordError').style.display = "none";
			return true;
			}
	}
	// Validate re-enter password
	function validaterepassword(repassword){
		var pawd1=document.getElementById('password');
		  var pawdcon2=document.getElementById('repassword');
 
		 if(pawdcon2.value.length==0)  {
			document.getElementById('repassword').style.background ='#e35152';
		   return false;
			}
 
		 else if(pawd1.value!=pawdcon2.value)
		  {
			document.getElementById('repassword').style.background ='#e35152';
		   return false;
		  }
		 else{
			document.getElementById('repassword').style.background ='#ccffcc';
			document.getElementById('repasswordError').style.display = "none";
			return true;
		 }
	}
	// Validate email
	function validateEmail(email){
		var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
		if(re.test(email)){
			document.getElementById('email').style.background ='#ccffcc';
			document.getElementById('emailError').style.display = "none";
			return true;
		}else{
			document.getElementById('email').style.background ='#e35152';
			return false;
		}
	}
	// Validate Select boxes
	function validateSelect(x){
		if(document.getElementById(x).selectedIndex !== 0){
			document.getElementById(x).style.background ='#ccffcc';
			document.getElementById(x + 'Error').style.display = "none";
			return true;
		}else{
			document.getElementById(x).style.background ='#e35152';
			return false;  
		}
	}
	function validateCheckbox(x){
		if(document.getElementById(x).checked){
			return true;
		}
		return false;
	}      
	function validateForm(){
		// Set error catcher
		var error = 0;
		// Check name
		if(!validateName('name')){
			document.getElementById('nameError').style.display = "block";
			error++;
		}
 
		// Validate email
		if(!validateEmail(document.getElementById('email').value)){
			document.getElementById('emailError').style.display = "block";
			error++;
		}
		// Validate animal dropdown box
		if(!validateSelect('animal')){
			document.getElementById('animalError').style.display = "block";
			error++;
		}
		// Check user
		if(!validateuser('user')){
			document.getElementById('userError').style.display = "block";
			error++;
		}
		// Check password
		if(!validatepassword('password')){
			document.getElementById('passwordError').style.display = "block";
			error++;
		}
		// Check re-enter password
		if(!validaterepassword('repassword')){
			document.getElementById('repasswordError').style.display = "block";
			error++;
		}
		// Validate Radio
		if(!validateCheckbox('accept')){
			document.getElementById('termsError').style.display = "block";
			error++;
		}
		// Don't submit form if there are errors
		if(error > 0){
			return false;
		}
		if(error < 0){
			var id=document.getElementById('fld');
			 id.innerHTML="<center><h1><font color=green>Welcome to HScripts.com</h1><br><h4><font color=red>Submission Successful!</font></h4></center>";
		}
	}          
</script>


<style type="text/css">
#header
{
	width:500px;
	height:70px;
	margin:0 auto;
	padding:0 0 0 0 px;
}
</style>


<form action="welcome.php" method="POST" onsubmit="return validateForm()">
        <fieldset>
            <label for="name">Name</label>
            <input type="text" name="name" id="name" onblur="validateName(name)" />
            <span id="nameError" style="display: none;">You can only use alphabetic characters, space, hyphens and apostrophes</span>
        </fieldset>
        <fieldset>
            <label for="email">Email</label>
            <input type="text" name="email" id="email" onblur="validateEmail(value)" />
            <span id="emailError" style="display: none;">You must enter a valid email address</span>
        </fieldset>  
        <fieldset>
            <label for="animal">Gender</label>
            <select name="animal" id="animal" onblur="validateSelect(name)">
                <option value="">Sex</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>
            <span class="validateError" id="animalError" style="display: none;">You must select your gender</span>
        </fieldset>
		<fieldset>
            <label for="name">Username</label>
            <input type="text" name="user" id="user" onblur="validateuser(user)" />
            <span id="userError" style="display: none;">You must enter your username</span>
        </fieldset>
		<fieldset>
            <label for="name">Password</label>
            <input type="password" name="password" id="password" onblur="validatepassword(password)" />
            <span id="passwordError" style="display: none;">You must enter your password</span>
        </fieldset>
		<fieldset>
            <label for="name">Re-enter Password</label>
            <input type="password" name="repassword" id="repassword" onblur="validaterepassword(repassword)" />
            <span id="repasswordError" style="display: none;">Password mismatch</span>
        </fieldset>
        <fieldset>
            <label for="terms">Terms and Conditions</label>
            <ul>
                <li>
                    <input type="checkbox" name="terms" id="accept" value="accept" onblur="validateCheckbox(id)" />
                    <label for="accept">Accept our <a href="#">Terms and Conditions</a></label>
                </li>
            </ul>
            <span class="validateError" id="termsError" style="display: none;">You need to accept our terms and conditions</span>
        </fieldset>      
        <fieldset>
            <input type="submit" id="submit" name="submit" value="Submit" />
        </fieldset>      
    </form>

</body>
</html>