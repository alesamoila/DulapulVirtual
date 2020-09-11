<?php 

&i=3;
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
    i++;
    $sql = "INSERT INTO `item`(`id_item`, `poza`, `tip_haina`, `culoare`, `temperatura`, `descriere`, `id_bagaj`, `id_proprietar`) VALUES (&i,?,?,?,?,?,,1)";
    $stmt = $con->prepare($sql);
    $stmt->bind_param("sssssss", $_POST[' '], $_POST['tip_haina'], $_POST[' culoare'], $_POST['temperatura '], $_POST['descriere ']);
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

