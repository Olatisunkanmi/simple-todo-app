  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  </head>

  <body>
    <div>
      <h3> Welcome</h3>
    </div>

    <!-- <div>
                <h4> Kindly Place your Order </h4>
                <form action="server.php" method="post">
                <label> Food Item :</label>        
                <input type="text" name="item">  </input>
                <br>
                <br>
                <label> Quantity :</label>
                <input type="number"> </input>
                <br>
                <br>
                <input type="submit" value="Order"> </input>
            </form>
            </div> -->
    <form action="server.php" method="post">
      <label>Username:</label> <br />
      <input type="text" name="user" /> <br />

      <label>Password:</label> <br />
      <input type="password" name="pass" /> <br />

      <input type="submit" value="Login" /> <br />
    </form>
  </body>

  </html>


  <?php
  // echo $_POST['username']. '<br>';
  // echo $_POST['password']. '<br>';
  // var_dump($_POST). '<br>';


  // $item = $_POST['item'];
  // $quantity =$_POST['quantity']
  // echo $item;

  //cache globalr $_POST data to local variable
  // $x = $_POST['item'];
  // $total = null;

  // $total = abs($x);
  // $total = round($x);
  // $total =floor($x);
  //   // $total =ceil($x);
  //   $total = sqrt($x);

  // echo $total;

  // $age = 100;

  // if($ag  >= 7){
  //   echo "Welcome";
  // }
  // elseif($age >= 18){
  //   echo "Welcome, You are above the required Age";
  // }

  //array
  $foods = array("apple", "orange", "banana", "coconut");
  // array_push($foods, "new fod");
  // array_pop($foods);
  // array_shift($foods);
  // $foods = array_reverse($foods);
  // echo count($foods) . '<br>';

  foreach ($foods as $cur) {
    echo $cur . '<br>';
  }

  //Associative arrays
  $capitals = array("USA" => "Washington DC", "Nigeria" => "Lagos", "Ghana" => "Accra");

  $capitals["USA"] = "Las Vegas";

  foreach ($capitals as $key => $value) {
    echo "{$key} = {$value} <br>";
  }

  //sanitize inputs.
  if (isset($_POST['user'])) {
    // $username = $_POST['user'];

    $username = filter_input(INPUT_POST, "user", FILTER_SANITIZE_SPECIAL_CHARS);

    $age = filter_input(INPUT_POST, "age", FILTER_SANITIZE_NUMBER_INT);

    "<br />";
    echo "Hello  {$username}";
  }


  ?>