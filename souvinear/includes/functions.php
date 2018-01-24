<?php
    function redirect_to($location = NULL) {
      if ($location != NULL) {
        header("Location:{$location}");
        exit;
      }
    }
?>