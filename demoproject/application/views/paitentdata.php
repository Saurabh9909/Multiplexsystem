<center>
    <table border="2" cellpadding="10" cellspacing="10">
        <th>ID</th>
        <th>NAME</th>
        <th>EMAIL</th>
        <th>HOBBY</th>
        <th>DEPARTMENT</th>
        <th>GENDER</th>
        <th>PASSWORD</th>
        <th>DELETE</th>
        <th>UPDATE</th>

        <?php  
            foreach ($data as $row)
            {
            ?>
            <tr>
            <td><?php echo $row->p_id ?></td>
            <td><?php echo $row->p_name ?></td>
            <td><?php echo $row->p_email ?></td>
            <td><?php echo $row->p_hobby ?></td>
            <td><?php echo $row->p_department ?></td>
            <td><?php echo $row->p_gender ?></td>
            <td><?php echo $row->p_password ?></td>
            <td><a href="<?php echo site_url(); ?>/paitentcontroller/del/<?php echo $row->p_id  ?>">DELETE</a></td>
            <td><a href="<?php echo site_url(); ?>/paitentcontroller/edit/<?php echo $row->p_id ?>">UPDATE</a></td>
            </tr>
            <?php
            }
            ?>
    </table>
</center>