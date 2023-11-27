<aside role="complimentary">
<?php
    if(is_active_sidebar("sidebar-footer-3")){
        dynamic_sidebar("sidebar-footer-3");
    }
    else{
        echo "<p>No sidebar widgets.</p>";
    }
?>
</aside>