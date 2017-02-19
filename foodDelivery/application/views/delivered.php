
  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Delivered Orders
        <small>(Displayed order's status != Delivered!)</small>
      </h1>
      <!-- <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Blank page</li>
      </ol> -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Orders Table</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Purchase Id</th>
                  <th>Name</th>
                  <th>Mail Id</th>
                  <th>Contact</th>
                  <th>Item</th>
                  <th>Quantity</th>
                  <th>Purchase Date</th>
                  <th>Purchase Time</th>
                  <th>Purchase Remarks</th>
                  <th>Delivery Date</th>
                  <th>Delivery Time</th>
                  <th>Delivery Remarks</th>
                  <th>Status</th>
                </tr>
                </thead>
                <tbody>
                  <?php 
                   foreach ($rows as $row) {
                   ?>

                  <tr>
                    <td>
                        <?php echo $row->purchase_id;?>
                    </td>
                    <td>
                      <?php echo $row->name;?>
                    </td>
                    <td>
                      <?php echo $row->mail;?>
                    </td>
                    <td>
                      <?php echo $row->contact;?>
                    </td>
                    <td>
                      <?php echo $row->item_id;?>
                    </td>
                    <td>
                      <?php echo $row->quantity;?>
                    </td>
                    <td>
                      <?php echo $row->date_of_purchase;?>
                    </td>
                    <td>
                      <?php echo $row->time_of_purchase;?>
                    </td>
                    <td>
                      <?php echo $row->purchase_Remarks;?>
                    </td>
                    <td>
                      <?php echo $row->date_of_delivery;?>
                    </td>
                    <td>
                      <?php echo $row->time_of_delivery;?>
                    </td>
                    <td>
                      <?php echo $row->delivery_Remarks;?>
                    </td>
                    <td>
                      <?php echo $row->status;?>
                    </td>
                  </tr>
                <?php }?>
                 </tbody>
                <tfoot>
                <tr>
                  <th>Purchase Id</th>
                  <th>Name</th>
                  <th>Mail Id</th>
                  <th>Contact</th>
                  <th>Item</th>
                  <th>Quantity</th>
                  <th>Purchase Date</th>
                  <th>Purchase Time</th>
                  <th>Purchase Remarks</th>
                  <th>Delivery Date</th>
                  <th>Delivery Time</th>
                  <th>Delivery Remarks</th>
                  <th>Status</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  