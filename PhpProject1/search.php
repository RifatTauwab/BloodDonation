<html>
 
    <body>
       <form action="search.php" method="POST"> 
  
        blood group : 
        <select name="blood">
           <option><?if(isset($_POST['blood']))echo $_POST['blood']?></option>      
  <option value="A+">A+</option>
  <option value="A-">A-</option>
  <option value="B+">B+</option>
  <option value="B-">B-</option>
  <option value="O+">O+</option>
  <option value="O-">O-</option>
  <option value="AB+">AB+</option>
  <option value="AB-">AB-</option>
</select><br><br>
  
     Division :  <select name="div" onchange="this.form.submit()">
           <option><?if(isset($_POST['div']))echo $_POST['div'];?></option>      
  <option value="BARISAL">BARISAL</option>
  <option value="CHITTAGONG">CHITTAGONG</option>
  <option value="DHAKA">DHAKA</option>
  <option value="KHULNA">KHULNA</option>
  <option value="RAJSHAHI">RAJSHAHI</option>
  <option value="RANGPUR">RANGPUR</option>
  <option value="SYLHET">SYLHET</option>
</select>   
   
  
     District : <select name="dis" style="width: 110px" onchange="this.form.submit()">
        <option><?if(isset($_POST['dis']))echo $_POST['dis'];?></option>   
<?php
    if(isset($_POST['div'])){
    $div=$_POST['div'];
    include 'db_connection.php';
    $sql = "SELECT DISTINCT district from donorlocation where division='$div'";
    if($query_run=  mysqli_query($con,$sql)){
      while($query_row=  mysqli_fetch_assoc($query_run)){
          $district=$query_row['district'];
    ?>
    <option value="<?echo $district?>"><?echo $district?></option>
    <?
    }
    }
    }
    ?>
?>
    </select>   
         
      Thana : <select name="thana" style="width: 110px" onchange="this.form.submit()">
        <option><?if(isset($_POST['thana']))echo $_POST['thana'];?></option>   
<?php
    if(isset($_POST['dis'])){
    $dis=$_POST['dis'];
    include 'db_connection.php';
    $sql = "SELECT DISTINCT thana from donorlocation where district='$dis'";
    if($query_run=  mysqli_query($con,$sql)){
      while($query_row=  mysqli_fetch_assoc($query_run)){
          $thana=$query_row['thana'];
    ?>
    <option value="<?echo $thana?>"><?echo $thana?></option>
    <?
    }
    }
    
    }
    ?>
    
?>
<?php
if(isset($_POST['thana'])){
    $name=$_POST['name'];
     $age=$_POST['age'];
     $blood=$_POST['blood'];
      $contact=$_POST['ext'].$_POST['mobile'];
       $division=$_POST['div'];
       $divdistrict=$_POST['dis'];
       $disthana=$_POST['thana'];
}
?>
    </select>   
       </form>
        <form action="search.php" method="POST">
      <input type="submit" name="submit" value="submit">
      
      <input type='hidden' name='blood' value='<?php echo $blood ?>'>
      <input type='hidden' name='division' value='<?php echo $division ?>'>
      <input type='hidden' name='divdistrict' value='<?php echo $divdistrict ?>'>
      <input type='hidden' name='disthana' value='<?php echo $disthana ?>'>
 </form>
   
        <?php
       if(isset($_POST['submit'])){
       //     $name=$_POST['name'];
         //   $age=$_POST['age'];
       //     $blood=$_POST['blood'];
       //     $contact=$_POST['ext']+$_POST['mobile'];
         //   $division=$_POST[$div];
         //   $divdistrict=$_POST[$dis];
       //     $disthana=$_POST[$thana];
 /*   $phone = $_POST['phone'];
    $description = $_POST['description'];
    //$image_url = "upload\\".$image;
     include 'db_connection.php';
  $sql="INSERT INTO missing (id, name, age, phone, image , description)
VALUES
('$id','$name',$age,'$phone','$image','$description')";
mysqli_query($con,$sql);*/
         echo 'your searching keywords are <br>';   
            echo $_POST['blood'].'<br>';
            echo $_POST['division'].'<br>';
            echo $_POST['divdistrict'].'<br>';
            echo $_POST['disthana'].'<br>';
            
           //$donor_id = substr(number_format(time() * rand(),0,'',''),0,10);
         /*   include 'db_connection.php';
            $sql="INSERT INTO donorinfo (id, name, age, blood, contact , division, district, thana)
VALUES
('$donor_id','$_POST[name]',$_POST[age],'$_POST[blood]','$_POST[contact]','$_POST[division]','$_POST[divdistrict]','$_POST[disthana]')";
mysqli_query($con,$sql);*/
       }
        ?>
    </body>
</html>
