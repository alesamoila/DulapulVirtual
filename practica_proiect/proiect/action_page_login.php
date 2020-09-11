<?php 

&uname = filter_input(input_post, 'uname');
&psw = filter_input(input_post, 'pasw');

if(!empty(uname))
{
	if(!empty(psw))
	{

    $host = "localhost";
    $db_name = "dulapulvirtual";
    $username = "root";
    $password = "";

       try{
    $con = new PDO("mysql:host={$host};dbname={$db_name}", $username, $password);
}
catch(PDOException $exception){
	echo "Connection error: " . $exception->getMessage();
}
    
    $sql = "SELECT * FROM `utilizator` WHERE username = uname and password = psw;"
     $stmt = $con->prepare($sql);
    $stmt->execute();
    &con -> close();
	}
	else 
	{
		die();
	}

}
else
{

 die();

}


