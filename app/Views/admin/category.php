<div class="row">
<div class="col-6 mt-3">
    <div class="card">
        <div class="card-body">
            <div class="a-details">
             <h4 class="header-title">Admin list</h4>
            </div>
            <div class="data-tables">
                <table id="dataTable">
                    <thead class="table table-bordered table-striped table-hover bg-light text-capitalize">
                        <tr>
                            <th>#</th>
                            <th>Names</th>
                            <th>Role</th>
                            <th>Status</th>
                            <th>Action</th>
                            
                            
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Galaxy</td>
                            <td>23342342</td>
                            <td>V34</td>
                            <td>
                                <div class="admin-details-icons">
                                    <a title="Edit" data-id="" class="setcategory waves-effect waves-block"><i class="fa fa-cog"></i></a>
                                    <a href="#" title="Inbox" class=" waves-effect waves-block"><i class="fa fa-user"></i></a>
                                    <a href="#" title="Sign out" class=" waves-effect waves-block"><i class="fa fa-spinner"></i></a>
                                </div>
                            </td>
                            
                            
                        </tr>
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
                    <h4 class="header-title">Formulaire</h4>
                </div>
                <form class="inputs" id="new_category">
                    <input type="hidden" name="catID" >
                    <div class="form-row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="example-text-input" class="col-form-label">Titre</label>
                                <input class="form-control" type="text" name="title">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="example-text-input" class="col-form-label">Status </label>
                                <select class="form-control" name="status">
                                    <option value="0" desabled="" selected="">--veuillez selectionner--</option>
                                    <option value="1">Active</option>
                                    <option value="2">DesActive</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="example-text-input" class="col-form-label">Description </label>
                                <textarea class="form-control" name="message"></textarea>
                            </div>
                        </div>
                    </div>
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
<?php //require_once 'footer.php'?>
<script>

    //create admin
    $(document).on('submit', '#new_category', function (event) {
        alert("bbbbb");
      event.preventDefault();
      $.ajax({
        url: "",
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
              $('#new_category')[0].reset();
            //   window.location.reload();
            }
          } catch (e) {
            wrong("System error please try again later");
            console.log(e);
          }
        }
      })
    })
    $(".setcategory").on('click',function(){
		var id = $(this).data('id');
		// alert(id);
		$.getJSON("<?=base_url('getShopcategory');?>/"+id,function(data){
			$("#new_category [name='catID']").val(data.id).change();
			$("#new_category [name='title']").val(data.title).change();
			$("#new_category [name='message']").val(data.description).change();
		});
		return;
	});
</script>
