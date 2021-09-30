<?php

if (in_array('mod_rewrite', apache_get_modules())) {
    echo "Yes, Apache supports mod_rewrite.";
}

else {
    echo "Apache is not loading mod_rewrite.";
}