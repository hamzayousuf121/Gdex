<? 
    $serverroot      = $_SERVER['DOCUMENT_ROOT'];
    $themefoldername = "gdex"; // this needs to be change as per partner theme folder
    $replacepart     = "/themes/".$themefoldername;
    $newserverroot   = str_replace($replacepart,'',$serverroot);
    include($newserverroot."/settings.php");
    $partnertable = "scholarleads_register";
?>