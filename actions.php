<?php

if(empty($_POST['email']) ) {
  exit('Ввведите значение в email');
       }
if(empty($_POST['login']) ) {
  exit('Ввведите значение в login');
       }

if(empty($_POST['password']) ) {
  exit('Ввведите значение в пароль');
       }
       if(strlen($_POST['password'])<8 ) {
        exit('Пароль слишком короткий ');
             }      

if(empty($_POST['password2']) ) {
  exit('Ввведите значение в подтверждение пароля');
}
if($_POST['passwrod']!==$_POST['passwrod2']){
    exit('Пароли не совпадают!');
       }
	   echo 'Здравствуйте, '.htmlspecialchars($_POST['login']).'.<br>';
	   echo 'Ваш аккаунт создан'.'.<br>';
?> 