 
  <?= $this->session->userdata('message') ?>
    <div class='row'>
    <div class='col-xs-12 col-md-12'>
       <div class='widget'>
    <div class='widget-header'>
                
                <div class='widget-buttons'>
                <a href='#' data-toggle='maximize'>
                    <i class='fa fa-expand'></i>
                </a>
                <a href='#' data-toggle='collapse'>
                    <i class='fa fa-minus'></i>
                </a> 
            </div>

           
           
                <?php echo anchor(site_url('menu/tambah'), 'tambah', 'class="btn bg-green btn-flat margin"'); ?>
		<?php echo anchor(site_url('menu/excel'), 'Excel', 'class="btn bg-green btn-flat margin"'); ?>
		<?php echo anchor(site_url('menu/word'), 'Word', 'class="btn bg-green btn-flat margin"'); ?>
	    
 </div> 
<div class='widget-body'>
        <table class="table table-bordered table-striped" id="datatables">
            <thead>
                <tr>
                    <th width="80px">No</th>
		    <th>Id Parent</th>
		    <th>Nama Menu</th>
		    <th>Icon</th>
		    <th>Link</th>
		    <th>Aktif</th>
		    <th>Urutan</th>
		    <th>Position</th>
		    <th>Level</th>
		    <th width="200px">Action</th>
                </tr>
            </thead>
	    
        </table>
       
        <script type="text/javascript">
            $(document).ready(function() {
                $.fn.dataTableExt.oApi.fnPagingInfo = function(oSettings)
                {
                    return {
                        "iStart": oSettings._iDisplayStart,
                        "iEnd": oSettings.fnDisplayEnd(),
                        "iLength": oSettings._iDisplayLength,
                        "iTotal": oSettings.fnRecordsTotal(),
                        "iFilteredTotal": oSettings.fnRecordsDisplay(),
                        "iPage": Math.ceil(oSettings._iDisplayStart / oSettings._iDisplayLength),
                        "iTotalPages": Math.ceil(oSettings.fnRecordsDisplay() / oSettings._iDisplayLength)
                    };
                };

                var t = $("#datatables").dataTable({
                    initComplete: function() {
                        var api = this.api();
                        $('#datatables input')
                                .off('.DT')
                                .on('keyup.DT', function(e) {
                                    if (e.keyCode == 13) {
                                        api.search(this.value).draw();
                            }
                        });
                    },
                    oLanguage: {
                        sProcessing: "loading..."
                    },
                    processing: true,
                    serverSide: true,
                    ajax: {"url": "menu/json", "type": "POST"},
                    columns: [
                        {
                            "data": "id_menu",
                            "orderable": false
                        },{"data": "id_parent"},{"data": "nama_menu"},{"data": "icon"},{"data": "link"},{"data": "aktif"},{"data": "urutan"},{"data": "position"},{"data": "level"},
                        {
                            "data" : "action",
                            "orderable": false,
                            "className" : "text-center"
                        }
                    ],
                    order: [[0, 'desc']],
                    rowCallback: function(row, data, iDisplayIndex) {
                        var info = this.fnPagingInfo();
                        var page = info.iPage;
                        var length = info.iLength;
                        var index = page * length + (iDisplayIndex + 1);
                        $('td:eq(0)', row).html(index);
                    }
                });
            });
         
     function hapus(n){
        Swal({
            title: 'Konfirmasi Hapus',
            text: 'Apakah Anda Yakin Untuk Menghapus Data Ini?',
            type: 'warning',
            showCancelButton: true,
            confirmButtonClass: 'btn-danger',
            confirmButtonText: 'Ya',
            closeOnConfirm: false
        },
        function(){
           Swal('Hapus Data', 'Data Berhasil Di Hapus', 'success'); 
           window.location.href='<?= base_url('menu/hapus/') ?>'+n;
         });
    }
 </script>
   
        </div>
        </div> 
      
   