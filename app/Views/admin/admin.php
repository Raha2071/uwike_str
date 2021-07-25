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
                                <th>#</th>
                                <th>Names</th>
                                <th>Role</th>
                                <th>Status</th>
                                <th>Action</th>
                                
                                
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                        function status($stattus){
                            switch ($stattus) {
                                case '2':
                                    echo "<span class='badge badge-success'>Fermer</span>";
                                    break;
                                case '1':
                                    echo "<span class='badge badge-primary'>Active</span>";
                                    break;
                                
                                default:
                                    break;
                            }
                        }
                        function priviledge($priviledge){
                            switch($priviledge){
                                case '1':
                                    echo "Admin";
                                    break;
                                case '2':
                                    echo "Sub-Admin";
                                    break;
                                case '3':
                                    echo "Agent";
                                break;
                                default:
                                break;
                            }
                        }
                        $i=1;

                        ?>
                            <?php 
                                $sql="SELECT * FROM users order by users.id desc";
                                $admin = DBConnection::getInstance()->query($sql);
                                
                                if($admin->count()):foreach ($admin->results() as $admin):
                            ?>
                            <tr>
                                <td><?=$admin->firstname ." ".$admin->lastname?></td>
                                <td><?=$admin->email;?></td>
                                <td><?=$admin->phone;?></td>
                                <td><?=status($admin->status)?></td>
                                <td>
                                    <div class="admin-details-icons">
                                        <a title="Edit" data-id="" id="setUsers" class="setuser waves-effect waves-block"><i class="fa fa-cog"></i></a>
                                        <a href="#" title="Inbox" class=" waves-effect waves-block"><i class="fa fa-user"></i></a>
                                        <a href="#" title="Sign out" class=" waves-effect waves-block"><i class="fa fa-spinner"></i></a>
                                    </div>
                                </td>
                                
                                
                            </tr>
                            <?php endforeach; endif;?>
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
                    <form class="inputs" id="new_admin">
                        <input type="hidden" name="userId" >
                        <input type="hidden" value="user-manipulation" name="request" id="request" >
                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example-text-input" class="col-form-label">First name</label>
                                    <input class="form-control" type="text" name="firstname">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example-text-input" class="col-form-label">Last name</label>
                                    <input class="form-control" type="text"  id="lastname" name="lastname">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example-text-input" class="col-form-label">Email</label>
                                    <input class="form-control" type="email"  id="email" name="email">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example-text-input" class="col-form-label">Telephone</label>
                                    <input class="form-control" type="text"  id="phone" name="phone">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example-text-input" class="col-form-label">Country</label>
                                    <?php include 'country.php';?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example-text-input" class="col-form-label">City</label>
                                    <input class="form-control" type="text"  id="city" name="city">
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
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example-text-input" class="col-form-label">Admin cathegory</label>
                                    <select class="form-control" name="category" id="category">
                                        <option value="" selected="" disabled="">[-- Select --]</option>
                                        <option value="1">Administrators</option>
                                        <option value="2">Sub admin</option>
                                        <option value ="3">Agent</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <!-- <input type="hidden" name="action" value="admin-new" />  -->
                        <div class="for-row">
                        <div class="submit-btn-area">
                                <button id="form_submit" class="fb-login" type="submit">Submit <i class="ti-arrow-right"></i></button>
                                
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        
        </div>
    </div>
<!-- jquery latest version -->
<script src="<?=appBaseURL;?>/public/assets/js/vendor/jquery-2.2.4.min.js"></script> 

<script>
    $(document).on('submit', "#new_admin",function(event){
        // alert("setuser");
      event.preventDefault();
      $.ajax({
        url: "<?=appBaseURL?>/manipulation_admin",
        method: 'POST',
        data: new FormData(this),
        contentType: false,
        processData: false,
        cache: false,
        async: false,
        success: function (data) {
            // alert(data)
          var json = null;
          try {
            json = JSON.parse(data);
            if (json.hasOwnProperty("error")) {
              wrong(json.error);
            } else {
              done(json.success);
              $('#new_admin')[0].reset();
            //   window.location.reload();
            }
          } catch (e) {
            wrong("System error please try again later");
            console.log(e);
          }
        }
      })
    })
    // $(".setuser").on('click',function(){
	// 	var id = $(this).data('id');
	// 	// alert(id);
	// 	$.getJSON("<?=('getAdmin');?>/"+id,function(data){
	// 		$("#new_admin [name='userId']").val(data.id).change();
	// 		$("#new_admin [name='firstname']").val(data.firstname).change();
	// 		$("#new_admin [name='lastname']").val(data.lastname).change();
	// 		$("#new_admin [name='phone']").val(data.phone).change();
    //         $("#new_admin [name='city']").val(data.city).change();
    //         $("#new_admin [name='country']").val(data.country).change(); 
    //         $("#new_admin [name='username']").val(data.username).change().attr("readonly",true);
    //         $("#new_admin [name='email']").val(data.email).change().attr("readonly",true);
	// 		$("#new_admin [name='category']").val(data.priviledge).trigger('change');
	// 		$("#new_admin [name='status']").val(data.status).trigger('change');
	// 	});
	// 	return;
	// });
</script>
