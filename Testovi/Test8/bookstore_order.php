<?php
$servername='localhost';
$username='root';
$password='';
$database='bookstore';

$konekcija = new mysqli($servername, $username, $password, $database);

if(!$konekcija)
{
    die('<p class="error">Batice, doslo je do greske, popravi kod</p>' . $konekcija->connect_error);
}

$firstname_error = $lastname_error = $address_error = $city_error = '<span class="error">*</span>';

if(!empty($_POST['submit']))
{
    $firstname = $konekcija->real_escape_string($_POST['firstname']);
    $lastname = $konekcija->real_escape_string($_POST['lastname']);
    $address = $konekcija->real_escape_string($_POST['address']);
    $city = $konekcija->real_escape_string($_POST['city']);
    $country = $_POST['country'];
    $deliveryoptions = $_POST['deliveryoptions'];
    $date = date("Y-m-d H:i:s");

    
    if(ctype_alpha($firstname)==false)
    {
        $firstname_error = '<span class="error">Firstname should be only string!</span>';
    }

    if(ctype_alpha($lastname)==false)
    {
        $lastname_error = '<span class="error">Lastname should be only string!</span>';
    }

    if(strlen($address)<2)
    {
        $address_error = '<span class="error">Address must be longer than 2 strings!</span>';
    }

    if(strlen($city)<2)
    {
        $city_error = '<span class="error">City must be longer than 2 strings!</span>';
    }

    if($firstname_error == '*' && $lastname_error == '*' && $address_error == '*' && $city_error =='*')
    {
        $sql = 
        ("INSERT INTO `orders` (`first_name`, `last_name`, `address`, `city`, `country`, `delivery_option`, `order_time`)
        VALUES('$firstname', '$lastname', '$address', '$city', '$country', '$deliveryoptions', '$date')");
        $result = $konekcija->query($sql);

        if($result)
        {
            echo "Thanks for ordering!";
        }
        else
        {
            echo "<p class='error'>Sorry, somewhere you got error!</p>" . $konekcija->error;
        }
    }
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Zarko Dimitrijevic</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>

    <body>
        <fieldset class="field_set">
            <h1>Order your book!</h1>
            <h4>Please complete this form to place your order. You will be redirected to PayPal upon submission.</h4>
            <form action="bookstore_order.php" method='POST'>
            
            <label for="">Name</label>
            <input type="text" name='firstname' placeholder="Firstname"><?php echo $firstname_error;?>
            &nbsp;
            <input type="text" name='lastname' placeholder = 'Lastname'><?php echo $lastname_error;?>
            
            <br><br>
            
            <label for="">Address</label>
            <input type="text" name="address" placeholder="address"><?php echo $address_error;?>
            <br><br>
            <input type="text" name='city' placeholder="city"><?php echo $city_error;?>
            &nbsp;
            <select name="country" id="">
                <option value="Serbia">Serbia</option>
                <option value="Montenegro">Montenegro</option>
                <option value="Bosnia">Bosnia</option>
                <option value="Macedonia">Macedonia</option>
            </select>
            
            <br><br>
            
            <label for="">Delivery Options</label>
            <br>
            <input type="radio" name="deliveryoptions" checked>Paperback
            <br>
            <input type="radio" name="deliveryoptions">Decorative paper
            <br>
            <input type="radio" name="deliveryoptions">Greeting card

            <br><br>
            <input type="submit" name="submit">
            
            </form>
        </fieldset>
    
        
    </body>
</html>