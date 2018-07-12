$(document).ready(function(){
    $('#mydata').DataTable();
    show_product(); //call function show all product

    // $('#mydata').DataTable();

//function show all product
function show_product(){
    $.ajax({
        type  : 'ajax',
        url   : '<?php echo base_url('SuratCuti/cuti_data')?>',
        async : false,
        dataType : 'json',
        success : function(data){
            var html = '';
            var i;
            for(i=0; i<data.length; i++){
                html += '<tr>'+
                        '<td>'+data[i].nip_dosen+'</td>'+
                        '<td>'+data[i].kd_jenis+'</td>'+
                        '<td>'+data[i].tgl_pengajuan+'</td>'+
                        '<td>'+data[i].tgl_mulai +'</td>'+
                        '<td>'+data[i].tgl_akhir +'</td>'+
                        '<td>'+data[i].alasan +'</td>'+
                        '<td>'+data[i].status_pengajuan+'</td>'+
                        '<td style="text-align:right;">'+
                            '<a href="javascript:void(0);" id="item_edit" class="btn btn-info btn-sm item_edit fa fa-pencil" data-id_cuti="'+data[i].id+
                                                                        '" data-tgl_mulai_cuti="'+data[i].tgl_mulai+
                                                                        '" data-tgl_akhir_cuti="'+data[i].tgl_akhir+
                                                                        '" data-alasan_cuti="'+data[i].alasan+
                                                                        '" data-nip_dosen_cuti="'+data[i].nip_dosen+
                                                                        '" data-kd_jenis_cuti="'+data[i].kd_jenis+ 
                                                                        '"></a>'+' '+
                            '<a href="javascript:void(0);" class="btn btn-danger btn-sm item_delete fa fa-trash-o" data-id_cuti="'+data[i].id+'"></a>'+
                        '</td>'+
                        '</tr>';
            }
            $('#show_data').html(html);
        }

    });
}

    //Save product
    $('#btn_save').on('click',function(){

        var pengajuan_cuti  = $('#pengajuan_cuti_input').val(); 
        var mulai_cuti  = $('#mulai_cuti_input').val();
        var akhir_cuti  = $('#akhir_cuti_input').val();
        var alasan_cuti = $('#alasan_cuti_input').val(); 
        var nip_dosen_cuti =$('#nip_dosen_cuti_input').val();
        var kd_jenis_cuti =$('#kd_jenis_cuti_input').val();

        $.ajax({
            type : "POST",
            url  : "<?php echo site_url('SuratCuti/save')?>",
            dataType : "JSON",
            data : {pengajuan_cuti:pengajuan_cuti, mulai_cuti:mulai_cuti, akhir_cuti:akhir_cuti, alasan_cuti:alasan_cuti, nip_dosen_cuti:nip_dosen_cuti, kd_jenis_cuti:kd_jenis_cuti},
            success: function(data){
                                $('#myForm')[0].reset();
              $('#Modal_Add').modal('hide');
              show_product();
            }
        });
        return false;
    });

    //get data for update record
    $('#show_data').on('click','.item_edit',function(){
        var id_cuti         = $(this).data('id_cuti');
        var tahun_cuti      = $(this).data('tahun_cuti');
        var mulai_cuti      = $(this).data('tgl_mulai_cuti');
        var akhir_cuti      = $(this).data('tgl_akhir_cuti');
        var alasan_cuti     = $(this).data('alasan_cuti');
        var nip_dosen_cuti  = $(this).data('nip_dosen_cuti');
        var kd_jenis_cuti   = $(this).data('kd_jenis_cuti');

        $('#Modal_Edit').modal('show');
        $('[name="id_cuti_edit"]').val(id_cuti);
        $('[name="tahun_cuti_edit"]').val(tahun_cuti);
        $('[name="mulai_cuti_edit"]').val(mulai_cuti);
        $('[name="akhir_cuti_edit"]').val(akhir_cuti);
        $('[name="alasan_cuti_edit"]').val(alasan_cuti);
        $('[name="nip_dosen_cuti_edit"]').val(nip_dosen_cuti);
        $('[name="kd_jenis_cuti_edit"]').val(kd_jenis_cuti);
    });

    //update record to database
     $('#btn_update').on('click',function(){
        var id_cuti     = $('#id_cuti_edit').val();
        var tahun_cuti  = $('#tahun_cuti_edit').val(); 
        var mulai_cuti  = $('#mulai_cuti_edit').val();
        var akhir_cuti  = $('#akhir_cuti_edit').val();
        var alasan_cuti = $('#alasan_cuti_edit').val(); 
        var nip_dosen_cuti =$('#nip_dosen_cuti_edit').val();
        var kd_jenis_cuti =$('#kd_jenis_cuti_edit').val();
        $.ajax({
            type : "POST",
            url  : "<?php echo site_url('SuratCuti/update')?>",
            dataType : "JSON",
            data : {id_cuti:id_cuti , tahun_cuti:tahun_cuti, mulai_cuti:mulai_cuti, akhir_cuti:akhir_cuti, alasan_cuti:alasan_cuti, nip_dosen_cuti:nip_dosen_cuti, kd_jenis_cuti:kd_jenis_cuti},
            success: function(data){
                                $('#myForm')[0].reset();
              $('#Modal_Edit').modal('hide');
              show_product();
            }
        });
        return false;
    });

    //get data for delete record
    $('#show_data').on('click','.item_delete',function(){
        var id_cuti= $(this).data('id_cuti');

        $('#Modal_Delete').modal('show');
        $('[name="id_cuti_delete"]').val(id_cuti);
    });

    //delete record to database
     $('#btn_delete').on('click',function(){
        var id_cuti = $('#id_cuti_delete').val();
        $.ajax({
            type : "POST",
            url  : "<?php echo site_url('SuratCuti/delete')?>",
            dataType : "JSON",
            data : {id_cuti:id_cuti},
            success: function(data){
                $('[name="id_cuti_delete]').val("");
                $('#Modal_Delete').modal('hide');
                show_product();
            }
        });
        return false;
    });

});