<center>
    <form action="<?php echo site_url() ?>/emplcontroller/search" method="POST">
        <tr>
           Search :  <input type="search" name="search"> 
                    <input type="submit" value="search">
        </tr>
    </form>
    <table border="2" cellspacing="10" cellpadding="10">
        
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
            <td><?php echo $row->empl_id ?></td>
            <td><?php echo $row->empl_name ?></td>
            <td><?php echo $row->empl_email ?></td>
            <td><?php echo $row->empl_pwd ?></td>
            <td><a href="<?php echo site_url(); ?>/emplcontroller/delempl/<?php echo $row->empl_id ?>">DELETE</a></td>
            <td><a href="<?php echo site_url(); ?>/emplcontroller/edit/<?php echo $row->empl_id ?>">UPDATE</a></td>
        </tr>              
    <?php
        }
    ?>
    </table>
</center>