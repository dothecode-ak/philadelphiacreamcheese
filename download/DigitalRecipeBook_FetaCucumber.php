<?php
header("Content-disposition: attachment; filename=DigitalRecipeBook_Feta_Cucumber.pdf");
header("Content-type: application/pdf");
readfile("DigitalRecipeBook_Feta_Cucumber.pdf");
?>