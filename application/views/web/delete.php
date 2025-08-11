<style>
     *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
 }
 
 .hello{
    font-family: Arial, sans-serif;
    /* background-color: #f4f4f4; */
    /* margin: 0; */
    padding: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100vh;
  }

  form {
    /* margin-top: -77px; */
    /* margin-top: 10em; */
    width: 600px;
    background-color: #fff;
    /* padding: 50px 2em; */
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  }

  .hello-img{
    background-color: #409053;
    padding: 20px;
  }
  .hello-h1{
    color: white;
  }
  h2{
    /* text-align: center; */
    padding: 10px;
    margin-top: 30px;
  }

  label {
    display: block;
    margin-bottom: 8px;
    font-weight: 400;
  }

  .textarea{
    width: 100%;
  }

  input {
    width: 100%;
    padding: 8px;
    margin-bottom: 16px;
    box-sizing: border-box;
  }

  button {
    background-color: #409053;
    color: #fff;
    padding: 10px 20px;
    border: none;
    /* border-radius: 4px; */
    cursor: pointer;
    text-align: center;
    margin-top: 20px;
    justify-content: center;
  }

  button:hover {
    background-color: white;
    color: #409053;
    border: 0.5px solid #409053;
  }

  header{
    background-color: #409053;
    height: 15vh;
  }
  .cloverleaf_logo {
    padding: 1em 10px;
    transform: scale(.9);
    cursor: pointer;
    display: flex;

  }
    img{
   
    max-height: 50px;
    margin-right: 6px;
    }
   
    h1 {
    opacity: 1;
    display: block;
    margin: 0;
    font-weight: 700;
    color: #fff;
    font-size: 23px;
    font-family: 'Inter', sans-serif;
    position: relative;
    transition: display 0.5s ease; 
    }
   
    .hy-logo {
        position: absolute;
        right: 0;
        position: absolute;
        left: 3px !important;
        top: 25px !important;
        font-size: 9px !important;
        color: fff !important;
        top: 0;
        padding: 0;
        margin: 0;
        bottom: unset !important;
        letter-spacing: 1px !important;
    }
   
    .version_text {
    letter-spacing: 1.2px !important;
    position: relative !important;
    top: 12px !important;
    font-size: 10px !important;
    display: block !important;
    }

    .hello-input{
        position: relative;
        margin-bottom: .9em;
    }

    .hide {
        display: none;
    }

.show {
    display: block;
}
h2{
    color: #009649;
    text-align: center;
    font-size: 45px;

}
p{
    color: #009649;
    text-align: center;
    font-size: 15px;
    font-weight: 700;

}
</style>

<header>
        <div class="cloverleaf_logo d-flex">
            <img src="<?=base_url("assets/img/newLogo.png"); ?>" class="img-fluid mb-3 mb-lg-0" alt="" />
            <h1 class="cloverleaf_text">
                CLOVERLEAF
                <span class="hy-logo"> GLOBAL SOLUTIONS PVT LTD. </span>
                <span class="version_text hy-logo">An Industry 4.0 Initiative</span>
            </h1>
            </a>
        </div>
        <h2>Account Deletion</h2>
        <p>Please fill the below form in case your account or associated data has been deleted from the Cloverleaf Engineers App.</p>


        <div class="hello">
            <form id="accountDeletionForm">
                <!-- <h2>Account Deletion</h2> -->
                <div class="hello-input">
                    <label for="fullName">Full Name:</label>
                    <input type="text" id="fullName" name="fullName" required>
                    <span id="err_name" class="hide"
                        style="color: red; font-size: 12px; "> Full
                        Name is required.
                    </span>
                </div>


                <div class="hello-input">
                    <label for="email">Email Address:</label>
                    <input type="email" id="email" name="email" required>
                    <span id="err_email" class="hide"
                        style="color: red; font-size: 12px;  ">Email is
                        required
                    </span>
                </div>

                <div class="hello-input">
                    <label for="userId">User ID:</label>
                    <input type="text" id="userId" name="userId" required>
                    <span id="err_userid" class="hide"
                        style="color: red; font-size: 12px; position: absolute; bottom: -3px;"> User
                        User Id is required
                    </span>
                </div>

                <div class="hello-input">
                    <label for="accountName">User Account Name:</label>
                    <input type="text" id="accountName" name="accountName" required>
                    <span id="err_accountName" class="hide"
                        style="color: red; font-size: 12px; position: absolute; bottom: -3px;"> User
                        Account name is required
                    </span>
                </div>


                <label for="reason">Messege for Account Deletion (optional):</label>
                <textarea name="reason" rows="6" id="textarea" class="textarea"></textarea><br>
                <span id="err_reason" class="hide" style="color: red; font-size: 12px;"> User Account name is mend
                </span>


                <div style="text-align: center;" onclick="validateForm()"><button type="button">Submit</button>
                </div>
            </form>
        </div>

</header>

        <script>
            

document.getElementById('fullName').addEventListener('keyup', function() {
    validateForm();
});
document.getElementById('email').addEventListener('keyup', function() {
    validateForm();
});
document.getElementById('userId').addEventListener('keyup', function() {
    validateForm();
});
document.getElementById('accountName').addEventListener('keyup', function() {
    validateForm();
});
document.getElementById('textarea').addEventListener('keyup', function() {
    validateForm();
});

function validateForm() {
    console.log('k')
    var fullName = document.getElementById('fullName').value;
    if(!fullName){
        // console.log(" !name ", name);
        var element =  document.getElementById("err_name");
            element.classList.remove("hide");
            element.classList.add("show");
            // alert( " Name is mandatory " ) ;
        }else{
            var element =  document.getElementById("err_name");
            element.classList.remove("show");
            element.classList.add("hide");
        }
    

    var email = document.getElementById('email').value;

    if(!email){
        
        var element =  document.getElementById("err_email");
            element.classList.remove("hide");

            element.classList.add("show");
            
        }else{

            var element = document.getElementById("err_email");
            const pattern = /^[\w\-\.]+@([\w-]+\.)+[\w-]{2,}$/;
            result = pattern.test(email);
        
            
            document.getElementById("err_email").innerHTML = result ? 'Valid' : 'Invalid';
        
            var element =  document.getElementById("err_email");
                element.classList.remove("show");
                element.classList.add("hide");
    
        }
    
    var userId = document.getElementById('userId').value;
    if(!userId){
        
        var element =  document.getElementById("err_userid");
            element.classList.remove("hide");

            element.classList.add("show");
            // alert( " Name is mandatory " ) ;
        }else{
            var element =  document.getElementById("err_userid");
                element.classList.remove("show");
                element.classList.add("hide");
    
        }
    
    
    var accountName = document.getElementById('accountName').value;
    if(!accountName){
        // console.log(" !name ", name);
        var element =  document.getElementById("err_accountName");
            element.classList.remove("hide");

            element.classList.add("show");
            // alert( " Name is mandatory " ) ;
        }else{
            var element =  document.getElementById("err_accountName");
                element.classList.remove("show");
                element.classList.add("hide");
    
        }
    
    

    

    

    
    // document.getElementById('accountDeletionForm').submit();
}

        </script>