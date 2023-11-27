<aside role="complimentary">
<?php
    if(is_active_sidebar("sidebar-footer-4")){
        dynamic_sidebar("sidebar-footer-4");
    }
    else{
        echo "<p>No sidebar widgets.</p>";
    }
?>
</aside>