<section class="content">
  
  <?php foreach ($tk_in->result() as $row) {}?>
  <?php foreach ($tk_out->result() as $key) {}?>
  <?php foreach ($tot->result() as $tot) {}?>
  

<div class="row">
<div class="box-header with-border">
                  <i class="fa fa-check-square"></i>
                  <h3 class="box-title">Info</h3>
                </div><!-- /.box-header -->
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-aqua"><i class="glyphicon glyphicon-user"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Agent input</span>
                  <span class="info-box-number"><?php echo $ag;?></span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-green"><i class="glyphicon glyphicon-tasks"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">all tiket</span>
                  <span class="info-box-number"><?php echo $tot->tot;?></span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-yellow"><i class="glyphicon glyphicon-log-in"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">tiket in</span>
                  <span class="info-box-number"><?php echo $row->tot_in;?></span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-red"><i class="glyphicon glyphicon-log-out"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">tiket out</span>
                  <span class="info-box-number"><?php echo $key->tot_out;?></span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->
          </div>

        </section>