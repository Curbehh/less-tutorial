<?php

    include_once('/lessphp/lessc.inc.php');

    $less = new lessc();

    $color_array = array( 
        
        "table_1_color" => "red",
        "table_2_color" => "blue",
        "line_thickness" => "1px solid",
        "text_color" => "black",
        "text_color_td" => "yellow",
        "text_color_th" => "green"
    
    );
                         
    if (isset( $_POST["submit"])){ 
        
        $color_array["table_1_color"] = $_POST["color_1"];
            
        $color_array["table_2_color"] = $_POST["color_2"];
        
        $color_array["line_thickness"] = $_POST["line_thickness"] . "px solid";
        
        $color_array["text_color"] = $_POST["dark_or_light"] . " ( " . $_POST["color_3"]. " , " . $_POST["color_perc"] . "% ) ";
        
        $color_array["text_color_td"] = $_POST["dark_or_light_td"] . " ( " . $_POST["color_4"]. " , " . $_POST["color_perc_td"] . "% ) ";
        
        $color_array["text_color_th"] = $_POST["dark_or_light_th"] . " ( " . $_POST["color_5"]. " , " . $_POST["color_perc_th"] . "% ) ";
        
    }
    
    $less->setVariables($color_array); 

    $less -> compileFile('less_compile_file.less', 'less_compile_file.css');

?>

<!DOCTYPE html>

<html>

    <head>

        <title>

            Tweede Pagina

        </title>
        
        <link rel = "stylesheet" type = "text/css" href = "less_compile_file.css" />
        
        <!-- <script src = "less.js-master/dist/less.js" >  </script> -->

    </head>
    
    <body>

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
        
        <form action="php_less_file_to_css.php" method="post">
            
            <table>
                
                <tr> <td> Voer kleur 1 in: </td> <td> <input type = "color" name = "color_1" id = "color_1" value = "#FF0000" > </td> </tr>
                <tr> <td> Voer kleur 2 in: </td> <td> <input type = "color" name = "color_2" id = "color_2" value = "#0000FF" > </td> </tr>
                
                <tr> <td> Voer lijn dikte in: </td> <td> <select name = "line_thickness" id = "line_thickness" /> 
                    
                    <option value = '1'  > 1  </option> 
                    <option value = '5'  > 5  </option>
                    <option value = '10' > 10 </option>
                    <option value = '15' > 15 </option>
                    <option value = '20' > 20 </option>
                    
                </td> </tr>
                
                <tr><td> Voer tekstkleur in: </td><td> <select name = "dark_or_light">
                    
                    <option value = "darken"  > darken  </option>
                    <option value = "lighten" > lighten </option>  
                    
                </select>
                                                    
                <input type="color" name="color_3" value="#FFAA00">
                    
                    <select name="color_perc">
                        
                        <option value= "1"  > 1  </option>
                        <option value= "10" > 10 </option>
                        <option value= "20" > 20 </option>
                        <option value= "30 "> 30 </option>                                                        
                        <option value= "40 "> 40 </option>  
                        
                        </select>
                    
                    </td>
                    
                </tr>
                
                <tr><td> Voer td tekstkleur in: </td><td> <select name = "dark_or_light_td">
                    
                    <option value = "darken"  > darken  </option>
                    <option value = "lighten" > lighten </option>  
                    
                </select>
                                                    
                <input type="color" name="color_4" value="#FFAA00">
                    
                    <select name="color_perc_td">
                        
                        <option value= "1"  > 1  </option>
                        <option value= "10" > 10 </option>
                        <option value= "20" > 20 </option>
                        <option value= "30 "> 30 </option>                                                        
                        <option value= "40 "> 40 </option>  
                        
                        </select>
                    
                    </td>
                    
                </tr>
                
                <tr><td> Voer th tekstkleur in: </td><td> <select name = "dark_or_light_th">
                    
                    <option value = "darken"  > darken  </option>
                    <option value = "lighten" > lighten </option>  
                    
                </select>
                                                    
                <input type="color" name="color_5" value="#FFAA00">
                    
                    <select name="color_perc_th">
                        
                        <option value= "1"  > 1  </option>
                        <option value= "10" > 10 </option>
                        <option value= "20" > 20 </option>
                        <option value= "30 "> 30 </option>                                                        
                        <option value= "40 "> 40 </option>  
                        
                        </select>
                    
                    </td>
                    
                </tr>
                
                <tr> <td> </td> <td> <input type = "submit" name = "submit" value = "Nieuwe kleur"> </td> </tr> 
                
            </table>
            
        </form>
        
    </body>

</html>