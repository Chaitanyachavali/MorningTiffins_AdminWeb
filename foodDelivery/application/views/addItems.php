<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Add Items
        <small>(Get Category from List)</small>
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
        <!-- left column -->
        <div class="col-md-8">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Enter Below</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="<?php echo base_url(); ?>index.php/AdminControl/addItemForm" method="post">
              <div class="box-body">
                <div class="form-group">
                  <label for="name">Enter the new Item Name</label>
                  <input type="text" class="form-control" id="itemname" name="itemname" placeholder="Enter Name">
                </div>
                <div class="form-group">
                  <label>Select Category</label>
                  <select name ="categ" id ="categ" class="form-control">
               <?php foreach ($rows as $row ){ ?>
               <option value="<?=$row->category;?>">
                 <?=$row->category;?>
               </option>
               <?php } ?>
             </select>
                </div>
                <div class="form-group">
                  <label for="name">Price in INR</label>
                  <input type="text" class="form-control" id="price" name="price" placeholder="Enter Number">
                </div>
                <div class="form-group">
                  <label for="name">Maximum Number for Day</label>
                  <input type="text" class="form-control" id="m_n" name="m_n" placeholder="Enter Number">
                </div>
                <div class="form-group">
                  <label for="name">Maximum number for User</label>
                  <input type="text" class="form-control" id="m_u" name="m_u" placeholder="Enter Number">
                </div>
                <div class="form-group">
                  <label for="name">Minium Time</label>
                  <input type="text" class="form-control" id="time" name="time" placeholder="Enter Number in minutes">
                </div>
                <div class="form-group">
                  <label for="name">Short Description</label>
                  <input type="text" class="form-control" id="desc" name="desc" placeholder="Enter Text">
                </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
          <!-- /.box -->

          <!-- Form Element sizes -->
          
        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
