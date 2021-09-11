<? include('dbcontroller.php')  ?>
<? 

//Create an instance of the DBController class
$db_handler = new DBController();


// sql to create table
$sql = "CREATE TABLE MyGuests (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";

//Run Query with DBController through variable $db_handler
$result = $db_handler->runQuery($sql);


//dump result, see in "View page source" for more detail
echo $result;


?>