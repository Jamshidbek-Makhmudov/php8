<?php
declare(strict_types=1);
namespace App\Classes;
class Home
{
    public function index():string

    {
        setcookie(
          'userName', //name of cookie
          'James',    //value of cookie bunda keyingi larni [] arrayni ichiga yozsa hma boladi
          time()+24*60*60 //when expires
         # '/',      //path cokkie will be valid
         # '',  // doiamn availabe cookie
         # false, //secure parametr
          #false //httply only cant not be access by clientside
        );


      //  $_SESSION['count']=($_SESSION['count'] ?? 0)+1;
       // return View::make('index',$_GET)->render();


        //file uploads
        return <<<FORM
<form method="post"
 enctype="multipart/form-data" 
 action="/upload"> 
 <input name="receipt" type="file">
 <input name="myimage" type="file">
 <button type="submit">upload</button>
 </form>>
FORM;
    }
    public function upload()
    {
        echo "<pre>";
        var_dump($_FILES);

        $filePath=STORAGE_PATH . '/' . $_FILES['receipt']['name'];

        move_uploaded_file($_FILES['receipt']['tmp_name'],$filePath);
        echo "<pre>";
        var_dump(pathinfo($filePath));
        echo "<pre>";



    }

}