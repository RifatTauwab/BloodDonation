<?php
if(isset($_POST['user_input'])&&!empty($_POST['user_input'])){
    $user_input_str=$_POST['user_input'];
    $find_str=$_POST['find'];
    $replace_str=$_POST['replace'];
    echo str_ireplace($find_str, $replace_str, $user_input_str);
}

?>
 <form action="new3.php" method="POST">
            <textarea name="user_input" rows="7" cols="20"></textarea>
            <br>
            find:<input type="text" name="find"><br>
            replace:<input type="text" name="replace"><br>
            <input type="submit" value="Submit">
        </form>