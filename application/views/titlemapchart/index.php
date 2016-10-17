<link href="<?php echo base_url(); ?>assets/js/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url(); ?>assets/js/datatables/buttons.bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url(); ?>assets/js/datatables/fixedHeader.bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url(); ?>assets/js/datatables/responsive.bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url(); ?>assets/js/datatables/scroller.bootstrap.min.css" rel="stylesheet" type="text/css" />

<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">
  <div class="x_panel">
    <div class="x_title">
      <h1>Map Chart</h1>
    </div>
    <button class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">New Map Chart</button>
    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
                  <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                     <form class="cmxform form-horizontal tasi-form" method="post" action="<?php echo base_url().'/titlemapchart/save' ?>">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                        </button>
                        <h4 class="modal-title" id="myModalLabel">New Map Chart</h4>
                      </div>
                      <div class="modal-body">
                        <div class="form-group ">
                            <label for="title" class="control-label col-lg-2">Title</label>
                            <div class="col-lg-10">
                                <input class=" form-control" id="title" name="title" type="text" required />
                            </div>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Save</button>
                      </div>
                      </form>

                    </div>
                  </div>
                </div>
  </div>
</div>
</div>
<div class="clearfix"></div>

<div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">

              <div class="x_content">
                <table id="datatable" class="table table-striped table-bordered">
                  <thead>
                    <tr>
                      <th>Title</th>
                      <th>Chart</th>
                      <th>Action</th>
                    </tr>
                  </thead>

                  <tbody>

                    <?php
                    foreach ($titlemapcharts->result() as $titlemapchart) { ?>
                    <tr>
                        <td><?php echo $titlemapchart->title; ?></td>
                        <td>
                          <?php echo anchor(base_url().'mapchart/view/'.$titlemapchart->id,'<button class="btn btn-primary btn-xs">View</button>'); ?>
                          <?php echo anchor(base_url().'mapchart/view/'.$titlemapchart->id,'<button class="btn btn-success btn-xs">Edit Data</button>'); ?>
                        </td>
                        <td>

                        <?php echo anchor(base_url().'titlemapcharts/view/'.$titlemapchart->id,'<button class="btn btn-success btn-xs">Detail</button>'); ?>

                        <?php echo anchor(base_url().'titlemapcharts/edit/'.$titlemapchart->id,'<button class="btn btn-primary btn-xs">Edit</button>'); ?>

                        <?php echo anchor(base_url().'titlemapchart/delete/'.$titlemapchart->id,'<button class="btn btn-danger btn-xs">Hapus</button>'); ?>

                        </td>
                    </tr>
                    <?php } ?>

                  </tbody>
                </table>
              </div>
            </div>



<script src="<?php echo base_url(); ?>assets/js/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/datatables/dataTables.bootstrap.js"></script>
<script src="<?php echo base_url(); ?>assets/js/datatables/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/datatables/buttons.bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/datatables/jszip.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/datatables/pdfmake.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/datatables/vfs_fonts.js"></script>
<script src="<?php echo base_url(); ?>assets/js/datatables/buttons.html5.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/datatables/buttons.print.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/datatables/dataTables.fixedHeader.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/datatables/dataTables.keyTable.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/datatables/dataTables.responsive.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/datatables/responsive.bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/datatables/dataTables.scroller.min.js"></script>

      <script>
        var handleDataTableButtons = function() {
            "use strict";
            0 !== $("#datatable-buttons").length && $("#datatable-buttons").DataTable({
              dom: "Bfrtip",
              buttons: [{
                extend: "copy",
                className: "btn-sm"
              }, {
                extend: "csv",
                className: "btn-sm"
              }, {
                extend: "excel",
                className: "btn-sm"
              }, {
                extend: "pdf",
                className: "btn-sm"
              }, {
                extend: "print",
                className: "btn-sm"
              }],
              responsive: !0
            })
          },
          TableManageButtons = function() {
            "use strict";
            return {
              init: function() {
                handleDataTableButtons()
              }
            }
          }();
      </script>
      <script type="text/javascript">
        $(document).ready(function() {
          $('#datatable').dataTable();
          $('#datatable-keytable').DataTable({
            keys: true
          });
          $('#datatable-responsive').DataTable();
          $('#datatable-scroller').DataTable({
            ajax: "js/datatables/json/scroller-demo.json",
            deferRender: true,
            scrollY: 380,
            scrollCollapse: true,
            scroller: true
          });
          var table = $('#datatable-fixed-header').DataTable({
            fixedHeader: true
          });
        });
        TableManageButtons.init();
      </script>
