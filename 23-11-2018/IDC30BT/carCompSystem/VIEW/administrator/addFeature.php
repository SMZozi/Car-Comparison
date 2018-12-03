
        
        
             <?php
             require 'public/headerStyle.php';
             echo '<div class="mContent" align ="center"> <font size ="6"> ADD THE FEATURE</font>';
            echo '<form action="" method="GET">'; 
            echo '<table align=center>'
            . '<tr> <td> <label>choose the vehicle</label>';
            echo '<select name="vehicleType">';
             foreach ($allVehicle as $vehicles)
             {
                echo "<option value=".$vehicles->vehReg.">".$vehicles->vehName."</option>";
             }
             
             echo '</select><br>';
             echo '</td> </tr>'
             .'<tr> <td> <label>choose the feature</label>';
             echo '<select name="featureType">';
              foreach ($allFeatures as $features)
             {
                echo '<option value='.$features->fId.'>'.$features->featName.'</option>';
             }
             ?>
            </select>
            </td> </tr>
            
            <input type="hidden" name="controller"value="admin" required>
            <input type="hidden" name="action"value="addFeature" required>
            <tr>
                <td>
                    <input type="submit" name="btnSubmit"value="ADD" required>
                </td>
            </tr>
            
            
        </form>
        
   
    
</body> 
    
    
</html>

