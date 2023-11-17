<!DOCTYPE html> 
<html lang="en" dir="ltr"> 
  <head> 
    <meta charset="utf-8"> 
    <title></title> 
  </head> 
  <body> 
    <form>
    <center> 
    <table> 
            <tr> 
                <td>Nama MTK</td>
                <td>:</td> 
                <td> 
                    <input type="text" name="nama" id="nama" value="<?php echo $nama; ?>"> 
                </td> 
                <td><?php echo form_error('nama'); ?></td>
            </tr> 
            <tr> 
                <td>SKS</td> 
                <td>:</td> 
                <td> 
                    <select nama="sks" id="sks">
                        <option value="2" <?php if($sks==2) echo 'selected';?> >2</option>
                        <option value="2" <?php if($sks==3) echo 'selected';?> >3</option>
                        <option value="2" <?php if($sks==4) echo 'selected';?> >4</option>
                    </select>
                </td>
                <td><?php echo form_error('sks'); ?></td>
            </tr> 
            <tr> 
                <td colspan="3" align="center">
                    <input type="submit" value="Update">
                    <input type="button" value="Kembali" onclick="window.history.go(-1)"> 
                </td> 
            </tr> 
        </table> 
    </form>
    </center> 
  </body> 
</html> 
