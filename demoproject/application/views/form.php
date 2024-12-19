<center>
    <form method="POST"  action="<?php  echo site_url()?>/homecontroller/insert">
        <table border="1"  cellpadding="10" cellspacing="10">
            <th colspan="2">ADD</th>
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
                <td><input type="submit"></td>
            </tr>
        </table>
        <a href="<?php echo site_url() ?>/homecontroller/studdata">VIEW RECORD</a>
    </form>
</center>