<?php


if($_GET['page']=='home')
{
    include 'pages/home.php';
}elseif ($_GET['page']=='about')
{
    include 'pages/about.php';
}
elseif ($_GET['page']=='contact')
{
    include 'pages/contact.php';
}


//ECHO $_GET['page'];
//echo 'Hello World';
