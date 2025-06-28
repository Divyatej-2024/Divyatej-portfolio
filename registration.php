<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration FORM</title>
    <style>
        body{

            background:linear-gradient(120deg,#082032,#2c394b,#334756,#d2d2d2,#ff4c29);
            background-size: 100% 100%;
            background-position:center;
            height:770px;
            margin-left:auto;
            margin-right: auto;
            display: block;
            background-repeat:no-repeat;
        }
        .reg h2{
text-align:center;
        }
        .reg{    
            position:absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 500px;
            background:transparent;
            border-radius:20px;
            border:2px solid black;
        }
        .trans{
    margin: 30px;
    background-color:linear-gradient(to bottom left,skyblue,white,powderblue,white,green);
    opacity: 0.8;
        }
        form .txt_field{
    position: relative;
    border-bottom: 2px dotted silver ;
    margin: 25px 0;
}
.reg form{
    padding: 0 10px;
box-sizing: border-box;
}
        form .txt_field{
    position: relative;
    border-bottom: 1px solid silver ;
    margin: 20px 0;
}
.txt_field input{
    width: 99%;
    padding: 0 3px;
    height: 30px;
    font-size: 17px;
    border: none;
    background: none;
    outline: none;
}
.txt_field label{
    position: absolute;
    top: 10%;
    left: 5px;
    color: lightgreen;
    transform: translateY(-45%);
    font-size: 15px;
    pointer-events: none;
    transition: .25s;
}
.txt_field span::before{
    content: '';
    position: absolute;
    top: 40px;
    left: 0;
    width: 100%;
    height: 3px;
    background: blue;
}
.txt_field input:focus~label,
.txt_field input:valid~label{
top: -6px;
color: green;
}
.txt_field input:focus ~ span::before,
.txt_field input:valid ~ span::before{
    width: 10%;

}

.txt_field select:focus~label,
.txt_field select:valid~label{
top: -6px;
color: blue;
}
.txt_field select:focus ~ span::before,
.txt_field select:valid ~ span::before{
    width: 10%;}
a:hover{
    text-decoration: underline;
}
a:link,a:visited{
    width: 25%;
    height: 25px;
    border: 2.5px solid;
    background:green;
    border-radius: 30px;
    font-size: 19px;
 color: darkblue;
 font-weight: 700;
 cursor: pointer;
 outline: none;
}
a:hover, a:active{
    border-color: green;
    transition: .25s;
}
a{
    text-align: center;
    font-size: 9px;
}
a{
color: #2691d9;
text-decoration: none;
}
a:hover{
    text-decoration: underline;
}
label{  
    color: lightblue;  
    font-size: 14px;  
}    
a:hover, a:active {
 background-color:white
}
a{  
    float: right;  
    background-color: grey;  
}  
.select {
  background-color: #4CAF50;
  color: white;
  padding: 6px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.select {
  position: relative;
  display: inline-block;
}

.select-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.select-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}
button{
    background-color:lightgreen;
}
button
.select-content a:hover {background-color: #f1f1f1}

.select:hover {
  display: block;
}

.select:hover {
  background-color: #3e8e41;
}
.button{
    padding:20px 0 20px 0;
}
    </style>
</head>
<body>
    
    <div class="trans">
    <div class="reg">
    <form  action="homepage.php?page=regcon"id="registration" method="post" enctype="multipart/form-data">
        <h2>Registration form</h2>
        <div class="txt_field">
        <input type="text" name="firstname"required>
        <label>First name</label>
        </div>
        <div class="txt_field">
        <input type="text" name="lastname" required>
        <label>Last name</label>
        </div>
        <div class="txt_field">
        <input type="text" name="username" required>
        <label>Username</label>
        </div>
        <div class="txt_field">
        <input type="email" name="email" required>
        <label>Email address</label>
        </div>
        <div class="txt_field">
        <label>Date Of Birth</label><br>
        <input type="date" name="dob" required>
        </div>
        <div class="txt_field">
        <label >Photo upload</label><br>
        <input type="file" name="photo" required>
        </div>
        <div class="txt_field">
        <input type="tel" name="phone" required>
        <label>Phone Number</label>
        </div>
        <div class="txt_field">
            <label>gender</label><br>
                    <select name="gender" class="select">
            <option value="select">--select--</option>
                        <option value="male">male</option>
           <option value="female">female</option>
            <option value="others">others</option>
        </select>
        </div>
        <br>
        <div>
         <select name="movie_genre" class="select">
            <option value="select">--select--</option>
           <option value="adventure">Adventure</option>
            <option value="Horror">horror</option>
            <option value="romantic">romantic</option>
            <option value="Thriller">thriller</option>
            <option value="action">action</option>
             <option value="comedy">Comedy</option>
        </select>
        </div>
        <div class="txt_field">
        <input type="password" name="pass" required>
        <label>password</label>
        </div>
        <div class="txt_field">
        <input type="password" name="r_pass" required>
        <label>re-type password</label>
        </div>
        <button type="submit" name="regs" class="button">register</button>
        <button type="reset" class="button">cancel</button>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label style="color:yellow;">Having an account</label><a href="login.php">LOGIN</a>
    </form>   
    </div>
</div>
</body>
</html>