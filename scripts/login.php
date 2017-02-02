<?php
  $logins = array(
    array(
      'login' => 'alexandra',
      'password' => 'prout',
    ),
    array(
      'login' => 'ryhad',
      'password' => 'coucou',
    ),
    array(
      'login' => 'elise',
      'password' => 'toto',
    ),
    array(
      'login' => 'mohamed',
      'password' => 'ronchon',
    ),
  );
  $hashedPassword = crypt($logins->password);
  echo $hashedPassword;
?>
