<?php 

if ($content) 
{
    $this->load->view($content);
}
else
{
    echo "Content Not Found";
}

?>