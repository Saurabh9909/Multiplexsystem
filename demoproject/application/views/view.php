<center>
    <form method="POST" action="<?php echo site_url() ?>/emplcontroller/insert">
        <table  border="2" cellpadding="10" cellspacing="10">
            <tr>
                <th colspan="2">Employee</th>
            </tr>
            <tr>
                <th>Name</th>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <th>Email</th>
                <td><input type="text" name="email"></td>
            </tr>
            <tr>
                <th>Password</th>
                <td><input type="text" name="pwd"></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="Submit"></td>
            </tr>
            <tr>
                <td colspan="2" align="center" ><a href="<?php echo site_url() ?>/emplcontroller/empldata">View Record</a></td>
            </tr>
        </table>
    </form>
</center>