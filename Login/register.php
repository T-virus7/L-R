<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register page</title>
</head>
<style>
* {
    margin: 0px;
    font-family: Rubik;
}


.LoginPageContainer {
    height: 100vh;
    overflow: auto;
}

.LoginPageInnerContainer {
    display: flex;
    min-height: 100%;
}

.LoginPageInnerContainer .ImageContianer {
    width: 25%;
    background-color: #e1dfec;
    min-height: 100%;
    padding: 5%;
    display: flex;
    justify-content: center;
    align-items: center;
}

.LoginPageInnerContainer .ImageContianer .GroupImage {
    width: 100%;
    display: block;
}

.LoginPageInnerContainer .LoginFormContainer {
    flex-grow: 2;
    background-color: white;
    min-height: 100%;
    padding: 5%;
    background: url(https://i.imgur.com/BKyjjFa.png) no-repeat center center fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
}

.LoginPageInnerContainer .LoginFormContainer .LogoContainer .logo {
    height: 60px;
    margin-bottom: 30px;
}

.LoginPageInnerContainer .LoginFormContainer .header {
    font-size: 32px;
    font-weight: 500;
}

.LoginPageInnerContainer .LoginFormContainer .subHeader {
    color: #9aa4ad;
    margin-top: 5px;
    margin-bottom: 40px;
}

.LoginPageInnerContainer .LoginFormContainer .inputContainer {
    color: #3f3f45;
    margin: 20px 0px;
}

.LoginPageInnerContainer .LoginFormContainer .inputContainer .label {
    display: flex;
    width: 100%;
    justify-content: flex-start;
    align-items: center;
    margin-right: 7px;
    margin-bottom: 10px;
}

.LoginPageInnerContainer .LoginFormContainer .inputContainer .label .labelIcon {
    width: 20px;
    margin-right: 10px;
    display: block;
}

.LoginPageInnerContainer .LoginFormContainer .inputContainer .input {
    display: block;
    width: calc(100% - 20px);
    font-size: 15px;
    padding: 10px;
    border: 1px solid #d6d7db;
    border-radius: 5px;
    margin-top: 5px;
    outline: 0px !important;
}

.LoginPageInnerContainer .LoginFormContainer .OptionsContainer {
    display: flex;
    justify-content: space-between;
}

.LoginFormContainer {
    display: flex;
    align-items: center;
}

.LoginFormInnerContainer {
    max-width: 500px;
}

.LoginPageInnerContainer .LoginFormContainer .checkbox {
    width: 15px;
    height: 15px;
    margin: 0px;
    display: block;
    border: 1px solid #d6d7db;
}

.LoginPageInnerContainer .LoginFormContainer .checkboxContainer {
    display: flex;
    justify-content: flex-start;
    align-items: center;
}

.LoginPageInnerContainer .LoginFormContainer .checkboxContainer label {
    display: block;
    padding: 0px 5px;
    color: #9aa4ad;
}

.LoginPageInnerContainer .LoginFormContainer .ForgotPasswordLink {
    color: #e7483b;
    text-decoration: none;
}

.LoginFormContainer .LoginFormInnerContainer .LoginButton {
    margin-top: 30px;
    display: block;
    width: 100%;
    padding: 10px;
    border-radius: 20px;
    font-weight: bold;
    color: white;
    background-color: #2e1f7a;
    border: 0px;
    outline: 0px;
    cursor: pointer;
}

.LoginFormContainer .LoginFormInnerContainer .LoginButton:active {
    background-color: #4520ff;
}


@media only screen and (max-width: 1200px) {
    .LoginPageInnerContainer .ImageContianer {
        width: 50%;
    }
}

@media only screen and (max-width: 800px) {
    .LoginPageInnerContainer .ImageContianer {
        display: none;
    }

    .LoginFormContainer {
        justify-content: center;
    }
}
.LoginPageContainer::-webkit-scrollbar {
    width: 5px;
}

.LoginPageContainer::-webkit-scrollbar-track {
    background: #f1f1f1;
}

.LoginPageContainer::-webkit-scrollbar-thumb {
    background: #2e1f7a;
}

.LoginPageContainer::-webkit-scrollbar-thumb:hover {
    background: #4520ff;
}




</style>
<body>
<div class="LoginPageContainer">
    <div class="LoginPageInnerContainer">
        <div class="ImageContianer">
            <img src="https://i.imgur.com/MYZd7of.png" class="GroupImage">
        </div>
        <div class="LoginFormContainer">
            <div class="LoginFormInnerContainer">
                <div class="LogoContainer">
                    <img src="images/photo1.png" width="200px" height="200px">
                </div>
                <header class="header">Register now!</header>
                <header class="subHeader">Welcome to my <b>Social Media Campaigns. </b>Please Enter your Details</header>

                <form>
                    <div class="inputContainer">
                       
                        <input type="text" class="input" id="" placeholder="First name">
                    </div>
                    <div class="inputContainer">
                        
                        <input type="text" class="input" id="" placeholder="Last Name">
                    </div>
					<div class="inputContainer">
                       
                        <input type="email" class="input" id="" placeholder="Email">
                    </div>
                    <div class="inputContainer">
                        
                        <input type="text" class="input" id="" placeholder="Phone number">
                    </div>
					<div class="inputContainer">
                       
                        <input type="password" class="input" id="" placeholder="Password">
                    </div>
                    <div class="inputContainer">
                        
                        <input type="password" class="input" id="" placeholder="Confirm Password">
                    </div>
					<div>
        
        <label for="male">Male :</label>
        <input type="radio" id="male" name="gender" value="male">
        <label for="female">Female :</label>
        <input type="radio" id="female" name="gender" value="female">
        <label for="other">Other :</label>
        <input type="radio" id="other" name="gender" value="other">
    </div>
	<br>

	


  
                    
                    <button class="LoginButton">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div> 
<script src='https://www.google.com/recaptcha/api.js'></script>
</body>
</html>




