  <div class="row">
    <div class="col-md-12">
      <div class="ibox float-e-margins">
        <div class="ibox-title">
          <h5>LAMPIRAN DOKUMEN</h5>
          <div class="ibox-tools">

            <a class="collapse-link">
              <i class="fa fa-chevron-up"></i>
            </a>
          </div>
        </div>
        <div class="ibox-content">

          <div class="row">
            <div class="col-md-12">
              <center>
                <a class="btn btn-primary tambah_dok">Tambah Lampiran</a>
                <br>
                <br>
              </center>
            </div>
          </div>

          <div id="lampiran_container">

            <div ng-repeat="n in [1,2,3,4,5]">
              <div class="row lampiran" style="display:none;" data-no="{{$index+1}}">
                <div class="col-md-12">
                  <div class="ibox float-e-margins">
                    <div class="ibox-title">
                      <h5>DOKUMEN #{{$index+1}}</h5>
                      <div class="ibox-tools">

                        <a class="tutup" data-no="{{$index+1}}">
                          <i class="fa fa-times"></i>
                        </a>

                        <a class="collapse-link">
                          <i class="fa fa-chevron-up"></i>
                        </a>

                      </div>
                    </div>
                    <div class="ibox-content">

                      <div class="form-group">
                        <label class="col-md-1 control-label">Kategori</label>
                        <div class="col-md-4">

                          <select name="doc_category_inp[{{$index+1}}]" id="tipe_inv" class="form-control" ng-model="data.kategori_dokumen">
                            <option ng-repeat="option in data.list_kategori_dokumen" value="{{option.id}}">{{option.name}}</option>
                          </select>

                        </div>
                        <label class="col-md-1 control-label">Lampiran</label>
                        <div class="col-md-6">
                          <div class="input-group">
                            <span class="input-group-btn">
                              <button type="button" data-id="doc_attachment_inp_{{$index+1}}" data-folder="procurement/permintaan" data-preview="preview_file_{{$index+1}}" class="btn btn-primary upload">
                                <i class="fa fa-cloud-upload"></i>
                              </button> 
                              <button type="button" data-id="doc_attachment_inp_{{$index+1}}" data-folder="procurement/permintaan" data-preview="preview_file_{{$index+1}}" class="btn btn-danger removefile">
                                <i class="fa fa-remove"></i>
                              </button> 
                            </span> 
                            <input readonly="" type="text" class="form-control" id="doc_attachment_inp_{{$index+1}}" name="doc_attachment_inp[{{$index+1}}]" >
                            <span class="input-group-btn">
                              <button type="button" data-url="<?php echo site_url() ?>/log/download_attachment/procurement" class="btn btn-primary preview_upload" id="preview_file_{{$index+1}}">
                                <i class="fa fa-share"></i>
                              </button> 
                            </span> 
                          </div>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="col-md-1 control-label">Deskripsi</label>
                        <div class="col-md-11">
                          <textarea class="form-control" maxlength="1000" name="doc_desc_inp[{{$index+1}}]"></textarea>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>

        </div>
      </div>
    </div>
  </div>

  <script type="text/javascript">


  $(document).ready(function(){

    $(".tambah_dok").click(function(){

      var total = parseInt($("div.lampiran:visible").length);
      var find = parseInt($("div.lampiran:hidden").attr("data-no"));

      if(total == 4){
        $(".tambah_dok").hide();
      }
      $("div.lampiran[data-no='"+find+"']").show();
      return false;

    });

    $(".tutup").click(function(){

      $(".tambah_dok").show();
      var no = parseInt($(this).attr("data-no"));
      $("div.lampiran[data-no='"+no+"']").hide();

      return false;

    });

  });
</script>