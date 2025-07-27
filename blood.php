<?php 
    include 'header.php';

    $result = mysqli_query($db,"SELECT * FROM user");
?>


      
       

    <div class="row">
        <div class="col-md-8">
            <div class="alumni_list_table">
                <h2 class="text-center">Blood List</h2>

                <?php
                    if (mysqli_num_rows($result) > 0) {
                ?>

                <table>
                    <tr>
                        <th>S.L</th>
                        <th>Name</th>
                        <th>Blood Group</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Department</th>
                        <th>Date</th> 
                    </tr>

                    <?php
                        $i=0;
                        while($row = mysqli_fetch_array($result)) {
                    ?>
                        <tr>
                            <td><?php echo $i+1; ?></td>
                            <td><?php echo $row["name"]; ?></td>
                            <td><?php echo $row["blood"]; ?></td>
                            <td><?php echo $row["phone"]; ?></td>  
                            <td><?php echo $row["email"]; ?></td>  
                            <td>CSE</td>
                            <td><?php echo $row["create_at"]; ?></td>  
                        </tr>
                    <?php
                        $i++;
                        }
                    ?> 
                </table>


                <?php }  
                    else {
                        echo "No result found";
                    }
                ?> 

            </div>
        </div>

        <div class="col-md-4">
            <?php include 'messages.php';?> 
        </div>
    </div>
 
   
 
    <style>
        .alumni_list_table {
            margin-top: 1.5rem;
        }
        
        table {
            width: 100%;
            text-align: center;
        }

        table tr {
            line-height: 2;
        }

        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
<?php include 'footer.php';?>