<?php

require_once('include/MVC/View/views/view.popup.php');

class sphr_ObjectViewPopup extends ViewPopup
{
    function sphr_ObjectViewPopup()
    {
        parent::ViewPopup();
    }
    function display()
    {
        parent::display();
        echo "
        <script type=\"text/javascript\" src=\"custom/include/javascript/jquery/jquery.pack.js\"></script>
        <script>
        jQuery('select[name=\"coast_select_c_advanced[]\"]').change(function() {
            if ( $(this).val()=='20_0'){
                $(this).find('option').attr('selected','selected');
            }
        })
        </script>        
        ";
		echo "<script type=\"text/javascript\" src=\"custom/modules/sphr_Object/js/popup.js\"></script>";
    }
}