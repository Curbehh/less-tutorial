<?php

    include_once('/lessphp/lessc.inc.php');

    $less = new lessc();

    $css = $less -> compileFile('less_compile_file.less');

?>

<!DOCTYPE html>

<html>

    <head>

        <title>

            Tweede Pagina

        </title>
        
         <!-- <link rel="stylesheet/less" type="text/css" href="style.less" /> -->
        
         <!-- <script src = "less.js-master/dist/less.js" >  </script> -->

    </head>
    
    <style>
    
        <?= $css; ?>
    
    </style>
    
    <body>
        
        <h3>
        
            PHP LESS
        
        </h3>

        <table id = "tbl1">
            
            <tr>
            
                <th> 1 </th>
                <th> 2 </th>
                <th> 3 </th>
                <th> 4 </th>
                <th> 5 </th>
                
            </tr>

            <tr>

                <td> Optie 1 </td>
                <td> Optie 2 </td>
                <td> Optie 3 </td>
                <td> Optie 4 </td>
                <td> Optie 5 </td>

            </tr>

            <tr>

                <td> Optie 1 </td>
                <td> Optie 2 </td>
                <td> Optie 3 </td>
                <td> Optie 4 </td>
                <td> Optie 5 </td>

            </tr>

            <tr>

                <td> Optie 1 </td>
                <td> Optie 2 </td>
                <td> Optie 3 </td>
                <td> Optie 4 </td>
                <td> Optie 5 </td>

            </tr>

            <tr>

                <td> Optie 1 </td>
                <td> Optie 2 </td>
                <td> Optie 3 </td>
                <td> Optie 4 </td>
                <td> Optie 5 </td>

            </tr>

            <tr>

                <td> Optie 1 </td>
                <td> Optie 2 </td>
                <td> Optie 3 </td>
                <td> Optie 4 </td>
                <td> Optie 5 </td>

            </tr>
            
        </table>
        
        <?php echo '<br>'; ?>
        
        <table id = "tbl2">
            
            <tr>
            
                <th> 1 </th>
                <th> 2 </th>
                <th> 3 </th>
                <th> 4 </th>
                <th> 5 </th>
                
            </tr>

            <tr>
                
                <td> Optie 1 </td>
                <td> Optie 2 </td>
                <td> Optie 3 </td>
                <td> Optie 4 </td>
                <td> Optie 5 </td>

            </tr>

            <tr>

                <td> Optie 1 </td>
                <td> Optie 2 </td>
                <td> Optie 3 </td>
                <td> Optie 4 </td>
                <td> Optie 5 </td>

            </tr>

            <tr>

                <td> Optie 1 </td>
                <td> Optie 2 </td>
                <td> Optie 3 </td>
                <td> Optie 4 </td>
                <td> Optie 5 </td>

            </tr>

            <tr>

                <td> Optie 1 </td>
                <td> Optie 2 </td>
                <td> Optie 3 </td>
                <td> Optie 4 </td>
                <td> Optie 5 </td>

            </tr>

            <tr>

                <td> Optie 1 </td>
                <td> Optie 2 </td>
                <td> Optie 3 </td>
                <td> Optie 4 </td>
                <td> Optie 5 </td>

            </tr>
            
        </table>
        
    </body>

</html>