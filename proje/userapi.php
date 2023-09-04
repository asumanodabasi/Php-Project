<?php
    include('baglanti.php');

  
    if(isset( $_POST['input']))
     $input=$_POST['input'];
    $control = "SELECT * FROM users WHERE email LIKE '{$input}%'or id like '{$input}%'";
    $result=mysqli_query($baglan,$control);


    if(mysqli_num_rows($result)>0)
    { ?>
        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Message</th>
                    
    </tr>
    </thead>

        <tbody>
        <?php
        while ($row=mysqli_fetch_assoc($result)) {
            $id=$row['id'];
            $name=$row['name'];
            $email=$row['email'];
            $pass=$row['password'];
            $message=$row['message'];
            

?>
            <tr>
                <td><?php echo $id; ?> </td>
                <td><?php echo $name; ?> </td>
                <td><?php echo $email; ?> </td>
                <td><?php echo $pass; ?> </td>
                <td><?php echo $message; ?> </td>

        </tr>
<?php
        }   
?>

</tbody>
</table>
<?php
}
    else
    {
        echo 'Böyle bir üye yok';
    }
    ?>