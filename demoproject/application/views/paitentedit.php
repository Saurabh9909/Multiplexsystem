<center>
    <form method="POST" action="<?php echo site_url() ?>/paitentcontroller/update">
        <table  border="2" cellpadding="10" cellspacing="10">
            <input type="hidden" name="id" value="<?php echo $edit->p_id ?>">
            <tr>
                <th colspan="2">Paitent</th>
            </tr>
            <tr>
                <th>Paitent Name</th>
                <td><input type="text" name="name" value="<?php echo $edit->p_name ?>" ></td>
            </tr>
            <tr>
                <th>Paitent Email</th>
                <td><input type="text" name="email" value="<?php echo $edit->p_email ?>" ></td>
            </tr>
            <tr>
                <th>Hobby</th>
                <td>
                    <?php
                       if($edit->p_hobby=="reading")
                       {
                    ?>
                        Reading<input type="checkbox" name="hobby[]" value="reading" checked>
                        Playing<input type="checkbox" name="hobby[]" value="playing" >
                    <?php   
                        }
                       else
                       {
                    ?>
                        Reading<input type="checkbox" name="hobby[]" value="reading" >
                        Playing<input type="checkbox" name="hobby[]" value="playing" checked >
                    <?php
                        }
                    ?>
                   
                </td>
            </tr>
            <tr>
                <th>Department</th>
                <td>
                    <select name="department" value="<?php echo $edit->p_department ?>" >
                        <option value="dental">Dental</option>
                        <option value="ortho">Ortho</option>
                    </select>
                </td>
            </tr>
            <tr>
                <th>Gender</th>
                <td>
                    <?php 
                        if($edit->p_gender == "male")
                        {
                    ?>
                            Male <input type="radio" name="gender" value="male"  checked>
                            Female <input type="radio" name="gender" value="female">
                    <?php
                        }
                        else
                        {
                    ?>
                            Male <input type="radio" name="gender" value="male">
                            Female <input type="radio" name="gender" value="female" checked>
                    <?php
                        }
                    ?>
                    
                    
                </td>
            </tr>
            <tr>
                <th>Password</th>
                <td><input type="text" name="password" value="<?php echo $edit->p_password ?>"></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="Submit"></td>
            </tr>
        </table>
    </form>
</center>