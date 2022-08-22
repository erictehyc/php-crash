<?php
/* --- $_GET & $_POST Superglobals -- */

/*
  We can pass data through urls and forms using the $_GET and $_POST superglobals.
*/
  echo '<p>$_GET params:</p>';
  var_dump($_GET);
  echo '<br/>';
  echo $_GET['name'];
  echo '<br/><br/>';
?>

<hr style='color:beige'/>

<!-- 
  GET request in url
  using _SERVER['PHP_SELF'] for current location 
  anything after is the query params passed to the page
-->
<div>
  <h3>GET in links</h3>
  <a href="<?php echo $_SERVER['PHP_SELF']; ?>?name=John&age=30">Click Me For GET ?name=John&age=30</a>
</div>

<hr style='color:beige'/>

<!-- GET request in forms -->
<h3>GET in forms</h3>
<form 
  action="<?php echo $_SERVER['PHP_SELF']; ?>" 
  method="get"
>
  <div>
    <label for="name">Name: </label>
    <input type="text" name="name" placeholder="Name">
  </div>
  <div>
    <label for="age">Age: </label>
    <input type="number" name="age" placeholder="Age">
  </div>
  <input type="submit" value="Submit GET form">
</form>

<hr style='color:black'/>

<!-- POST request in forms -->
<h3>POST in forms</h3>
<form 
  action="<?php echo $_SERVER['PHP_SELF']; ?>" 
  method="post"
>
  <div>
    <label for="name">Name: </label>
    <input type="text" name="name" placeholder="Name">
  </div>
  <div>
    <label for="age">Age: </label>
    <input type="number" name="age" placeholder="Age">
  </div>
  <input type="submit" value="Submit POST form">
</form>

<?php
  echo '<p>$_POST params:</p>';
  if (isset($_POST['submit'])) {
    // echo '<h3>' . $GET['username'] . '</h3>';
    var_dump($_POST);
    echo '<br/>';
    echo '<h3>' . $_POST['name'] . '</h3>';
  }
  var_dump($_POST);
  echo '<br/>';
  echo $_POST['name'];
  echo '<br/>';
  echo $_POST['age'];
  echo '<br/><br/>';
?>
