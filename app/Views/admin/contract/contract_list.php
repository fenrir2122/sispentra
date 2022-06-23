<!DOCTYPE html>
<html lang="en">

<head>
  <!-- header -->
  <?php echo view('layout/admin/header_admin'); ?>
  <!-- /header -->
  <style type="text/css" class="init">
    div.dataTables_wrapper {
      margin-bottom: 3em;
    }
  </style>
</head>

<body class="nav-md">
  <!-- quick info -->
  <?php echo view('layout/admin/quick_info'); ?>
  <!-- /quick info -->

  <!-- sidebar, top naivgation, menu footer -->
  <?php echo view('layout/admin/navi_admin'); ?>
  <!-- /sidebar, top naivgation, menu footer -->

  <!-- page content -->
  <div class="right_col" role="main">
    <div class="">
      <div class="page-title">
        <div class="title_left">
          <h3>Contract</h3>
        </div>
      </div>

      <div class="clearfix"></div>

      <div class="row">
        <div class="col-md-12 col-sm-12 ">

          <div class="col-md-12 col-sm-12">
            <div class="x_panel">
              <div class="x_title">
                <div class="d-flex">
                  <div class="flex-grow-1">
                    <h2>Contract List</h2>
                  </div>
                  <div class="">
                    <div class="d-flex">
                      <div class="flex-fill">
                        <a class="btn btn-round btn-sm btn-primary my-auto" href="<?php echo base_url('public/index.php/admin/addcontract');?>"><i class="fa fa-plus fa-fw"></i> Add Contract</a>
                      </div>
                      <div class="flex-fill">
                        <a class="collapse-link ml-2"><i class="fa fa-chevron-up"></i></a>
                      </div>
                      <div class="flex-fill">
                        <a class="close-link ml-2"><i class="fa fa-close"></i></a>
                      </div>
                    </div>
                  </div>
                </div>

              <div class="x_content">
                <!-- <ul class="nav navbar-right panel_toolbox float-right">
                    <li></li>
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <a class="btn btn-round btn-sm btn-primary float-right" href=""><i class="fa fa-plus fa-fw"></i> Add Contract</a> -->
              </div>
              <div class="clearfix"></div>
            </div>
            <div class="x_panel">
              <div class="x_content">
                <div class="row">
                  <div class="col-sm-12">
                    <div class="card-box responsive">
                      <p class="text-muted font-13 m-b-30">
                        Contract Office Pertamina Cilacap
                      </p>
                      <table id="example" class="table table-bordered dt-responsive table-hover dataTable" cellspacing="0" width="100%" role="grid" aria-describedby="datatable_info" style="width: 100%;">
                        <thead class="thead-dark">
                          <tr role="row">
                            <th class="align-middle sorting" tabindex="0" aria-controls="datatable-responsive" rowspan="1" colspan="1" style="width: 63px;" aria-sort="ascending" aria-label="First name: activate to sort column descending">Bidding Code</th>
                            <th class="align-middle sorting" tabindex="0" aria-controls="datatable-responsive" rowspan="1" colspan="1" style="width: 62px;" aria-label="Last name: activate to sort column ascending">No. PR</th>
                            <th class="align-middle sorting" tabindex="0" aria-controls="datatable-responsive" rowspan="1" colspan="1" style="width: 70px;" aria-label="Position: activate to sort column ascending">Nama Pekerjaan</th>
                            <th class="align-middle sorting" tabindex="0" aria-controls="datatable-responsive" rowspan="1" colspan="1" style="width: 64px;" aria-label="Office: activate to sort column ascending">Vendor</th>
                            <th class="align-middle sorting" tabindex="0" aria-controls="datatable-responsive" rowspan="1" colspan="1" style="width: 24px;" aria-label="Age: activate to sort column ascending">Tgl Permintaan Lelang</th>
                            <th class="align-middle sorting" tabindex="0" aria-controls="datatable-responsive" rowspan="1" colspan="1" style="width: 58px;" aria-label="Start date: activate to sort column ascending">Tgl Penetapan</th>
                            <th class="align-middle sorting" tabindex="0" aria-controls="datatable-responsive" rowspan="1" colspan="1" style="width: 46px;" aria-label="Salary: activate to sort column ascending">Durasi</th>
                            <th class="align-middle sorting" tabindex="0" aria-controls="datatable-responsive" rowspan="1" colspan="1" style="width: 30px;" aria-label="Extn.: activate to sort column ascending">No. PO</th>
                            <th class="align-middle sorting" tabindex="0" aria-controls="datatable-responsive" rowspan="1" colspan="1" style="width: 142px;" aria-label="PO Pengganti: activate to sort column ascending">PO Pengganti</th>
                            <th class="align-middle sorting" tabindex="0" aria-controls="datatable-responsive" rowspan="1" colspan="1" style="width: 142px;" aria-label="Minim TKDN: activate to sort column ascending">Minim TKDN</th>
                            <th class="align-middle sorting" tabindex="0" aria-controls="datatable-responsive" rowspan="1" colspan="1" style="width: 142px;" aria-label="PO Risk: activate to sort column ascending">PO Risk</th>
                            <th class="align-middle sorting" tabindex="0" aria-controls="datatable-responsive" rowspan="1" colspan="1" style="width: 142px;" aria-label="Nilai Kontrak: activate to sort column ascending">Nilai Kontrak</th>
                            <th class="align-middle sorting" tabindex="0" aria-controls="datatable-responsive" rowspan="1" colspan="1" style="width: 142px;" aria-label="Nilai Penawaran Awal: activate to sort column ascending">Nilai Penawaran Awal</th>
                            <th class="align-middle sorting" tabindex="0" aria-controls="datatable-responsive" rowspan="1" colspan="1" style="width: 142px;" aria-label="Nilai OE: activate to sort column ascending">Nilai OE</th>
                            <th class="align-middle sorting" tabindex="0" aria-controls="datatable-responsive" rowspan="1" colspan="1" style="width: 142px;" aria-label="Drafter: activate to sort column ascending">Drafter</th>
                            <th class="align-middle" tabindex="0" aria-controls="datatable-responsive" rowspan="1" colspan="1" style="width: 142px;" aria-label="Action: List of actions">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php foreach ($kontrak as $value) { ?>
                            <tr role="row">
                              <td class="align-middle text-center"><?php echo $value['bidding_code']; ?></td>
                              <td class="align-middle text-center"><?php foreach (explode(" ", $value['_no_pr']) as $val) {echo '<span class="badge badge-info">'.$val.'</span>';} ?></td>
                              <td class="align-middle text-center"><?php echo $value['nama_pekerjaan']; ?></td>
                              <td class="align-middle text-center"><?php echo $value['vendor']; ?></td>
                              <td class="align-middle text-center"><?php echo $value['tgl_permintaan_lelang']; ?></td>
                              <td class="align-middle text-center"><?php echo $value['tgl_penetapan']; ?></td>
                              <td class="align-middle text-center"><?php echo $value['durasi'] . ' ' . $value['jenis_durasi']; ?></td>
                              <td class="align-middle text-center"><?php echo $value['po_no']; ?></td>
                              <td class="align-middle text-center"><?php echo $value['po_pengganti']; ?></td>
                              <td class="align-middle text-center"><?php echo $value['tkdn_minim'] . '%'; ?></td>
                              <td class="align-middle text-center"><?php echo $value['po_risk']; ?></td>
                              <td class="align-middle text-center"><?php echo 'Rp' . number_format($value['nilai_kontrak'], 2, ',', '.'); ?></td>
                              <td class="align-middle text-center"><?php echo 'Rp' . number_format($value['nilai_penawaran_awal'], 2, ',', '.'); ?></td>
                              <td class="align-middle text-center"><?php echo 'Rp' . number_format($value['nilai_oe'], 2, ',', '.'); ?></td>
                              <td class="align-middle text-center"><?php echo $value['drafter']; ?></td>
                              <td class="align-middle text-center">
                                <div class="d-flex flex-column justify-content-center">
                                  <a href="" class="btn btn-primary btn-sm" role="button" data-toggle="modal" data-target=".detailModal"><span class="fa fa-search"></span></a>
                                  <a href="<?php echo base_url('public/index.php/admin/editcontract')."/".$value['id_kontrak'];?>" class="btn btn-success btn-sm" role="button"><span class="fa fa-pencil-square-o"></span></a>
                                </div>
                              </td>
                            <?php } ?>
                            </tr>
                        </tbody>
                        <?php print_r($kontrak);?>
                      </table>
                      <table id="datatable-scrollx" class="table nowrap table-striped table-bordered no-footer" width="100%">
                        <thead class="thead-dark">
                          <tr role="row">
                            <th class="sorting_asc" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 63px;" aria-sort="ascending" aria-label="First name: activate to sort column descending">Bidding Code</th>
                            <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 62px;" aria-label="Last name: activate to sort column ascending">No. PR</th>
                            <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 70px;" aria-label="Position: activate to sort column ascending">Nama Pekerjaan</th>
                            <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 64px;" aria-label="Office: activate to sort column ascending">Vendor</th>
                            <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 24px;" aria-label="Age: activate to sort column ascending">Tgl Permintaan Lelang</th>
                            <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 58px;" aria-label="Start date: activate to sort column ascending">Tgl Penetapan</th>
                            <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 46px;" aria-label="Salary: activate to sort column ascending">Durasi</th>
                            <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 30px;" aria-label="Extn.: activate to sort column ascending">No. PO</th>
                            <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 142px;" aria-label="PO Pengganti: activate to sort column ascending">PO Pengganti</th>
                            <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 142px;" aria-label="Minim TKDN: activate to sort column ascending">Minim TKDN</th>
                            <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 142px;" aria-label="PO Risk: activate to sort column ascending">PO Risk</th>
                            <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 142px;" aria-label="Nilai Kontrak: activate to sort column ascending">Nilai Kontrak</th>
                            <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 142px;" aria-label="Nilai Penawaran Awal: activate to sort column ascending">Nilai Penawaran Awal</th>
                            <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 142px;" aria-label="Nilai OE: activate to sort column ascending">Nilai OE</th>
                            <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 142px;" aria-label="Drafter: activate to sort column ascending">Drafter</th>
                            <th class="text-center" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 142px;" aria-label="Action: List of actions">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php foreach ($kontrak as $value) { ?>
                            <tr role="row">
                              <td class="align-middle text-center"><?php echo $value['bidding_code']; ?></td>
                              <td class="align-middle text-center"><?php //echo $value['pr_no']; ?></td>
                              <td class="align-middle text-center"><?php echo $value['nama_pekerjaan']; ?></td>
                              <td class="align-middle text-center"><?php echo $value['vendor']; ?></td>
                              <td class="align-middle text-center"><?php echo $value['tgl_permintaan_lelang']; ?></td>
                              <td class="align-middle text-center"><?php echo $value['tgl_penetapan']; ?></td>
                              <td class="align-middle text-center"><?php echo $value['durasi'] . ' ' . $value['jenis_durasi']; ?></td>
                              <td class="align-middle text-center"><?php echo $value['po_no']; ?></td>
                              <td class="align-middle text-center"><?php echo $value['po_pengganti']; ?></td>
                              <td class="align-middle text-center"><?php echo $value['tkdn_minim'] . '%'; ?></td>
                              <td class="align-middle text-center"><?php echo $value['po_risk']; ?></td>
                              <td class="align-middle text-center"><?php echo 'Rp' . number_format($value['nilai_kontrak'], 2, ',', '.'); ?></td>
                              <td class="align-middle text-center"><?php echo 'Rp' . number_format($value['nilai_penawaran_awal'], 2, ',', '.'); ?></td>
                              <td class="align-middle text-center"><?php echo 'Rp' . number_format($value['nilai_oe'], 2, ',', '.'); ?></td>
                              <td class="align-middle text-center"><?php echo $value['drafter']; ?></td>
                              <td class="align-middle text-center">
                                <div class="d-flex flex-column justify-content-center">
                                  <a href="" class="btn btn-primary btn-sm" role="button" data-toggle="modal" data-target=".detailModal"><span class="fa fa-search"></span></a>
                                  <a href="" class="btn btn-success btn-sm" role="button"><span class="fa fa-pencil-square-o"></span></a>
                                </div>
                              </td>
                            </tr>
                          <?php } ?>

                          <?php foreach ($kontrak as $value) { ?>
                            <tr role="row">
                              <td class="align-middle text-center"><?php echo $value['bidding_code']; ?></td>
                              <td class="align-middle text-center"><?php //echo $value['pr_no']; ?></td>
                              <td class="align-middle text-center"><?php echo $value['nama_pekerjaan']; ?></td>
                              <td class="align-middle text-center"><?php echo $value['vendor']; ?></td>
                              <td class="align-middle text-center"><?php echo $value['tgl_permintaan_lelang']; ?></td>
                              <td class="align-middle text-center"><?php echo $value['tgl_penetapan']; ?></td>
                              <td class="align-middle text-center"><?php echo $value['durasi'] . ' ' . $value['jenis_durasi']; ?></td>
                              <td class="align-middle text-center"><?php echo $value['po_no']; ?></td>
                              <td class="align-middle text-center"><?php echo $value['po_pengganti']; ?></td>
                              <td class="align-middle text-center"><?php echo $value['tkdn_minim'] . '%'; ?></td>
                              <td class="align-middle text-center"><?php echo $value['po_risk']; ?></td>
                              <td class="align-middle text-center"><?php echo 'Rp' . number_format($value['nilai_kontrak'], 2, ',', '.'); ?></td>
                              <td class="align-middle text-center"><?php echo 'Rp' . number_format($value['nilai_penawaran_awal'], 2, ',', '.'); ?></td>
                              <td class="align-middle text-center"><?php echo 'Rp' . number_format($value['nilai_oe'], 2, ',', '.'); ?></td>
                              <td class="align-middle text-center"><?php echo $value['drafter']; ?></td>
                              <td class="align-middle text-center">
                                <div class="d-flex flex-column justify-content-center">
                                  <a href="" class="btn btn-primary btn-sm" role="button" data-toggle="modal" data-target=".detailModal"><span class="fa fa-search"></span></a>
                                  <a href="" class="btn btn-success btn-sm" role="button"><span class="fa fa-pencil-square-o"></span></a>
                                </div>
                              </td>
                            </tr>
                          <?php } ?>

                          <?php foreach ($kontrak as $value) { ?>
                            <tr role="row">
                              <td class="align-middle text-center"><?php echo $value['bidding_code']; ?></td>
                              <td class="align-middle text-center"><?php //echo $value['pr_no']; ?></td>
                              <td class="align-middle text-center"><?php echo $value['nama_pekerjaan']; ?></td>
                              <td class="align-middle text-center"><?php echo $value['vendor']; ?></td>
                              <td class="align-middle text-center"><?php echo $value['tgl_permintaan_lelang']; ?></td>
                              <td class="align-middle text-center"><?php echo $value['tgl_penetapan']; ?></td>
                              <td class="align-middle text-center"><?php echo $value['durasi'] . ' ' . $value['jenis_durasi']; ?></td>
                              <td class="align-middle text-center"><?php echo $value['po_no']; ?></td>
                              <td class="align-middle text-center"><?php echo $value['po_pengganti']; ?></td>
                              <td class="align-middle text-center"><?php echo $value['tkdn_minim'] . '%'; ?></td>
                              <td class="align-middle text-center"><?php echo $value['po_risk']; ?></td>
                              <td class="align-middle text-center"><?php echo 'Rp' . number_format($value['nilai_kontrak'], 2, ',', '.'); ?></td>
                              <td class="align-middle text-center"><?php echo 'Rp' . number_format($value['nilai_penawaran_awal'], 2, ',', '.'); ?></td>
                              <td class="align-middle text-center"><?php echo 'Rp' . number_format($value['nilai_oe'], 2, ',', '.'); ?></td>
                              <td class="align-middle text-center"><?php echo $value['drafter']; ?></td>
                              <td class="align-middle text-center">
                                <div class="d-flex flex-column justify-content-center">
                                  <a href="" class="btn btn-primary btn-sm" role="button" data-toggle="modal" data-target=".detailModal"><span class="fa fa-search"></span></a>
                                  <a href="" class="btn btn-success btn-sm" role="button"><span class="fa fa-pencil-square-o"></span></a>
                                </div>
                              </td>
                            </tr>
                          <?php } ?>
                        </tbody>
                      </table>

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

  <!-- /page content -->

  <!-- footer -->
  <?php echo view('layout/admin/footer.php'); ?>
  <!-- /footer -->
</body>

</html>