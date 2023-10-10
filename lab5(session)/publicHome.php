<?php 
    session_start();
    if(isset($_SESSION['logIn'])){
        header('location: registration.html');
    }

?>

<html lang="en">
<head>
    
    <title>Document</title>
</head>
<body>
            <table border=1 align="center">
               
                <tr >
                <th width=600px height=80px>
                           <h2 align="left"><br>&nbsp;X Company</h2>
                           <h5 align="right">
                           <a href="publicHome.php">Home</a>|
                           <a href="registration.php">Register</a>|
                           <a href="login.php">Login</a>
                           </h5>
                       
                    </th>
                  

                   
                </tr>
                   
                <tr>
                    <td height=150px>
                        <h3>&nbsp;Welcome to xCompany</h3>
                    </td>
                
                </tr>
                <tr >
                    <td height=50px align="center">
                        Coopyright ©2017
                    </td>
                
                </tr>
        
            </table>
     
</body>
</html>