<aside role="complimentary">
<?php
    if(is_active_sidebar("sidebar-footer-2")){
        dynamic_sidebar("sidebar-footer-2");
    }
    else{
        echo "<p>No sidebar widgets.</p>";
    }
?>
</aside>