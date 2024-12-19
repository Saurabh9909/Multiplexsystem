<center>
    <form method="POST"  action="<?php  echo site_url()?>/homecontroller/update">
        <table border="1"  cellpadding="10" cellspacing="10">
        <input type="hidden" name="id" value="<?php echo $edit->std_id ?>">
            <th colspan="2">UPDATE</th>
            <tr>
                <th>Name</th>
                <td><input type="text" name="name" value="<?php echo $edit->std_name?>"></td>
            </tr>
            <tr>
                <th>Email</th>
                <td><input type="text" name="email" value="<?php echo $edit->std_email?>"></td>
            </tr>
            <tr>
                <th>Password</th>
                <td><input type="text" name="pwd" value="<?php echo $edit->std_pwd?>"></td>
            </tr>
            <tr>
                <td><input type="submit" value="update"></td>
            </tr>
        </table>
    </form>
</center>