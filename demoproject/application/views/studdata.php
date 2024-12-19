<center>
<a href="<?php echo site_url() ?>/homecontroller">Home Page</a>

    <table border="1" cellpadding="10" cellspacing="5">
        <th>ID</th>
        <th>NAME</th>
        <th>EMAIL</th>
        <th>PASSWORD</th>
        <th>DELETE</th>
        <th>EDIT</th>

        <?php   
        foreach ($data as $row)
        {
        ?>
        <tr>
            <td><?php  echo $row->std_id ?></td>
            <td><?php  echo $row->std_name ?></td>
            <td><?php  echo $row->std_email ?></td>
            <td><?php  echo $row->std_pwd ?></td>
            <td><a href="<?php echo site_url(); ?>/homecontroller/del/<?php  echo $row->std_id ?>">DELETE</a></td>
            <td><a href="<?php echo site_url(); ?>/homecontroller/edit/<?php  echo $row->std_id ?>">EDIT</a></td>

        </tr>
        <?php  
        }
        ?>
    </table>
    
</center>