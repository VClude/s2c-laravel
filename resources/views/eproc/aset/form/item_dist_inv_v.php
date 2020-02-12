<div class="row" ng-controller="form_item">
  <div class="col-md-12">
    <div class="ibox float-e-margins">
      <div class="ibox-title">
        <h5>DISTRIBUSI ITEM</h5>
        <div class="ibox-tools">
          <a class="collapse-link">
            <i class="fa fa-chevron-up"></i>
          </a>
        </div>
      </div>
      <div class="ibox-content">

        <div class="form-group">
          <label class="col-md-2 control-label">Kode</label>
          <div class="col-md-6">
            <div class="input-group">
              <span class="input-group-btn">
                <button type="button" data-id="kode_item" data-url="<?php echo site_url('aset/picker_inv') ?>" class="btn btn-primary picker barang_btn">...</button> 
              </span>
              <input readonly="" type="text" class="form-control" id="kode_item" name="kode_item" >
            </div>
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-2 control-label">Nama</label>
          <div class="col-md-10">
            <p class="form-control-static" id="deskripsi_item"></p>
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-2 control-label">Stok</label>
          <div class="col-md-10">
            <p class="form-control-static" id="stok_item"></p>
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-2 control-label">Gudang</label>
          <div class="col-md-10">
            <p class="form-control-static" id="gudang_item"></p>
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-2 control-label">Satuan</label>
          <div class="col-md-2">
            <input type="text" class="form-control" maxlength="12" name="satuan_item_inp" id="satuan_item_inp" >
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-2 control-label">Jumlah</label>
          <div class="col-md-2">
            <input type="text" class="form-control money" maxlength="40" name="jumlah_item_inp" id="jumlah_item_inp" >
          </div>
        </div>

        <center>
          <a class="btn btn-primary action_item">Simpan</a>
          <a class="btn btn-default empty_item">Hapus</a>
          <input type="hidden" id="current_item">
          <br>
        </center>

        <hr>

        <table class="table table-bordered" id="item_table">
          <thead>
            <tr>
              <th>#</th>
              <th>Kode</th>
              <th>Item</th>
              <th>Jumlah</th>
              <th>Satuan</th>
              <th>Gudang</th>
            </tr>
          </thead>
          <tbody>

          </tbody>
        </table>

      </div>

    </div>
  </div>
</div>

<script type="text/javascript">

  $(document).ready(function(){

    function reset_field(){
      $("#kode_item").val("");
      $("#tipe_item").text("");
      $("#deskripsi_item").text("");
      $("#jumlah_item_inp").val("");
      $("#satuan_item_inp").val("");
      $("#harga_satuan_item_inp").val("");
      $("#current_item").val("");
      $("#stok_item").html("");
      $("#gudang_item").html("");
    }

    $(document.body).on("change","#kode_item",function(){

      var tipe = $("#tipe_item").text();
      var id = $(this).val();
      var url = "<?php echo site_url('aset/data_aset') ?>";

      $.ajax({
        url : url+"?id="+id,
        dataType:"json",
        success:function(data){
          var mydata = data.rows[0];

          $("#deskripsi_item").html(mydata.nama_brg);
          $("#stok_item").html(mydata.stok_brg);
          $("#gudang_item").html(mydata.gudang_brg);
          $("#satuan_item_inp").val(mydata.satuan_brg);
          $("#harga_satuan_item_inp").val(mydata.total_price);

        }
        
      });

    });

    $(".action_item").click(function(){

      var current_item = $("#current_item").val();
      var no = current_item;

      if(current_item == ""){
        no = ($("#item_table tr").length) ? parseInt($("#item_table tr").length) : 1;
      }

      var kode = $("#kode_item").val();
      var tipe = $("#tipe_item").text();
      var deskripsi = $("#deskripsi_item").text();
      var jumlah = $("#jumlah_item_inp").val();
      var satuan = $("#satuan_item_inp").val();
      var jumlah_int = $("#jumlah_item_inp").autoNumeric('get');
      var gudang = $("#gudang_item").text();
      var gudang_label = $("#gudang_item").text();
      var stok = $("#stok_item").text();
      var unit_kerja = $("#unit_kerja_inv option:selected").val();
      var unit_kerja_label = $("#unit_kerja_inv option:selected").text();

      if(kode == ""){

        alert("Pilih item");

      } else if(jumlah_int < 1){

        alert("Jumlah tidak boleh kurang dari 1");

      } else {

        var html = "<tr><td><button type='button' class='btn btn-primary btn-xs edit_item' data-no='"+no+"'><i class='fa fa-edit'></i></button></td>";
        html += "<td><input type='hidden' class='kode_item' data-no='"+no+"' name='item_kode["+no+"]' value='"+kode+"'/>"+kode+"</td>";
        html += "<td><input type='hidden' class='deskripsi_item' data-no='"+no+"' name='item_deskripsi["+no+"]' value='"+deskripsi+"'/>"+deskripsi+"</td>";
        html += "<td class='text-right'><input type='hidden' class='jumlah_item' data-no='"+no+"' name='item_jumlah["+no+"]' value='"+jumlah_int+"'/>"+jumlah+"</td>";
        html += "<td><input type='hidden' class='satuan_item' data-no='"+no+"' name='item_satuan["+no+"]' value='"+satuan+"'/>"+satuan+"</td>";
        html += "<td><input type='hidden' class='gudang_item' data-no='"+no+"' name='item_gudang["+no+"]' value='"+gudang+"'/>"+gudang_label+"</td>";
        html += "<input type='hidden' class='stok_item' data-no='"+no+"' name='item_stok["+no+"]' value='"+stok+"'/>";
        html += "</tr>";
        $("#item_table").append(html);

        reset_field();

      }

    });

    $(document.body).on("click",".empty_item",function(){

      reset_field();

    });

    $(document.body).on("click",".edit_item",function(){

      var no = $(this).attr('data-no');
      var kode = $(".kode_item[data-no='"+no+"']").val();
      var tipe = $(".tipe_item[data-no='"+no+"']").val();
      var deskripsi = $(".deskripsi_item[data-no='"+no+"']").val();
      var jumlah = $(".jumlah_item[data-no='"+no+"']").val();
      var satuan = $(".satuan_item[data-no='"+no+"']").val();
      var ppn = $(".ppn_satuan_item[data-no='"+no+"']").val();
      var pph = $(".pph_satuan_item[data-no='"+no+"']").val();
      var gudang = $(".gudang_item[data-no='"+no+"']").val();
      var stok = $(".stok_item[data-no='"+no+"']").val();

      $("#current_item").val(no);
      $("#kode_item").val(kode);
      $("#tipe_item").text(tipe);
      $("#deskripsi_item").text(deskripsi);
      $("#jumlah_item_inp").val(inttomoney(jumlah));
      $("#satuan_item_inp").val(satuan);
      var is_ppn = (parseInt(ppn) != 0);
      $("#ppn_item_inp").prop('checked',is_ppn);
      $("#pph_item_inp").val(pph);
      $("#stok_item").html(stok);
      $("#gudang_item").html(gudang);

      $(this).parent().parent().remove();

      return false;

    });
  })

</script>