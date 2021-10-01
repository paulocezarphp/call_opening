<?php


@$operation = $_POST['app'];

if($operation == "validate-login"){

   	//Operation...

}elseif($operation == "validate-quit-login"){

   	//Operation...

}elseif($operation == "create-admin"){

    //Operation...	

}elseif($operation == "change-admin"){

    //Operation...	

}elseif($operation == "remove-admin"){

    //Operation...	

}elseif($operation == "create-client"){

    //Operation...	

}elseif($operation == "change-client"){

    //Operation...	

}elseif($operation == "remove-client"){

    //Operation...	

}else{

	header("Location: ./");

}


?>