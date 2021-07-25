
<?php
	$request=trim(Input::get("request","get")); 
	Switch($request){

		// Dashboard
		case 'dashboard':
			include root("admin/cpanel/su/views/dashboard/dashboard.php");
		break;
		//accounts
		
		case 'accounts':
			if(trim(Input::get("target","get"))=="admin"){

				if(trim(Input::get("action","get"))=="list"){

					include root("admin/cpanel/su/views/admin/list.php");

				}else if (trim(Input::get("action","get"))=="profile") {
					include root("admin/cpanel/su/views/admin/profile.php");
				}
				else if (trim(Input::get("action","get"))=="edit") {
					$admin_key=Hash::getEditKey(trim(Input::get("record","get")), '', 100);
					include root("admin/cpanel/su/views/admin/edit.php");
				}
				else{
					include root("admin/cpanel/su/views/dashboard/dashboard.php");

				}

			} else if(trim(Input::get("target","get"))=="shop"){

				if(trim(Input::get("action","get"))=="new"){

					include root("admin/cpanel/su/views/shop/new.php");


				} else if(trim(Input::get("action","get"))=="list"){
					
					include root("admin/cpanel/su/views/shop/list.php");

				} else if (trim(Input::get("action","get"))=="details"){
					
					include root("admin/cpanel/su/views/client/details.php");

				}else{
					
					include root("admin/cpanel/su/views/shop/list.php");
				}

			}

		break;

		//client
		case 'client':
			if(trim(Input::get("target","get"))=="clients"){

				if(trim(Input::get("action","get"))=="list"){

					include root("admin/cpanel/su/views/clients/list.php");

				}else if (trim(Input::get("action","get"))=="new") {
					include root("admin/cpanel/su/views/clients/new.php");
				}
				else if (trim(Input::get("action","get"))=="edit") {
					$admin_key=Hash::getEditKey(trim(Input::get("record","get")), '', 100);
					include root("admin/cpanel/su/views/clients/edit.php");
				}
				else{
					include root("admin/cpanel/su/views/dashboard/dashboard.php");

				}

			}
		break;

	}
?>