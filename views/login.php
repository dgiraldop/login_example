<html>
<head></head>

<body>
<?php 
 echo $res;

?>
<form action="" method="POST">
  <p>
   <label>Username</label>
   <input id="user" value="" name="user" type="text" required="required" /><br>
  </p>

  <p>
   <label>Password</label>
   <input id="pwd" name="pwd" type="password" required="required" />
  </p>
   <br />
  <p>

      <button type="submit" class="green big" name="submit"><span>Login</span></button> <button type="reset" class="grey big"><span>Cancel</span></button>
  </p>
 </form>

</body>
</html>