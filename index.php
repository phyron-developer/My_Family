<?php
    $cn = new mysqli("localhost","root","","loginform"); 
    // $host = "localhost";
    // $username = "root";
    // $db = "grud_database";
    // $password = "";

    // $cn = new mysqli($host,$username,$password,$db);

    if($cn ->connect_error){
        die("Error connection to database " .$cn->connect_error);
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
main{
    width: 80%;
    margin: 10% auto;
}
.user-login{
    padding: 30px;
    width: 100%;
}
.user-login table{
    width: 100%;
}
.user-login table th{
    padding: 14px;
    border: 2px solid var(--color);
    text-align: center;
}
.user-login tr td{
    padding: 12px 0px;
    border: 2px solid var(--color);
    text-align: center;
}
#btn-add{
    padding: 10px 35px;
    font-size: 20px;
    margin-bottom: 20px;
    background-color: var(--color);
}
#edit, #delete{
    padding: 10px 15px;
    background-color: var(--color);
}
    </style>
</head>
<body>
    <main>
        <div class="user-login">
            <h2>Add Employee</h2><br><br>
            <button id="btn-add"><a href="./add.php">ADD</a></button>
            <table>
                <tr>
                    <th width="100">ID</th>
                    <th width="300">NAME</th>
                    <th width="100">AGE</th>
                    <th width="350">POSITION</th>
                    <th>ACTION</th>
                </tr>
                <?php
                    $sql = "SELECT * FROM grud_database ";
                    $res = $cn->query($sql);

                    if(!$res){
                        die("Error get data!");
                    }
                    while($row = $res -> fetch_assoc()){
                        echo "
                            <tr>
                                <td>$row[id]</td>
                                <td>$row[name]</td>
                                <td>$row[age]</td>
                                <td>$row[position]</td>
                                <td>
                                    <button id=edit><a href='./edit.php?id=$row[id]'>Edit</a></button>
                                    <button id='delete'><a href='./delete.php?id=$row[id]'>Delete</a></button>
                                </td>
                            </tr>
                        ";
                        ?>

                        <?php
                    }
                ?>

            </table>
        </div>
    </main>
</body>
</html>