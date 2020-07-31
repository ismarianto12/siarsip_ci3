<div class="row" style="background: #fff;padding: 20px">
 <link href="<?= base_url('assets')  ?>/css/menu.css" rel="stylesheet">
 <script src="<?= base_url('assets/js/jquery.nestable.js') ?>"></script>
 <div class="widget">
     
  <div class="col-lg-8">  
     
              
                <div class="ibox-title">
                  <h3>Struktur Menu</h3>
                </div><!-- /.box-header -->
                <div class="ibox-content">
                
                 <hr />
                   <input type="hidden" id="id">
                  <div class="dd" id="nestable">
                      <?php
                      $ref   = [];
                      $items = [];
                      foreach ($record->result() as $data) {
                          $thisRef = &$ref[$data->id_menu];
                          $thisRef['id_parent'] = $data->id_parent;
                          $thisRef['icon'] = $data->icon;
                          $thisRef['level'] = $data->level;
                          $thisRef['nama_menu'] = $data->nama_menu;
                          $thisRef['link'] = $data->link;
                          $thisRef['id_menu'] = $data->id_menu;
                          $thisRef['position'] = $data->position;

                         if($data->id_parent == 0) {
                              $items[$data->id_menu] = &$thisRef;
                         } else {
                              $ref[$data->id_parent]['child'][$data->id_menu] = &$thisRef;
                         }

                      }
                       
                      function get_menu($items,$class = 'dd-list') {
                          $ci = & get_instance();
                          $html = "<ol class=\"".$class."\" id=\"menu-id\">";
                          foreach($items as $key=>$value) {
                            if ($value['position']=='Top'){ $icon = 'down text-danger'; $ket ='Pindah ke Bottom Menu'; }else{ $icon = 'up text-success';  $ket ='Pindah ke Top Menu'; }
                              $html.= '<li class="dd-item dd3-item" data-id="'.$value['id_menu'].'" >
                                          <div style="cursor:move" class="dd-handle dd3-handle '.$value['position'].'"></div>
                                          <div class="dd3-content"><span id="label_show'.$value['id_menu'].'">'.$value['nama_menu'].'</span> 
                                              <span class="span-right">/<span id="link_show'.$value['id_menu'].'">'.$value['link'].'</span> &nbsp;&nbsp; 
                                                   &nbsp; 

                                                  <a class="edit-button" id="'.$value['id_menu'].'" label="'.$value['nama_menu'].'" link="'.$value['link'].'" icon="'.$value['icon'].'" ><i class="fa fa-pencil"></i></a>  &nbsp; 
                                                    '.$value['level'].'
                                                     <i class="fa fa-user"></i>  &nbsp;  
                                                  <a class="del-button" id="'.$value['id_menu'].'"><i class="fa fa-trash"></i></a></span> 
                                          </div>';
                              if(array_key_exists('child',$value)) {
                                  $html .= get_menu($value['child'],'child');
                              }
                                  $html .= "</li>";
                          }
                          $html .= "</ol>";
                          return $html;
                      }
                      print get_menu($items);
                      ?>
                </div>
              </div>
              
              <input type="hidden" id="nestable-output">
            </div>
        
          <div class="col-lg-4">  
                
               <div class="ibox">
                <div class="ibox-title">
                  <h3>Source Menu URL</h3>
                </div><!-- /.box-header -->
                <div class="ibox-content">
                    <table class="table table-striped">
                    <tr><td><input class='form-control' type="text" id="label" placeholder="Nama Menu" required></td></tr>
                    <tr><td><input class='form-control link' type="text" id="link" placeholder="example.com" autocomplete='off' required>
                    </td></tr>
                    <tr>
                      <td>
                        <div id="icon">
                        <a data-toggle="modal" class="btn btn-primary" href="#modal-form">Pilih Icon</a>
                         </div>
                            <div id="modal-form" class="modal fade" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                          <h4>Favicon Menu</h4>
                                            <div class="row"> 
                         <?php foreach ($icon as $key) { ?>
                            
                            <div class="control-group">
                                                <div class="radio">
                                                    <label>
                                                        <input class="icon_r" type="radio" value="<?= $key ?>">
                                                        <span class="text"><i class="fa <?= $key ?>"></i><?= $key ?></span>
                                                    </label>
                                                </div>
                                                
                                            </div>
                               
                           <?php } ?>
                                        </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="tampil"></div>
                          </td>
                       </tr>
                    <tr><td>
                      <h4>Level Akses</h4>
                      <br />
                       <?php 
                       $level = ['admin','user','staff'];
                       foreach($level as $s): ?>
                            <div class="form-group">
                                          <div class="checkbox">
                                              <label>
                                                  <input type="checkbox" name="checkbox" value="<?= $s ?>">
                                                  <span class="text"><?= ucfirst($s) ?></span>
                                              </label>
                                          </div>
                                      </div>
                       <?php endforeach; ?>
                    </td></tr>
                    <tr><td><button class='btn btn-sm btn-success' id="submit">Submit</button> <button class='btn btn-sm btn-default' id="reset">Reset</button></td></tr>
                    </table>
                </div>
              </div>
            </div>
            </div>
  <script>
$(function(){
    $('.tampil').html('<br /><div class="callout callout-danger">Icon Menu</div>') ;
    $('.icon_r').click(function(){
     var id = $(this).val();
    $('.modal').modal('hide');
    $('.tampil').html('<div class="control-group"><div class="radio"><label><input id="fa_icon" type="radio" value="fa '+id+'" checked><span class="text"><i class="fa '+id+'"></i>'+id+'</span></label></div></div>');
 
  });  
});
 
$(document).ready(function(){
    var updateOutput = function(e){
        var list   = e.length ? e : $(e.target),
            output = list.data('output');
        if (window.JSON) {
            output.val(window.JSON.stringify(list.nestable('serialize')));//, null, 2));
        } else {
            output.val('JSON browser support required for this demo.');
        }
    };

    // activate Nestable for list 1
    $('#nestable').nestable({
        group: 1
    })
    .on('change', updateOutput);

    // output initial serialised data
    updateOutput($('#nestable').data('output', $('#nestable-output')));
    $('#nestable-menu').on('click', function(e){
        var target = $(e.target),
            action = target.data('action');
        if (action === 'expand-all') {
            $('.dd').nestable('expandAll');
        }
        if (action === 'collapse-all') {
            $('.dd').nestable('collapseAll');
        }
    });
});


function kosong(){
 $("input[name='checkbox']").val('');
 $('.tampil').html('<br /><div class="callout callout-danger">Icon Menu</div>');
}


</script>

<script>
  $(document).ready(function(){
    $("#load").hide();
    $("#submit").click(function(){
    $("#load").show();  

    var levels =  [];   
      $.each($("input[name='checkbox']:checked"),function() {
      levels.push($(this).val());
    });
    var selected_values = levels.join(".");
    var dataString = { 
              level : selected_values,
              icon : $("#fa_icon").val(),
              label : $("#label").val(),
              link : $("#link").val(),
              id : $("#id").val()
            };
         
        $.ajax({
            type: "POST",
            url: "<?= base_url('menu/menu_web/save_db'); ?>",
            data: dataString,
            dataType: "json",
            cache : false,
            success: function(data){
              if(data.type == 'add'){
                 $("#menu-id").append(data.menu);
              } else if(data.type == 'edit'){
                 $('#label_show'+data.id).html(data.label);
                 $('#link_show'+data.id).html(data.link);
                 $('#page_show'+data.id).html(data.page);
                 $('#kategori_show'+data.id).html(data.kategori);
              }
              $('#label').val('');
              $('#link').val('');
              $('#page').val('');
              $('#kategori').val('');
              $('#id').val('');
              $("#load").hide();
              kosong();
            } ,error: function(xhr, status, error) {
              alert(error);
            },
        });
    });

    $('.dd').on('change', function() {
        $("#load").show();
     
          var dataString = { 
              data : $("#nestable-output").val(),
            };

        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>menu/menu_web/save_position",
            data: dataString,
            cache : false,
            success: function(data){
              $("#load").hide();
            } ,error: function(xhr, status, error) {
              alert(error);
            },
        });
    });

    $(document).on("click",".pos-button",function() {
        var id = $(this).attr('id');
            $("#load").show();
             $.ajax({
                type: "POST",
                url: "<?= base_url('menu/menu_web/kategori'); ?>",
                data: { id : id },
                cache : false,
                success: function(data){
                  $("#load").hide();
                } ,error: function(xhr, status, error) {
                  alert(error);
                },
            });
    });

    $(document).on("click",".del-button",function() {
        var x = confirm('Apa anda yakin untuk hapus Data ini?');
        var id = $(this).attr('id');
        if(x){
            $("#load").show();
             $.ajax({
                type: "POST",
                url: "<?php echo base_url(); ?>menu/menu_web/delete",
                data: { id : id },
                cache : false,
                success: function(data){
                  $("#load").hide();
                  $("li[data-id='" + id +"']").remove();
                } ,error: function(xhr, status, error) {
                  alert(error);
                },
            });
        }
    });

    $(document).on("click",".edit-button",function() {
        var id = $(this).attr('id');
        var label = $(this).attr('label');
        var link = $(this).attr('link');
        var level = $(this).attr('level'); 
        var icon = $(this).attr('icon');  

        $("#id").val(id);
        $("#label").val(label);
        $("#link").val(link);
        $("#level").val(level); 
        $(".tampil").html('<div class="control-group"><div class="radio"><label><input id="fa_icon" type="radio" value="fa '+icon+'" checked><span class="text"><i class="fa '+icon+'"></i>'+icon+'</span></label></div></div>');
    });

    $(document).on("click","#reset",function() {
        $('#label').val('');
        $('#link').val('');
        $('#id').val('');
    });

  });

</script>

</div>  