<?php

if(isset($_GET['a']))
{
    if(file_exists(('admin/'.$_GET['a'].".php")))
    {
        include('admin/'.$_GET['a'].".php");
    }
    else
    {
        print '<h4>Warning ! You are trying to violate my system. Otherwise get permission from Yiga Frank</h4>';
        var_dump($_SERVER);
    }
}
else
{
    include('admin/student_add.php');
}


?>