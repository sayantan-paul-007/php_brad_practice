<?php 
    function inverse($a){
        if (!$a){
            throw new Exception('Division by zero');
        }
        return 1/$a;
    }
    try{
        echo inverse(34);     
    }
        catch(Exception $e){
            echo 'Exception Caught' . '<br>', $e->getMessage(), '';
        }
        finally{
            echo '<br>' . 'First Finally' . '<br>';
        }
        try{
           echo inverse(0);
        }
            catch(Exception $e){
                echo 'Exception Caught' . '<br>', $e->getMessage(), '';
            }
            finally{
                echo '<br>' .'Second Finally' . '<br>';
            }
?>