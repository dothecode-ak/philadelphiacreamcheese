<?php
header("Content-disposition: attachment; filename=DigitalRecipeBook_Original.pdf");
header("Content-type: application/pdf");
readfile("DigitalRecipeBook_Original.pdf");
?>
