<center>
    <form method="POST" action="<?php echo site_url() ?>/emplcontroller/update">
        <table  border="2" cellpadding="10" cellspacing="10">
        <input type="hidden" name="id" value="<?php echo $edit->empl_id ?>">
            <tr>
                <th colspan="2">Update Employee</th>
            </tr>
            <tr>
                <th>Name</th>
                <td><input type="text" name="name" value="<?php echo $edit->empl_name ?>"> </td>
            </tr>
            <tr>
                <th>Email</th>
                <td><input type="text" name="email"  value="<?php echo $edit->empl_email ?>" ></td>
            </tr>
            <tr>
                <th>Password</th>
                <td><input type="text" name="pwd" value="<?php echo $edit->empl_pwd ?>" ></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="Submit" value="update"></td>
            </tr>
        </table>
    </form>
</center>