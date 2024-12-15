<?php
    $cn = new mysqli("localhost","root","","loginform"); 

    // if($cn ->connect_error){
    //     die("Error connection to database " .$cn->connect_error);
    // }

    if($_SERVER['REQUEST_METHOD']=='POST'){
        $id = $_POST['id'];
        $name = $_POST['name'];
        $age = $_POST['age'];
        $position = $_POST['position'];

        // if($id == ''){
        //     echo "
        //         <script>
        //         alert('Please input id!');
        //         </script>
        //     ";
        // }

        $sql = "INSERT INTO grud_database VALUES($id,'$name',$age,'$position')";
        // $cn -> query($sql);
        $res = $cn -> query($sql);
        if(!$res){
            die("Error add data!");
        }

        header('location: ./index.php');
        exit;

    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css"> -->
    <title>Add Employee</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Bokor&family=Itim&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Bokor&family=Itim&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Protest+Revolution&display=swap');
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        li,a ,button,input{
            cursor: pointer;
            border: none;
            outline: none;
            text-decoration: none;
            list-style: none;
        }
        :root{
            --color:rgb(253, 177, 0);
        }
        body{
            background-color: black;
            color: #fff;
        }
        .contain{
            color: black;
            width: 35%;
            margin: 10% auto;
            background-color: #fff;
            padding: 40px;
            border-radius: 10px;
        }
        .contain input{
            border-radius: 8px;
            margin-bottom: 10px;
            width: 100%;
            padding: 15px 20px;
            background-color: rgba(0, 0, 0, 0.1);
        }
        #btn-add{
            width: 100%;
            background-color: var(--color);
            padding: 15px 20px ;
            margin-top: 20px;
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <div class="contain">
        <h2>Add Employee</h2><br>
        <form action="" method="post">
            <label for="">ID</label><br>
            <input type="text" placeholder="Enter id's employee..." name="id" id="id"><br>
            <label for="">NAME</label><br>
            <input type="text" placeholder="Enter name's employee..." name="name" id="name"><br>
            <label for="">AGE</label><br>
            <input type="text" placeholder="Enter age's employee..." name="age" id="age"><br>
            <label for="">POSITION</label><br>
            <input type="text" placeholder="Enter position's employee..." name="position" id="position"><br>
            <button id="btn-add" type="submit">Add</button>
        </form>
    </div>

</body>    
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script> -->
<script>
    // $(document).ready(function(){
    //     $('#btn-add').click(function(event){
    //         event.preventDefault();
    //         var eThis = $(this);
    //         var Parent =eThis.parents('form');
    //         var id =Parent.find('#id');
    //         var name =Parent.find('#name');
    //         var age =Parent.find('#age');
    //         var position =Parent.find('#position');

    //         if(id.val()==''){
    //             alert('Please input id!')
    //             id.focus();
    //             return;
    //         }else if(name.val()==''){
    //             alert('Please input name!')
    //             name.focus();
    //             return;
    //         }else if(age.val()==''){
    //             alert('Please input age!')
    //             age.focus();
    //             return;
    //         }
    //         else if(position.val()==''){
    //             alert('Please input position!');
    //             position.focus();
    //             return;
    //         }
    //         alert('Add successfully!');

    //         id.val('');
    //         id.focus();
    //         name.val('');
    //         age.val('');
    //         position.val('');
    //     })
    // })
</script>
</html>