<!-- Begin Page Content -->
<div class="container-fluid">
   <!-- row ux-->
   <div class="row">
      <div class="col-xl-3 col-md-6 mb-4">
         <div class="card border-left-danger shadow h-100 py-2" style="background-color: pink; color: #C20985;">
            <div class="card-body">
               <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                     <div class="text-md font-weight-bold text-uppercase mb-1">Varian Masker</div>
                     <div class="h1 mb-0 font-weight-bold ">
                        <?= $this->ModelUser->getUserWhere(['role_id' => 1])->num_rows(); ?></div>
                  </div>
                  <div class="col-auto">
                     <a href="<?= base_url('user/anggota'); ?>"><i class="fas fa-mask fa-3x text-warning"></i></a>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <div class="col-xl-3 col-md-6 mb-4">
         <div class="card border-left-primary shadow h-100 py-2 " style="background-color: pink; color: #C20985;">
            <div class="card-body">
               <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                     <div class="text-md font-weight-bold text-uppercase mb-1">Stok Produk</div>
                     <div class="h1 mb-0 font-weight-bold ">
                      <?php
                      $where = ['stok != 0'];
                      $totalstok = $this->ModelProduk->total('stok', $where); echo $totalstok;
                      ?>
                           
                     </div>
                  </div>
                  <div class="col-auto">
                     <a href="<?= base_url('daftarproduct'); ?>"><i class="fas fa-shopping-cart fa-3x text-danger"></i></a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>

 <!-- end row ux-->
 <!-- Divider -->
 <hr class="sidebar-divider">
 <!-- row table-->
 <div class="row">
   <div class="table-responsive table-bordered col-sm-5 ml-auto mr-auto mt-2" style="">
      <div class="page-header">
         <span class="fas fa-users  mt-2 " style="color: black;"> Data User</span>
         <a class="text-danger" href="<?php echo base_url('user/anggota'); ?>"><i class="fas fa-search mt-2 float-right"> Tampilkan</i></a>
      </div>
      <table class="table mt-3">
         <thead>
            <tr>
               <th>No</th>
               <th>Nama Member</th>
               <th>Email</th>
               <th>Role ID</th>
               <th>Aktif</th>
               <th>Member Sejak</th>
            </tr>
         </thead>
         <tbody>
            <?php
            $i = 1;
            foreach ($anggota as $a) { ?>
               <tr>
                  <td><?= $i++; ?></td>
                  <td><?= $a['nama']; ?></td>
                  <td><?= $a['email']; ?></td>
                  <td><?= $a['role_id']; ?></td>
                  <td><?= $a['is_active']; ?></td>
                  <td><?= date('Y', $a['tanggal_input']); ?></td>
               </tr>
            <?php } ?>
         </tbody>
      </table>
   </div>
   <div class="table-responsive table-bordered col-sm-5 ml-auto mr-auto mt-2" style="">
      <div class="page-header">
         <span class="fas  mt-2" style="color: black;"> Daftar produk</span>
         <a href="<?= base_url('daftarproduct'); ?>"><i class="fas fa-search text-primary mt-2 float-right"> Tampilkan</i></a>
      </div>
      <div class="table-responsive">
         <table class="table mt-3" id="table-datatable">
            <thead>
               <tr>
                  <th>No</th>
                  <th>Nama Product</th>
                  <th>Harga</th>
                  <th>Stok</th>
                  <th>Tahun Produksi</th>
               </tr>
            </thead>
            <tbody>
               <?php
               $i = 1;
               foreach ($daftarProduct as $b) { ?>
                  <tr>
                     <td><?= $i++; ?></td>
                     <td><?= $b['Nama_product']; ?></td>
                     <td><?= $b['Harga']; ?></td>
                     <td><?= $b['stok']; ?></td>
                     <td><?= $b['tahun_produksi']; ?></td>
                  </tr>
               <?php } ?>
            </tbody>
         </table>
      </div>
   </div>
</div>
</div>