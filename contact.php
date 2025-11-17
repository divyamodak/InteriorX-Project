
    <center>
       
    <?php


$conn = mysqli_connect("localhost", "root", "", "interiorx");

// Check connection
if($conn === false){
    die("ERROR: Could not connect. "
        . mysqli_connect_error());
}

// Taking all 5 values from the form data(input)
$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$phone = $_REQUEST['phone'];
$service = mysqli_real_escape_string($conn, $_POST['services']); // Access the correct key 'services'
$message = $_REQUEST['message'];

// We are going to insert the data into our sampleDB table
$sql = "INSERT INTO entries VALUES ('$name',
    '$email','$phone','$service','$message', 'CURRENT_TIMESTAMP')";

// Check if the query is successful
if(mysqli_query($conn, $sql)){
    // header("Location: index.php"); // Redirect to success page
    echo "Message Sent Sucessfully ✌" ;

      exit(); // Stop further script execution
} else{
    echo "ERROR: Hush! Sorry $sql. "
        . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);
?>


    </center>
