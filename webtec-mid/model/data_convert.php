 <?php

$con= mysqli_connect('localhost','root','','shopmanager');

$filename = "data.json";


$data = file_get_contents($filename);


$array = json_decode($data, true);

echo"<pre>";
print_r($array);
echo "</pre>";

// for ($data || $u -> $z){
//     for($z || $n ->$line){
//         //get the tweet details
        
//         $firstname = $line['firstname'];
//         $lastname = $line['lastname'];
//         $Age = $line['Age'];
//         $Address= $line['data']['Address'];
//         $Phone = $line['data']['Phone'];
//         $Email = $line['data']['Email'];
//         $username = $line['data']['username'];
//         $Password = $line['data']['Password'];
//         $Licensenumber= $line['data']['Licensenumber'];
//         $Issuedate = $line['data']['Issuedate'];



//         $sqlu = "INSERT INTO data (firstname, lastname, Age, Address, Phone, Email,username, Password, Licensenumber,Issuedate)
//             VALUES ('".["firstname"]."', '".["lastname"]."', '".["Age"]."','".["Address"]."', '".["Phone"]."', '".["Email"]."','".["username"]."', '".["Password"]."', '".["Licensenumber"]."','".["Issuedate"]."')";
//        if(!mysqli_query($con, $sqlu))
//        {
//            die('Error : ' . mysql_error());
//        }
//     }
// }
// ?>