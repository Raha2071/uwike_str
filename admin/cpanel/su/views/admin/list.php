<div class="row">
<div class="col-6 mt-3">
    <div class="card">
        <div class="card-body">
            <div class="a-details">
             <h4 class="header-title">Admin list</h4>
            </div>
            <div class="data-tables">
                <table id="dataTable" class="text-center">
                    <thead class="bg-light text-capitalize">
                        <tr>
                            <th>Names</th>
                            <th>Telephone</th>
                            <th>Cathegory</th>
                            <th>Action</th>
                            
                            
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $sql="SELECT * FROM users order by users.id desc";
                            $admin = DB::getInstance()->query($sql);
                            
                            if($admin->count()):foreach ($admin->results() as $admin):
                        ?>
                        <tr>
                            <td><?=$admin->firstname ." ".$admin->lastname?></td>
                            <td><?=$admin->phone?></td>
                            <td><?=$admin->cathegory?></td>
                            <td><a href="<?php linkto("accounts/admin/edit/".Hash::setEditKey($admin->id)) ;?>"><i class="fa fa-edit"></i></a></td>
                            
                            
                        </tr>
                    
                        <?php 
                            endforeach;
                            else:
                                Danger("No admin is registered");
                            endif;
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<div class="col-6 mt-3">
    <div class="card">
            <div class="card-body">
                <div class="a-details">
                    <h4 class="header-title">new admin</h4>
                </div>
                <form class="inputs" id="admin_form_data">
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="example-text-input" class="col-form-label">First name</label>
                                <input class="form-control" type="text" name="firstname" id="firstname">
                                <p class="error_message" id="message_firsname"></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="example-text-input" class="col-form-label">Last name</label>
                                <input class="form-control" type="text"  id="lastname" name="lastname">
                                <p class="error_message" id="message_lastname"></p>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="example-text-input" class="col-form-label">Email</label>
                                <input class="form-control" type="email"  id="email" name="email">
                                <p class="error_message" id="message_email"></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="example-text-input" class="col-form-label">Telephone</label>
                                <input class="form-control" type="text"  id="phone" name="phone">
                                <p class="error_message" id="message_phone"></p>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="example-text-input" class="col-form-label">Country</label>
                                <?php include("countries.php")?>
                                <p class="error_message" id="message_country"></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="example-text-input" class="col-form-label">City</label>
                                <input class="form-control" type="text"  id="city" name="city">
                                <p class="error_message" id="message_city"></p>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="example-text-input" class="col-form-label">Password</label>
                                <input class="form-control" type="password"  id="password" name="password">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="example-text-input" class="col-form-label">Confirm password</label>
                                <input class="form-control" type="password"  id="confpassword" name="confpassword">
                                
                            </div>
                        </div>
                    </div> -->
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="example-text-input" class="col-form-label">Username</label>
                                <input class="form-control" type="text"  id="username" name="username">
                                <p class="error_message" id="message_username"></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="example-text-input" class="col-form-label">Admin cathegory</label>
                                <select class="form-control" name="cathegory" id="cathegory">
                                    <option value="" selected="" disabled="">[-- Select --]</option>
                                    <option value="administrator">Administrators</option>
                                    <option value="Sub admin">Sub admin</option>
                                    <option value="Agent">Agent</option>
                                </select>
                                <p class="error_message" id="message_cathegory"></p>
                            </div>
                        </div>
                    </div>
                    <div class="for-row">
                    <div class="submit-btn-area">

                            <button class="fb-login" type="submit">Submit <i class="ti-arrow-right"></i></button>
                        </div>
                    </div>
                    <input type="hidden" name="request" value="new-admin">
                </form>
            </div>
        </div>
    
    </div>
</div>
<?php include "includes/validate-admin.php"; ?>
<!-- jquery latest version -->
<script src="<?php linkto('admin/assets/js/vendor/jquery-2.2.4.min.js'); ?>"></script> 
<script>
    // function Addadmin(){
    //     if  (true){
    //         // form data
	// 		var form_data=$("#admin_form_data").serialize();
            
    //         $.ajax({  
                
    //             type: 'POST',  
    //             url: '<?=linkto("adminapi")?>',
    //             data: form_data, 
    //             success: function (out) { 

    //                 var res=JSON.parse(out);
                    
    //                 if(res.success=="1"){
                        
    //                    destination_code=res.destination_code;

    //                     window.setTimeout(function(){
    //                         $("#load").attr("hidden", "");
    //                     }, 1100);
                        
    //                     window.setTimeout(function(){
                        
    //                     Swal.fire({
    //                         title: 'Success',
    //                         html: "Destination information successfully saved.",
    //                         icon: 'success',
    //                         timer: 1000,
                            
    //                         showConfirmButton: false,
                            
    //                     }).then((result) => {
    //                           $("#destination_texts").attr("hidden", "");
    //                           $("#destination_images").removeAttr("hidden").hide().show("slow");  
    //                     });
    //                 }, 1100);
						
                         
    //                 } else{
    //                      window.setTimeout(function(){
    //                         $("#load").attr("hidden", "");
    //                     }, 2000);
                        
	// 					  // Notifying the user
    //                       window.setTimeout(function(){
                                
    //                             Swal.fire({
    //                                 title: 'Failed',
    //                                 html: "Failed to save the data",
    //                                 icon: 'warning',
    //                                 timer: 3000,
                                    
    //                                 showConfirmButton: false,
                                    
    //                             }).then((result) => {
                                     
    //                             });
    //                         }, 1100);         
    //                 }  
    //             }  
    //         });

    //        console.log("Validated");

    //     }else{

    //         window.setTimeout(function(){
    //             $("#load").attr("hidden", "");
    //         }, 1000);
    //         console.log("Not validated");
    //     }
        
    // }
    $(document).on("submit","#admin_form_data",function(event){
        event.preventDefault();
      $.ajax({
        url: "<?=linkto("adminapi")?>",
        method: 'POST',
        data: new FormData(this),
        contentType: false,
        processData: false,
        cache: false,
        async: false,
        success: function (data) {
          var json = null;
          try {
            json = JSON.parse(data);
            if (json.hasOwnProperty("error")) {
              wrong(json.error);
            } else {
              done(json.success);
              $('#admin_form_data')[0].reset();
              console.log("success")
            }
          } catch (e) {
            wrong("System error please try again later");
            console.log(e);
          }
        }
      })
    })
</script>
