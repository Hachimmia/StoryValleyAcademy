<?php

//Import query class
require_once './classes/query.php';

//Inserting data into the database

//Creating a new instance of the class
$query = new Query();

//Using the class's method to insert an object
//Returns true if it's successful
//All of the classes functions require two parameters
//1, The query string
//2, An ARRAY of query parameters in chronological order
//If you don't need parameters, put an empty array. Otherwise it will crash
//As you can see in the values there are 4 questions marks
//In the parameters array each question marks got a pair
//It-s in chronological order [$name, $email, $hashedPw, $dob]
if ($query->insert("INSERT INTO users (name,email,password,dpb) VALUES (?,?,?,?)", [$name, $email, $hashedPw, $dob])) {
    //Success message
};

//Querying data from the database

//Once you created a Query object in a class, you don't have to
//Create it again

//Storing results in a variable, for future use
//This time passing hard coded values instead of variables
$result = $getFilmData->query("SELECT * FROM users WHERE id > ? AND users.name = ? ", [4, "John Doe"]);

//Or this is the scenario for no variables
//Just put an empty array
$result = $getFilmData->query("SELECT * FROM users ", []);

//Output data
//This loop is like a for loop
//But with less hassle
//$result, in this case, is the array 
//$user is the current item
//$result[i] in the case of for loop
foreach ($result as $user) {
    //Storing variables for output
    $id = $user['id'];
    $name = $user['name'];
    $dob = $user['dob'];

    //Output
    //If you don't use single quotes in echo
    //You can output variables without stupid string concat
    echo ("
        <div>
            <p>$id</p> 
            <p>$name</p> 
            <p>$dob</p> 
        </div>
    ");
}