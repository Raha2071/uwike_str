<div class="sales-report-area sales-style-two">
    <div class="row">
    <div class="col-6 mt-3">
        <div class="card">
                <div class="card-body">
                    <div class="a-details">
                        <h4 class="header-title">Edit admin</h4>
                    </div>
                    <form class="inputs" id="admin_edit_form_data">
                        <div class="form-row">
                            <?php 
                                $country="";
                                $id=$admin_key/1;
                                $sql="SELECT * FROM users WHERE id='".$id."'";
                                $result=DB::getInstance()->query($sql);
                                if(!empty($result->count())): foreach($result->results() as $admin):
                                $country=$admin->country;    
                            ?>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example-text-input" class="col-form-label">First name</label>
                                    <input class="form-control" type="text" value="<?=$admin->firstname?>" name="firstname" id="firstname">
                                    <p class="error_message" id="message_firsname"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example-text-input" class="col-form-label">Last name</label>
                                    <input class="form-control" type="text" value="<?=$admin->lastname?>"  id="lastname" name="lastname">
                                    <p class="error_message" id="message_lastname"></p>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example-text-input" class="col-form-label">Email</label>
                                    <input class="form-control" type="email" value="<?=$admin->email?>"  id="email" name="email">
                                    <p class="error_message" id="message_email"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example-text-input" class="col-form-label">Telephone</label>
                                    <input class="form-control" type="text" value="<?=$admin->phone?>"  id="phone" name="phone">
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
                                    <input class="form-control" type="text" value="<?=$admin->city?>"  id="city" name="city">
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
                                    <input class="form-control" type="text" value="<?=$admin->username?>"  id="username" name="username">
                                    <p class="error_message" id="message_username"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example-text-input" class="col-form-label">Admin cathegory</label>
                                    <select class="form-control" name="cathegory" id="cathegory">
                                        <option value="" selected="" disabled="">[-- Select --]</option>
                                        <option value="administrator" <?php if($admin->cathegory=="administrator") echo "selected";?>  >Administrators</option>
                                        <option value="Sub admin" <?php if($admin->cathegory=="Sub admin") echo "selected";?> >Sub admin</option>
                                        <option value="Agent" <?php if($admin->cathegory=="Agent") echo "selected";?> >Agent</option>
                                    </select>
                                    <p class="error_message" id="message_cathegory"></p>
                                </div>
                            </div>
                        </div>
                        <div class="for-row">
                        <div class="submit-btn-area">
                                <input type="hidden" name="admin_id" value="<?=$admin->id?>" /> 
                                <input type="hidden" name="request" value="edit-admin" /> 
                                <button id="form_submit" onclick="editAdmin()" class="fb-login" type="button">Submit <i class="ti-arrow-right"></i></button>
                         </div>
                         <?php 
                                endforeach;
                            endif;
                                    
                            ?>
                        </div>
                    </form>
                </div>
            </div>
        
        </div>
    </div>
        <!-- seo fact area end -->
        <!-- Social Campain area start -->
        

    </div>
</div>

<script src="<?php linkto('admin/assets/js/vendor/jquery-2.2.4.min.js'); ?>"></script> 
<script>

    $(document).ready(function(){
        window.setTimeout(function(){
            getCountry("<?=$country?>");
        }, 1000);
    });

    function getCountry(country){
        $("#country option[value='"+country+"']").attr("selected", "");
    }
</script>
<script>
    function editAdmin(){
        if  (true){
            // form data
			var form_data=$("#admin_edit_form_data").serialize();
            
            $.ajax({  
                
                type: 'POST',  
                url: '<?=linkto("adminapi")?>',
                data: form_data, 
                success: function (out) { 

                    var res=JSON.parse(out);
                    
                    if(res.success=="1"){
                        
                       destination_code=res.destination_code;

                        window.setTimeout(function(){
                            $("#load").attr("hidden", "");
                        }, 1100);
                        
                        window.setTimeout(function(){
                        
                        Swal.fire({
                            title: 'Success',
                            html: "Destination information successfully saved.",
                            icon: 'success',
                            timer: 1000,
                            
                            showConfirmButton: false,
                            
                        }).then((result) => {
                              $("#destination_texts").attr("hidden", "");
                              $("#destination_images").removeAttr("hidden").hide().show("slow");  
                        });
                    }, 1100);
						
                         
                    } else{
                         window.setTimeout(function(){
                            $("#load").attr("hidden", "");
                        }, 2000);
                        
						  // Notifying the user
                          window.setTimeout(function(){
                                
                                Swal.fire({
                                    title: 'Failed',
                                    html: "Failed to save the data",
                                    icon: 'warning',
                                    timer: 3000,
                                    
                                    showConfirmButton: false,
                                    
                                }).then((result) => {
                                     
                                });
                            }, 1100);         
                    }  
                }  
            });

           console.log("Validated");

        }else{

            window.setTimeout(function(){
                $("#load").attr("hidden", "");
            }, 1000);
            console.log("Not validated");
        }
        
    }
</script>