

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Current Orders
        <small>(Displayed till order's status = Delivered!)</small>
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
                  <th>Date</th>
                  <th>Time</th>
                  <th>Purchase Remarks</th>
                  <th>Status</th>
                  <th>Change</th>
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
                      <?php echo $row->status;?>
                    </td>
                    <td>
                        <?php if($row->status == 'ordered')
                        {
                          echo '<a class = "btn btn-block btn-primary" href =
                "startPrepare/'.$row->purchase_id .'">Start Preparing</a> &nbsp;&nbsp;
                      <a class = "btn btn-block btn-danger" href =
                "cancelOrder/'.$row->purchase_id .'">Cancel Order</a>';
                        }
                        elseif($row->status == 'startedpreparing')
                        {
                           echo '<a class = "btn btn-block btn-primary" href =
                "deliverInit/'.$row->purchase_id .'">Init Delivery</a> &nbsp;&nbsp;';
                        }
                        elseif($row->status == 'intransit')
                        {
                           echo '<a class = "btn btn-block btn-primary" href =
                "delivered/'.$row->purchase_id .'">Deliverd</a> &nbsp;&nbsp;';
                        }
                        ?>
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
                  <th>Date</th>
                  <th>Time</th>
                  <th>Purchase Remarks</th>
                  <th>Status</th>
                  <th>Change</th>
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

