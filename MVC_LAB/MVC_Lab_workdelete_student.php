<?php
 include_once 'header.php';
 include_once 'controllers/std_controller.php';
?>

<html>
    <body>
        <h5><?php echo $err_db;?></h5>
        <form action="" method="post">
        <table>
            <tr>
                <td>
                    Enter Student Name:
                    <input type="text" name="dname" placeholder="Student Name">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="dlt_std" value="Delete">
                </td>
            </tr>
        </table>
        </form>
    </body>
</html> 