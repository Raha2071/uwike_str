<div class="row">
<div class="col-12 mt-3">
    <div class="card">
        <div class="card-body">
            <div class="a-details">
             <h4 class="header-title">Shops list<small class="newShop pull-right"><button class="btn-xs" data-toggle="modal" data-target="#shopModal">Nouveau</button></h4></small></h4>
            </div>
            <div class="data-tables table-responsive">
                <table id="dataTable" class="table table-bordered table-striped table-hover js-basic-example dataTable">
                    <thead class="bg-light text-capitalize">
                        <tr>
                            <th>#</th>
                            <th>Code</th>
                            <th>Noms Ets</th>
                            <th>Category</th>
                            <th>Email</th>
                            <th>Telephone</th>
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
                    $i=1;
                    foreach ($shops as $shop){
                    ?>
                        <tr>
                            <td><?=$i;?></td>
                            <td><strong><?=$shop['code'];?></str></td>
                            <td><?=$shop['names'];?></td>
                            <td><?=$shop['title'];?></td>
                            <td><?=$shop['email'];?></td>
                            <td><?=$shop['phone'].' | '.$shop['phone2'];?></td>
                            <td><?=status($shop['status']);?></td>
                            <td>
                                <div class="admin-details-icons">
                                    <a title="Edit" class="setuser waves-effect waves-block" data-id="<?=$shop['id'];?>" data-toggle="modal" data-target="#shopModal"><i class="fa fa-pencil"></i></a>
                                    <a href="#" title="Inbox" class=" waves-effect waves-block"><i class="fa fa-cog"></i></a>
                                    <a href="#" title="Sign out" class="viewdetail waves-effect waves-block" data-id="<?=$shop['id'];?>" data-toggle="modal" data-target="#view_more"><i class="fa fa-spinner"></i></a>
                                </div>
                            </td>
                            
                            
                        </tr>
                    <?php $i++; }?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>
<div class="modal fade" id="shopModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="title" id="defaultModalLabel">Formulaire pour l'Entreprise</h4>
            </div>
            <div class="modal-body">
                        <form class="inputs" id="new_shop">
                            <input type="hidden" name="shopId" >
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="example-text-input" class="col-form-label">Code</label>
                                        <input class="form-control" type="text" name="code" style="color: #f57e20; font-weight:400; cursor: no-drop;" value="<?="SH-".$code;?>" readonly="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="example-text-input" class="col-form-label">Nom de l'entreprise</label>
                                        <input class="form-control" type="text" name="companyname">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="example-text-input" class="col-form-label">Categorie</label>
                                        <select class="form-control" name="category">
                                            <option value="" selected="" disabled="">[-- Select --]</option>
                                            <?php foreach($categories as $show){
                                                echo "<option value='".$show['id']."'>".$show['title']."</option>";
                                            }
                                                ?>
                                            <option value ="0">Autres</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="example-text-input" class="col-form-label">RCCM</label>
                                        <input class="form-control" type="text" name="rccm">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="example-text-input" class="col-form-label">Email</label>
                                        <input class="form-control" type="email"  id="email" name="email">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="example-text-input" class="col-form-label">Phone 1</label>
                                        <input class="form-control" type="text"  id="phone" name="phone">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="example-text-input" class="col-form-label">Phone 2</label>
                                        <input class="form-control" type="text"  id="city" name="phone2">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="example-text-input" class="col-form-label">Country</label>
                                        <?=$country;?>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="example-text-input" class="col-form-label">City</label>
                                        <input class="form-control" type="text" name="city">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="example-text-input" class="col-form-label">Avenue</label>
                                        <input class="form-control" type="text" name="avenue">
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="example-text-input" class="col-form-label">Nom du chef de l'Entreprise</label>
                                        <input class="form-control" type="text" name="ownername">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="example-text-input" class="col-form-label">Username</label>
                                        <input class="form-control" type="text" name="username">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="example-text-input" class="col-form-label">Details</label>
                                        <textarea class="form-control" type="text" name="detail"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="for-row">
                            <div class="modal-footer submit-btn-area">
                                    <!-- <button type="button" class="btn btn-default btn-round waves-effect pull-left">Annuler</button> -->
                                    <button type="submit" class="btn btn-danger waves-effect">Sauvegarder</button>
                            </div>
                        </form>
                    </div>
                </div>
            
            </div>
        </div>
    </div>
</div>
<div class="modal fade n-fade" id="view_more" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog modal-md" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="title" id="defaultModalLabel">Formulaire pour l'Entreprise</h4>
                                        </div>
                                       <div class="ms-card-body" >
                                           
                                          <div style="border: 1px solid #dee2e6;">
                                                <div class="modal-row">
                                                   <label scope="row" class="col-md-6"><b>Code  </b></label>
                                                  <span class="code col-md-6"></span>
                                                </div>
                                                
                                                <div class="">
                                                   <label scope="row" class="col-md-6"><b>Socitete </b> </label>
                                                   <span class="names col-md-6"></span>
                                                </div>

                                                <div class="modal-row">
                                                   <label scope="row" class="col-md-6"><b>Email  </b></label>
                                                   <span class="email col-md-6"> 
                                                   <a></a>
                                                   </span>
                                                </div>

                                                <div class="">
                                                   <label scope="row" class="col-md-6"><b>Primary Phone </b> </label>
                                                   <span class="phone col-md-6" ><a href="tel: 0"></a> </span>
                                                </div>
                                                <div class="modal-row">
                                                   <label scope="row" class="col-md-6"><b>Secondary Phone </b> </label>
                                                   <span class="phon2 col-md-6"><a href="tel: 0"></a></span>
                                                </div>
                                                <div class="">
                                                   <label scope="row" class="col-md-6"><b>Avenue  </b></label>
                                                   <span class="avenue col-md-6" class="col-md-6"></span>
                                                </div>
                                                <div class="modal-row">
                                                   <label scope="row" class="col-md-6"><b>Category  </b></label>
                                                   <span class="category col-md-6"></span>
                                                </div>
                                                <div class="">
                                                   <label scope="row" class="col-md-6"><b>Status </b> </label>
                                                   <span class="status col-md-6"></span>
                                                </div>
                                                <div class="modal-row">
                                                   <label scope="row" class="col-md-6"><b>Join date  </b></label>
                                                   <span class="joindate col-md-6"></span>
                                                </div>
                                                <div class="">
                                                   <label scope="row" class="col-md-6"><b>City  </b></label>
                                                   <span class="city col-md-6"></span>
                                                </div>
                                          </div>  
                                       </div>

                                       <div class="card-footer" style="height: 40px;">
                                          
                                       </div>
                                     </div>
                                 </div>
                                 </div>
                              </div>
<script src="<?=base_url('assets/js/vendor/jquery-2.2.4.min.js'); ?>"></script> 
<script>

    //create admin

    $(".newShop").on("click",function(){
        $("#new_shop")[0].reset() 
    })
    $(document).on('submit', '#new_shop', function (event) {
      event.preventDefault();
    //   alert("bjr");
      $.ajax({
        url: "<?php echo base_url('shop_manipulation') ?>",
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
              $('#new_shop')[0].reset();
            //   window.location.reload();
            }
          } catch (e) {
            alert("System error please try again later");
            console.log(e);
          }
        }
      })
    })
    
    $(".setuser").on('click', function () {
			var id = $(this).data("id");
            $("#new_shop")[0].reset()
            $("#new_shop [name='email']").val("").change().attr("readonly",false);
    //   alert(id);
		$.getJSON("<?=base_url();?>getshop/" + id, function (data) {
            // alert(data)
			$("#new_shop [name='shopId']").val(data.id).change();
			$("#new_shop [name='code']").val(data.code).change();
			$("#new_shop [name='companyname']").val(data.names).change();
            $("#new_shop [name='rccm']").val(data.rccm).change();
			$("#new_shop [name='phone']").val(data.phone).change();
            $("#new_shop [name='city']").val(data.city).change();
            $("#new_shop [name='country']").val(data.country).trigger('change'); 
            $("#new_shop [name='username']").val(data.username).change().attr("readonly",false);
            $("#new_shop [name='email']").val(data.email).change().attr("readonly",false);
			$("#new_shop [name='category']").val(data.shop_category).change();
			$("#new_shop [name='ownername']").val(data.owrner_name).change();
            $("#new_shop [name='avenue']").val(data.avenue).change();
            $("#new_shop [name='detail']").val(data.description).change();
            $("#new_shop [name='phone2']").val(data.phone2).change();
		});
		return;
	});
</script>
<!-- View more Modal -->
                            