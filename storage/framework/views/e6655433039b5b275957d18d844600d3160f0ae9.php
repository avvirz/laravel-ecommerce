<?php $__env->startSection('title'); ?>
    Welcome <?php echo e(Auth::user()->name); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('head'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<br>
<section class="content">
  <div class="container-fluid">
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-info">
          <div class="inner">
            <h3><?php echo e($categorys); ?></h3>
            <p>Main Categories</p>
          </div>
          <div class="icon">
            <i class="ion ion-bag"></i>
          </div>
          <a href="<?php echo e(route('category.index')); ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-success">
          <div class="inner">
            <h3><?php echo e($products); ?></h3>
            <p>Total Product</p>
          </div>
          <div class="icon">
            <i class="ion ion-stats-bars"></i>
          </div>
          <a href="<?php echo e(route('product.index')); ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>

      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-danger">
          <div class="inner">
            <h3><?php echo e($order); ?></h3>

            <p>Pending Orders</p>
          </div>
          <div class="icon">
            <i class="ion ion-person-add"></i>
          </div>
          <a href="<?php echo e(route('orders.index')); ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-warning">
          <div class="inner">
            <h3><?php echo e($users); ?></h3>
            <p>Registrations</p>
          </div>
          <div class="icon">
            <i class="ion ion-person-add"></i>
          </div>
          <a href="<?php echo e(url('/users')); ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
    </div>
  </div>
  <!-- /.container-fluid -->
      
  <div class="card col-md-6
   bg-info">
    <div class="card-body">
      <h3>Sales Chart</h3>
    </div>
    <div id="chartContainer" ></div>
    <div class="card-body ">
      <canvas id="myChart2" aria-lebel="chart" role="img" height="380" width="500"></canvas>
    </div>
    <div class="card-footer"></div>
  </div>
</section>
<br>
<?php $__env->stopSection(); ?> 
<?php $__env->startSection('footer_scripts'); ?>
<script>
    $(document).ready(function(){
        // var a = $('#category').val();
        console.log(document.getElementById("category"));
        // var number=document.getElementById("#category").val();

    console.log(a);
    })

    window.onload = function () {

 var options = {
     animationEnabled: true,
     theme: "light2",
     title:{
         text: "Total Order "
     },
     axisX:{
         valueFormatString: "DD MMM"
     },
     axisY: {
         title: "Number of Sales",
         suffix: "K",
         minimum: 30
     },
     toolTip:{
         shared:true
     },
     legend:{
         cursor:"pointer",
         verticalAlign: "bottom",
         horizontalAlign: "left",
         dockInsidePlotArea: true,
         itemclick: toogleDataSeries
     },
     data: [{
         type: "line",
         showInLegend: true,
         name: "Projected Sales",
         markerType: "square",
         xValueFormatString: "DD MMM, YYYY",
         color: "#F08080",
         yValueFormatString: "#,##0K",
         dataPoints: [
             { x: new Date(2017, 10, 1), y: 63 },
             { x: new Date(2017, 10, 2), y: 69 },
             { x: new Date(2017, 10, 3), y: 65 },
             { x: new Date(2017, 10, 4), y: 70 },
             { x: new Date(2017, 10, 5), y: 71 },
             { x: new Date(2017, 10, 6), y: 65 },
             { x: new Date(2017, 10, 7), y: 73 },
             { x: new Date(2017, 10, 8), y: 96 },
             { x: new Date(2017, 10, 9), y: 84 },
             { x: new Date(2017, 10, 10), y: 85 },
             { x: new Date(2017, 10, 11), y: 86 },
             { x: new Date(2017, 10, 12), y: 94 },
             { x: new Date(2017, 10, 13), y: 97 },
             { x: new Date(2017, 10, 14), y: 86 },
             { x: new Date(2017, 10, 15), y: 89 }
         ]
     },
     {
         type: "line",
         showInLegend: true,
         name: "Actual Sales",
         lineDashType: "dash",
         yValueFormatString: "#,##0K",
         dataPoints: [
             { x: new Date(2017, 10, 1), y: 60 },
             { x: new Date(2017, 10, 2), y: 57 },
             { x: new Date(2017, 10, 3), y: 51 },
             { x: new Date(2017, 10, 4), y: 56 },
             { x: new Date(2017, 10, 5), y: 54 },
             { x: new Date(2017, 10, 6), y: 55 },
             { x: new Date(2017, 10, 7), y: 54 },
             { x: new Date(2017, 10, 8), y: 69 },
             { x: new Date(2017, 10, 9), y: 65 },
             { x: new Date(2017, 10, 10), y: 66 },
             { x: new Date(2017, 10, 11), y: 63 },
             { x: new Date(2017, 10, 12), y: 67 },
             { x: new Date(2017, 10, 13), y: 66 },
             { x: new Date(2017, 10, 14), y: 56 },
             { x: new Date(2017, 10, 15), y: 64 }
         ]
     },
     {
         type: "line",
         showInLegend: true,
         name: "Actual Sales",
         lineDashType: "dash",
         yValueFormatString: "#,##0K",
         dataPoints: [
             { x: new Date(2017, 10, 1), y: 55 },
             { x: new Date(2017, 10, 2), y: 50 },
             { x: new Date(2017, 10, 3), y: 45 },
             { x: new Date(2017, 10, 4), y: 44 },
             { x: new Date(2017, 10, 5), y: 54 },
             { x: new Date(2017, 10, 6), y: 80 },
             { x: new Date(2017, 10, 7), y: 15 },
             { x: new Date(2017, 10, 8), y: 63 },
             { x: new Date(2017, 10, 9), y: 68 },
             { x: new Date(2017, 10, 10), y: 56 },
             { x: new Date(2017, 10, 11), y: 60 },
             { x: new Date(2017, 10, 12), y: 50 },
             { x: new Date(2017, 10, 13), y: 45 },
             { x: new Date(2017, 10, 14), y: 48 },
             { x: new Date(2017, 10, 15), y: 65 }
         ]
     }]
 };
 $("#chartContainer").CanvasJSChart(options);
 function toogleDataSeries(e){
     if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
         e.dataSeries.visible = false;
        } else{
            e.dataSeries.visible = true;
        }
        e.chart.render();

 }

 }
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/laravel-auth/resources/views/pages/admin/home.blade.php ENDPATH**/ ?>