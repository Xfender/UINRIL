 $(document).ready(function(){
                    show_product(); //call function show all product

                    $('#mydata').dataTable();

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
                                            '<td>'+data[i].id+'</td>'+
                                            '<td>'+data[i].tahun+'</td>'+
                                            '<td>'+data[i].tgl_pengajuan+'</td>'+
                                            '<td>'+data[i].tgl_mulai +'</td>'+
                                            '<td>'+data[i].tgl_akhir +'</td>'+
                                            '<td>'+data[i].alasan +'</td>'+
                                            '<td>'+data[i].status_pengajuan+'</td>'+
                                            '<td>'+data[i].nip_dosen+'</td>'+
                                            '<td>'+data[i].kd_jenis+'<td>'+
                                            '<td style="text-align:right;">'+
                                                '<a href="javascript:void(0);" class="btn btn-info btn-sm item_edit" data-id_cuti="'+data[i].id+
                                                                                            '" data-tahun_cuti="'+data[i].tahun+
                                                                                            '" data-tgl_mulai_cuti="'+data[i].tgl_mulai+
                                                                                            '" data-tgl_akhir_cuti="'+data[i].tgl_akhir+
                                                                                            '" data-alasan_cuti="'+data[i].alasan+
                                                                                            '" data-nip_dosen_cuti"'+data[i].nip_dosen+
                                                                                            '" data-kd_jenis_cuti"'+data[i].kd_jenis+ 
                                                                                            '">Edit</a>'+' '+
                                                '<a href="javascript:void(0);" class="btn btn-danger btn-sm item_delete" data-product_code="'+data[i].product_code+'">Delete</a>'+
                                            '</td>'+
                                            '</tr>';
                                }
                                $('#show_data').html(html);
                            }

                        });
                    }

                    //Save product
                    $('#btn_save').on('click',function(){
                        var product_code = $('#product_code').val();
                        var product_name = $('#product_name').val();
                        var price        = $('#price').val();
                                    var user_name   = $('#user_name').val();

                        $.ajax({
                            type : "POST",
                            url  : "<?php echo site_url('product/save')?>",
                            dataType : "JSON",
                            data : {product_code:product_code , product_name:product_name, price:price, user_name:user_name},
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
                        var mulai_cuti      = $(this).data('mulai_cuti');
                        var akhir_cuti      = $(this).data('akhir_cuti');
                        var alasan_cuti     = $(this).data('alasan_cuti');
                        var nip_dosen_cuti  = $(this).data('nip_dosen_cuti');
                        var kd_jenis_cuti   = $(this).data('kd_jenis_cuti');

                        $('#Modal_Edit').modal('show');
                        $('[name="id_cuti_edit"]').val(id_cuti);
                        $('[name="tahun_cuti_edit"]').val(tahun_cuti);
                        $('[name="mulai_cuti_edit"]').val(mulai_cuti);
                        $('[name="akhir_cuti_edit"]').val(akhir_cuti);
                        $('[name="alasan_cuti_edit"]').val(alasan_cuti);
                        $('[name="nip_dosen_cuti_edit"]').val(nip_dosen);
                        $('[name="kd_jenis_cuti_edit"]').val(kd_jenis_cuti);
                    });

                    //update record to database
                     $('#btn_update').on('click',function(){
                        var product_code = $('#product_code_edit').val();
                        var product_name = $('#product_name_edit').val();
                        var price        = $('#price_edit').val();
                                    var user_name    = $('#user_name_edit').val();
                        $.ajax({
                            type : "POST",
                            url  : "<?php echo site_url('product/update')?>",
                            dataType : "JSON",
                            data : {product_code:product_code , product_name:product_name, price:price, user_name:user_name},
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
                        var product_code = $(this).data('product_code');

                        $('#Modal_Delete').modal('show');
                        $('[name="product_code_delete"]').val(product_code);
                    });

                    //delete record to database
                     $('#btn_delete').on('click',function(){
                        var product_code = $('#product_code_delete').val();
                        $.ajax({
                            type : "POST",
                            url  : "<?php echo site_url('product/delete')?>",
                            dataType : "JSON",
                            data : {product_code:product_code},
                            success: function(data){
                                $('[name="product_code_delete"]').val("");
                                $('#Modal_Delete').modal('hide');
                                show_product();
                            }
                        });
                        return false;
                    });

                });