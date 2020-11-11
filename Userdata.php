<?php

$cnx = mysqli_connect('localhost','root');

if($cnx)
{
    echo "Connection successful";
}
else
{
    echo "No connection";
}

 mysqli_select_db($cnx ,'userinfodata');

   $user     = $_POST['user'];
   $email    = $_POST['email'];
   $phone    = $_POST['phone'];
   $comment  = $_POST['comments'];

   $query ="insert into userinfodata(user , email , phone , comment)values('$user','$email','$phone','$comment')";

   mysqli_query($cnx ,$ $query);

   header('location:index.php');

?>