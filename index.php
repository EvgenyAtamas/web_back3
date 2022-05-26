<?php
header('Content-Type: text/html; charset=UTF-8');

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
  if (!empty($_GET['save'])) {
    print('Спасибо, результаты сохранены.');
  }

  include('form.php');

  exit();
}

$errors = FALSE;
if (empty($_POST['name'])) {
  print('Заполните имя.<br/>');
  $errors = TRUE;
}
if (empty($_POST['email'])) {
  print('Заполните e-mail.<br/>');
  $errors = TRUE;
}
if (empty($_POST['bio'])) {
  print('Заполните биографию.<br/>');
  $errors = TRUE;
}
if (empty($_POST['superpower'])) {
    print('Выберите способность.<br/>');
    $errors = TRUE;
}
if (empty($_POST['check'])) {
    print('Поставьте галочку.<br/>');
    $errors = TRUE;
}


if ($errors) {
  exit();
}


$user = 'u20301';
$pass = '1344524';
$db = new PDO('mysql:host=localhost;dbname=u20301', $user, $pass, array(PDO::ATTR_PERSISTENT => true));


try {
  $str = implode(',',$_POST['superpower']);
  
  $stmt = $db->prepare("INSERT INTO appl SET name = ?, email = ?, data = ?, limb = ?, bio = ?");
  $stmt -> execute([$_POST['name'],$_POST['email'],$_POST['data'],$_POST['limb'],$_POST['bio']]);

  $stmt = $db->prepare("INSERT INTO abilities SET abilities = ?");
  $stmt -> execute([$str]);
  
}
catch(PDOException $e){
  print('Error : ' . $e->getMessage());
  exit();
}

header('Location: ?save=1');


