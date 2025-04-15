
<!-- 
 
// require_once 'vendor/autoload.php';

// use App\DB;


// $db = DB::table('users');

// // var_dump($db);

// $objec2 = $db->select();

// // var_dump($objec2);

// $result = $objec2->execute();


// var_dump($result);



// insert into users (name, email, phone, password, address) 
// values ('Mohamed', 'mohamed@gmail.com', '01007336489', '123456789', 'Cairo');

// $db = DB::table('users');

// var_dump($db);

// $db->insert(
//   [
//     'name'     => 'Mohamed',
//     'email'    => 'mohamed@gmail.com',
//     'phone'    => '01007336489',
//     'password' => '123456789',
//     'address'  => 'Cairo'
//   ]
// );

// $obj = $db->insert(
// [
//     'name'     => 'Mohamed',
//     'email'    => 'mohamed@gmail.com',
//     'phone'    => '01007336489',
//     'password' => '123456789',
//     'address'  => 'Cairo'
//   ]
// );

// $obj = $db->select('id, name')->execute();



// var_dump($obj);

// $data = [
//       'name'     => 'Mohamed',
//       'email'    => 'mohamed@gmail.com',
//       'phone'    => '01007336489',
//       'password' => '123456789',
//       'address'  => 'Cairo'
// ];

// $keys = array_keys($data);

// $values = array_values($data);

// var_dump(implode(',', $values));
*/

-->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="form.php" method="post">
    <input type="text" name="name" placeholder="Name">
    <input type="email" name="email" placeholder="Email">
    <input type="password" name="password" placeholder="Password">
    <input type="submit" value="Submit">
  </form>
</body>
</html>



