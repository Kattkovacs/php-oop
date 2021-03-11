<?php

class User
{

  public $username = 'mokka';
  public $email = 'katt@katt.hu';

  public function addFriend()
  {

    return "$this->username added a new friend";
  }
}

$userOne = new User();
$userTwo = new User();

// echo 'this class is ' . get_class($userOne);

echo $userOne->username . '<br />';
echo $userOne->email . '<br />';
echo $userOne->addFriend() . '<br />';

// print_r(get_class_vars('User'));
// print_r(get_class_methods('User'));

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h4>User page</h4>
</body>

</html>