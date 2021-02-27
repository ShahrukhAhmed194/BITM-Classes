<?php
class Database{
    public function __construct()
    {
        $hostName = "localhost";
        $userName = "root";
        $password = "";
        $dbName = "ecommerce_app";
        $dbConnection = new mysqli($hostName,$userName,$password,$dbName);
//       if($dbConnection->connect_error){
//           echo $dbConnection->connect_error;
//       }
       //var_dump($dbConnection);
        //print_r($dbConnection);

        $sqlQuery = "SELECT * FROM products";
        $result = $dbConnection->query($sqlQuery);
        //print_r($result);//getting info according to obj array.

//        These three fetch function cannot be run together.
        $data = $result->fetch_assoc();
        $data2 = $result->fetch_array();
        //$data3 = $result->fetch_all();
        echo"only one data will be shown.";
        print_r($data);
        echo"All data will be shown in index array form.";
        print_r($data2);
//        echo"all data will be shown object form.";
//        print_r($data3);
        //we also have fetch_row,column, object
        //$result->fetch_all(MYSQLI_ASSOC);  shows all data in obj form
        echo phpinfo();
    }
}

new Database();