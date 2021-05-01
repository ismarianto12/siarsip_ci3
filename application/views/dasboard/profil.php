<div class="col-lg-12">
<div class="widget flat radius-bordered">
<div class="callout callout-info">
    <span class="widget-caption">Edit Profil</span>
</div>
<div class="widget-body">
    <div id="registration-form">
        <form role="form" id="ganti_password">  
            <div class="form-title">
                User Information
            </div>
            <div class="form-group">
                <span class="input-icon icon-right">
                    <?= $data->row()->username ?> * ) Username tidak dapat di ubah
                    <i class="glyphicon glyphicon-user circular"></i>
                </span>
            </div>
            <div class="form-group">
                <span class="input-icon icon-right">
                     <?= $data->row()->email ?> * ) Email tidak dapat di ubah
                    <i class="glyphicon glyphicon-user circular"></i>
                </span>
            </div>
            <div class="form-group">
                <span class="input-icon icon-right">
                    <input type="text" class="form-control" id="passwordInput" placeholder="Password Lama" name="password_lama">
                    <i class="fa fa-lock circular"></i>
                </span>
            </div>
            <div class="form-group">
                <span class="input-icon icon-right">
                    <input type="text" class="form-control" id="confirmPasswordInput" placeholder="Password Baru" name="password_baru">
                    <i class="fa fa-lock circular"></i>
                </span>
            </div>
           
            <button type="submit" class="btn btn-blue">Register</button>
        </form>
    </div>
</div>
</div>
</div>


<script type="text/javascript">
    
    $(function(){ 
      $('#ganti_password').submit(function(e){
     e.preventDefault();
      var password_lama = $('input[name="password_lama"]').val();
      var password_baru = $('input[name="password_baru"]').val();

      if (password_lama =='') {
           $(".form-group").addClass("has-feedback has-error");
           Swal ( "Oops" ,  "Password Lama Tidak Boleh Kosong" ,  "error" );
      }else if(password_baru =='' && password_lama ==''){
           $(".form-group").addClass("has-feedback has-error"); 
           Swal ( "Oops" ,  "Semua Form Wajib Di Isi" ,  "error" );
      }else if(password_baru != password_lama){
            $(".form-group").addClass("has-feedback has-error");
            Swal ( "Oops" ,  "Password Tidak Sama Silahkan Di Ulangi" ,  "error" );
      }else{
          Swal ( "Please Wait ..." ,  "Sedang Menyimpan Perubahan" ,  "success" );
          
          $.ajax({
           type :'POST',
           url : '<?= base_url('dasboard/ganti_password/simpan') ?>',
           data : 'password_baru='+password_baru,
           success:function(msg){
              Swal( "Profil Hasben Update" ,  "Password Berhasil Diganti" ,  "success" );
           },
           error:function(msg){
             alert('error :');
           }
     
         });
      } 
     

      });  
     }); 

</script>