<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        echo '<br><input type="text" name="text">';
        include 'New2.php';
        if (isset($_POST['user_input'])&&!empty($_POST['user_input'])){
            $find=array('tauwab');
            $replace=array('shubho');
            echo '<br>';
            echo $user_input=$_POST['user_input'];
            $user_input_new=  str_ireplace($find, $replace, $user_input);
            echo '<br>';
            echo $user_input_new;
            
        }
        ?>
        <hr>
        <form action="index.php" method="POST">
            <textarea name="user_input" rows="7" cols="20"></textarea>
            
            <br>
            <input type="submit" value="Submit">
        </form>
         <form action="new3.php" method="POST">
            <br>
            <hr>to see another php file with find replace</hr><br/>
            <input type="submit" value="Submit">
        </form>
         <form action="time.php" method="POST">
            <br>
            <hr>to see time function</hr><br/>
            <input type="submit" value="Submit">
        </form>
        <form action="experiment.php" method="POST">
            <br>
            <hr>to see experiment php file</hr><br/>
            <input type="submit" value="Submit">
        </form>
        <form action="Header.php" method="POST">
            <br>
            <hr>to see header function</hr><br/>
            <input type="submit" value="Submit">
        </form>
        <form action="ip.php" method="POST">
            <br>
            <hr>to see Ip address</hr><br/>
            <input type="submit" value="Submit">
        </form>
         <form action="upload.php" method="POST">
            <br>
            <hr>to see upload method</hr><br/>
            <input type="submit" value="Submit">
        </form>
         <form action="message.php" method="POST">
            <br>
            <hr>to send message</hr><br/>
            <input type="submit" value="Submit">
        </form>
        <form action="message2.php" method="POST">
            <br>
            <hr>to send message</hr><br/>
            <input type="submit" value="Submit">
        </form>
    </body>
</html>
