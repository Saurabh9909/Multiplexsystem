<center>
    <form method="POST" action="<?php echo site_url() ?>/paitentcontroller/insert">
        <table  border="2" cellpadding="10" cellspacing="10">
            <tr>
                <th colspan="2">Paitent</th>
            </tr>
            <tr>
                <th>Paitent Name</th>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <th>Paitent Email</th>
                <td><input type="text" name="email"></td>
            </tr>
            <tr>
                <th>Hobby</th>
                <td>
                    Reading<input type="checkbox" name="hobby[]" value="reading">
                    Playing<input type="checkbox" name="hobby[]" value="playing">
                </td>
            </tr>
            <tr>
                <th>Department</th>
                <td>
                    <select name="department">
                        <option value="dental">Dental</option>
                        <option value="ortho">Ortho</option>
                    </select>
                </td>
            </tr>
            <tr>
                <th>Gender</th>
                <td>
                    Male <input type="radio" name="gender" value="male">
                    Female <input type="radio" name="gender" value="female">
                </td>
            </tr>
            <tr>
                <th>Password</th>
                <td><input type="text" name="password"></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="Submit"></td>
            </tr>
            <tr>
                <td colspan="2" align="center" ><a href="<?php echo site_url() ?>/paitentcontroller/paitentdata">View Record</a></td>
            </tr>
        </table>
    </form>
</center>