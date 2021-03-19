<?php

if ($content) 
{
    $this->load->view($content);
}
else
{
    echo "Error: Content Not Found";
}

?>