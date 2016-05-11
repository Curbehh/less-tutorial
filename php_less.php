<?php

    if (!include_once('/lessphp/lessc.inc.php')){
        
        echo 'Include lessc.inc.php Unsuccesfull';
        
    }

    $less = new lessc();

    $css = $less -> compile('
    
        #tbl_default(@border, @margin, @color, @padding, @border_collapse: collapse) {
    
        margin: 15px auto;
        border-collapse: @border_collapse;
        font-family: Verdana;

        td {

            border: @border lighten(@color, 40%);
            margin: @margin;
            padding: @padding;
            font-weight: 800;

        }

        th {

            border: @border @color;
            margin: @margin;
            padding: @padding;
            background-color: darken(@color, 25%);
            color: lighten(@color, -75%);

        }

        tr {

            &:nth-child(2n) {

                background-color: lighten(@color, 40%);

            }

            &:nth-child(2n + 1) {

                background-color: lighten(@color, 30%);

            }

        }

    }


    #tbl1 {

        #tbl_default(3px solid, 2em, red, 1em, collapse);

    }

    #tbl2 {


        #tbl_default(3px solid, 2em, blue, 1em, collapse);
    }

    
    ');

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