
    <div class="content-wrapper">
      <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title"><?=$title_page;?></h4>
              <?php if($this->session->flashdata('msg_alert')) { ?>

              <div class="alert alert-info">
                <label style="font-size: 13px;"><?=$this->session->flashdata('msg_alert');?></label>
              </div>
              <?php } ?>
              <?=form_open('data_master/edit/nama_izin/' . $data_namaizin->id_namaizin, array('method'=>'post'));?>
                <input type="hidden" name="id_namaizin" value="<?=$data_namaizin->id_namaizin;?>">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Type Izin</label>
                      <div class="col-sm-9">
                        <select name="type" class="form-control">
                          <option disabled selected>-- Pilih --</option>
                          <?php
                            $izin = array(
                              array(
                                'id'    => 'cuti',
                                'nama'  => 'Cuti'
                              )
                            );
                            foreach($izin as $iz) {
                          ?>
                          <option value="<?=$iz['id'];?>" <?=( ($iz['id']==$data_namaizin->type) ? 'selected' : '');?>><?=$iz['nama'];?></option>
                          <?php
                            }
                          ?>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Nama Izin</label>
                      <div class="col-sm-9">
                        <input type="text" value="<?=$data_namaizin->nama_izin;?>" name="nama_izin" class="form-control" />
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group row">
                      <button type="submit" class="btn btn-success mr-2">Submit</button>
                      <button class="btn btn-light" type="reset">Reset</button>
                    </div>
                  </div>
                </div>
              <?=form_close();?>
            </div>
          </div>
        </div>
    </div>
  </div>