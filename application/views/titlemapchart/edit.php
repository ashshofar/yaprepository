<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                <h1>Edit Map Chart</h1>
            </header>
                <div class="panel-body">
                  <?php foreach ($data_edit as $data) { ?>
                      <form class="form-horizontal form-label-left" method="post" action="<?php echo base_url().'/titlemapchart/update' ?>">
                          <div class="form-group ">
                              <label for="firstname" class="control-label col-lg-2">NIK</label>
                              <div class="col-lg-10">
                                  <input class=" form-control" id="nik" name="nik" type="text" required value="<?php echo $data->nik ?>"/>
                              </div>
                          </div>

                          <div class="form-group">
                              <div class="col-lg-offset-2 col-lg-10">
                                <button class="btn btn-primary" type="submit">Simpan</button>
                                <?php echo anchor(base_url().'titlemapchart/','<button class="btn btn-default" type="button">Kembali</button>'); ?>
                              </div>
                          </div>
                      </form>
                      <?php
                        }
                      ?>
                </div>
      	</section>
    </div>
</div>
