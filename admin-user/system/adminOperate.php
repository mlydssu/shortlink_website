<?php 

require "operate.php";

if( isset($_POST["tambah"]) ) {

    $postValue = $_POST["tambah"];

    if( tambah($postValue) > 0 ) {
        
        echo "Success, Data Added";

    } else {

        echo " (Error)";

    }
}

if (isset($_POST["edit"])) {
    
    $postValue = $_POST["edit"];

    if( ubah($postValue) > 0 ) {

        echo "Success, Data Has Changed";

    } else {

        echo " (Error)";

    }
        
}

if (isset($_POST["delete"])) {

    $postValue = $_POST["delete"];

    if( hapus($postValue) > 0 ) {

        echo "Success, Data Has Deleted";

    } else {

        echo " (Error)";

    }

}

?>