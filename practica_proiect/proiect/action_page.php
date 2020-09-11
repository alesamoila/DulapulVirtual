<?php 

&nume = filter_input(input_post, 'nume');
&prenume = filter_input(input_post, 'prenume');
&varsta = filter_input(input_post, 'varsta');

&username = filter_input(input_post, 'username');
&psw = filter_input(input_post, 'pasw');
&i= 3;
if(!empty(nume))
{
	if(!empty(prenume))
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
    &i++;
    $sql = "INSERT INTO `utilizator`(`id`, `nume`, `prenume`, `varsta`, `username`, `password`) VALUES (&i,&nume,&prenume,&varsta,&username,&psw);"
    $stmt = $con->prepare($sql);
    $stmt->execute();

    &con -> close();
	}
	else 
	{
		echo "Prenumele trebuie completat!";
	}

}
else
{

 echo "Numele trebuie completat!";
 die();

}
   

?>