<?php
    include('baglanti.php');

  
    if(isset( $_POST['input']))
     $input=$_POST['input'];
    $control = "SELECT * FROM employee WHERE email LIKE '{$input}%'or id like '{$input}%'";
    $result=mysqli_query($baglan,$control);


    if(mysqli_num_rows($result)>0)
    { ?>
        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Email</th>
                    <th>Password</th>
                    
    </tr>
    </thead>

        <tbody>
        <?php
        while ($row=mysqli_fetch_assoc($result)) {
            $id=$row['id'];
            $email=$row['email'];
            $pass=$row['password'];
            

?>
            <tr>
                <td><?php echo $id; ?> </td>
                <td><?php echo $email; ?> </td>
                <td><?php echo $pass; ?> </td>
                

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