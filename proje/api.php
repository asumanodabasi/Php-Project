<?php
    include('baglanti.php');

  
    if(isset( $_POST['input']))
     $input=$_POST['input'];
    $control = "SELECT * FROM ocakayiulasim WHERE line LIKE '{$input}%'or transition_date like '{$input}%'or road_type like '{$input}%' or transfer_type like '{$input}%'";
    $result=mysqli_query($baglan,$control);

    if(mysqli_num_rows($result)>0)
    { ?>
        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Transition Date</th>
                    <th>Transition Hour</th>
                    <th>Transport Type Id</th>
                    <th>Road Type</th>
                    <th>Line</th>
                    <th>Transfer Type</th>
                    <th>Number Of Passage</th>
                    <th>Number Of Passenger</th>
    </tr>
    </thead>

        <tbody>
        <?php
        while ($row=mysqli_fetch_assoc($result)) {
            $id=$row['id'];
            $date=$row['transition_date'];
            $hour=$row['transition_hour'];
            $typeId=$row['transport_type_id'];
            $type=$row['road_type'];
            $line=$row['line'];
            $transfer=$row['transfer_type'];
            $passage=$row['number_of_passage'];
            $passenger=$row['number_of_passenger'];

?>
            <tr>
                <td><?php echo $id; ?> </td>
                <td><?php echo $date; ?> </td>
                <td><?php echo $hour; ?> </td>
                <td><?php echo $typeId; ?> </td>
                <td><?php echo $type; ?> </td>
                <td><?php echo $line; ?> </td>
                <td><?php echo $transfer; ?> </td>
                <td><?php echo $passage; ?> </td>
                <td><?php echo $passenger; ?> </td>

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
        echo 'Bulunamadı!!';
    }
    ?>