<$php

  $connection = mysql_connect("tutorial", "root", "root"); // Establishing Connection with Server
$db = mysql_select_db("customers", $connection); // Selecting Database from Server
  if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL
      $first_name = $_POST['first_name'];
      $last_name = $_POST['last_name'];
      if($name !=''||$email !=''){
//Insert Query of SQL
    $query = mysql_query("insert into customers(first_name, last_name) values ('$first_name', '$last_name')");
    echo "<br/><br/><span>Data Inserted successfully...!!</span>";
  }
    else{
        echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
        }
  }
  mysql_close($connection); // Closing Connection with Server
?>
<form method="POST" action="">

  <div>

		<p>First Name:</p>

		<input class="input" type="text" name="First Name" value="$first_name" /><br />

		<p>Last Name:</p>

		<input class="input" type="text" name="Last Name" value="$last_name" /><br />

		<p><input type="submit" /></p>
  </form>

  </div>

</form>
