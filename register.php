<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family:sans-serif;
  background: rgb(79, 123, 255);
}

form{
	align-content: center;
}
h2{
  color:white;
  text-align: center;
}

input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 0;
    margin: 8px 0;
    display: inline-block;
  
    box-sizing: border-box;
}

.button {
    background-color:#3366ff;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

.button:hover {
    opacity: 0.8;
}

.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    width:300px;
    position: relative;
    left: 40%;
}

img.logo {
    width: 40%;
}

.container {
    padding: 16px;
    width: 40%;
    position: relative;
    left:20%;
    color: white;
}

</style>
</head>
<body>

  
  <h2>VIT HOSTEL ALLOTMENT LOGIN</h2>

  
<form name="login" method =  "post"  action="redirect.php">
  <div class="imgcontainer">
    <img src="vitlogo.png" class="logo">
  </div>
  <div class="container">
    <label for="username"><b>Registration No.</b></label>
    <input type="text" placeholder="Username" name="userid" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Password" name="psw" required>
        
    <input class="button"  type="SUBMIT" name="submit">
 
  </div>
</form>

</body>
</html>