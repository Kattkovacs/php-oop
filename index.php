<?php

class User
{

  public $username;
  protected $email;
  public $role = 'member';

  public function __construct($username, $email)
  {
    $this->username = $username;
    $this->email = $email;
  }

  public function __destruct()
  {
    echo "the user $this->username was removed <br>";
  }

  public function __clone()
  {
    $this->username = $this->username . '(cloned)<br>';
  }

  public function addFriend()
  {
    return "$this->username added a new friend";
  }

  public function getEmail()
  {
    return $this->email;
  }

  public function setEmail($email)
  {
    if (strpos($email, '@') > -1) {
      $this->email = $email;
    }
  }

  public function message()
  {
    return "$this->email sent a new message";
  }
}

class AdminUser extends User
{

  public $level;
  public $role = 'admin';

  public function __construct($username, $email, $level)
  {
    $this->level = $level;
    parent::__construct($username, $email);
  }

  public function message()
  {
    return "$this->email, an admin, sent a new message";
  }
}

$userOne = new User('mokkacuki', 'mokkacuki@katt.hu');
$userTwo = new User('mokkasin', 'mokkasin@katt.hu');
$userThree = new AdminUser('mokka', 'mokka@katt.hu', 5);
$userFour = clone $userOne;

echo $userFour->username;

// echo 'this class is ' . get_class($userOne);

echo $userOne->username . '<br />';
echo $userThree->username . '<br />';
echo $userOne->getEmail() . '<br />';
echo $userThree->getEmail() . '<br />';
$userOne->setEmail('new@katt.hu') . '<br />';
echo $userOne->getEmail() . '<br />';
echo $userOne->addFriend() . '<br />';
echo $userOne->role . '<br />';
echo $userOne->message() . '<br />';
echo $userThree->message() . '<br />';
echo $userTwo->addFriend() . '<br />';

// unset($userOne);

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