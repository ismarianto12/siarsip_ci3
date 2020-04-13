<div class="row">
<div class="col-md-12">
<div class="profile-container">
<div class="profile-header row">
<div class="col-lg-2 col-md-4 col-sm-12 text-center">

  <form id="ganti_foto" enctype="multipart/form-data">  
	<span class="file-input btn btn-azure btn-file">
                                                Browse <input type="file" multiple="" id="inputFile" name="foto">
                                            </span>

                                            <div id="tampil"></div>

<div class="preview">
<img src="<?= base_url('assets/img/foto/'.$data->row()->foto) ?>" alt="" class="header-avatar" id="image_upload_preview">
</div>

</div>
<div class="col-md-8 col-sm-12 profile-info">
<div class="header-fullname"><?= ucfirst($this->session->userdata('nama')) ?></div>
<button type="submit" class="btn btn-palegreen btn-sm  btn-follow">
<i class="fa fa-check"></i>
Edit Profile
</button>
</form>


</div>
<div class="header-information">
 
</div>
</div>
 
</div>
<div class="profile-body">
<div class="col-lg-12">
<div class="tabbable">
</div>
</div>
</div>
</div>
</div>
</div>


<script type="text/javascript">
	

	    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#image_upload_preview').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#inputFile").change(function () {
        readURL(this);
    });


    $(function(){
     $('#ganti_foto').submit(function(e){
      e.preventDefault();
      // var form_dt  = new FormData(document.getElementById("#ganti_foto")); 
      // var files = $('input[name="foto"]')[0].files[0];
      // form_dt.append('file','files');
      $.ajax({
          url : '<?= base_url('dasboard/ganti_foto/save') ?>',
          type: 'POST',
          data: new FormData(this),
          processData:false,
          contentType:false,
          cache:false,
          async:false,
      success:function(data){
          $('#tampil').html(data);
        },
        error:function(data){
         $('#tampil').html(data);
       }
      })

    });
  });


</script>