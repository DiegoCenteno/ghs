@extends('layouts.app2')

@section('content')

<div class="content-wrapper">
<!-- Content Header (Page header) -->
<div class="content-header"></div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <!-- Small boxes (Stat box) -->
    
    <!-- /.row -->
    <!-- Main row -->
    <div class="row">
      <!-- Left col -->
      <section class="col-lg-7 connectedSortable" style="display: none">
        <!-- Custom tabs (Charts with tabs)-->
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">
              <i class="fas fa-chart-pie mr-1"></i>
              Sales
            </h3>
            <div class="card-tools">
              <ul class="nav nav-pills ml-auto">
                <li class="nav-item">
                  <a class="nav-link active" href="#revenue-chart" data-toggle="tab">Area</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#sales-chart" data-toggle="tab">Donut</a>
                </li>
              </ul>
            </div>
          </div><!-- /.card-header -->
          <div class="card-body">
            <div class="tab-content p-0">
              <!-- Morris chart - Sales -->
              <div class="chart tab-pane active" id="revenue-chart"
                   style="position: relative; height: 300px;">
                  <canvas id="revenue-chart-canvas" height="300" style="height: 300px;"></canvas>
               </div>
              <div class="chart tab-pane" id="sales-chart" style="position: relative; height: 300px;">
                <canvas id="sales-chart-canvas" height="300" style="height: 300px;"></canvas>
              </div>
            </div>
          </div><!-- /.card-body -->
        </div>
        <!-- /.card -->

        <!-- DIRECT CHAT -->
        <!-- /.card -->
      </section>
      <!-- /.Left col -->
      <!-- right col (We are only adding the ID to make the widgets sortable)-->
      <section class="col-lg-12 connectedSortable">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Saldos de proveedores</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>Proveedor</th>
                      <th>Pesos</th>
                      <th>Proveedor</th>
                      <th>Dolares</th>
                      <th>Proveedor</th>
                      <th>Euros</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>HERSON SERVICIOS ADMINISTRATIVOS</td>
                      <td>$2,828,465.00</td>
                      <td>NATURESWEET INTERNAL</td>
                      <td>$2,828,465.00</td>
                      <td>ROYAL BRINKMAN MEXICO</td>
                      <td>$2,828,465.00</td>
                    </tr>
                    <tr>
                      <td>FERGAN SERVICIOS ADMINISTRATIVOS</td>
                      <td>$5,428,665.00</td>
                      <td>MARIO RUBEN HIDALGO</td>
                      <td>$2,828,465.00</td>
                      <td></td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>NUEVA AGROINDUSTRIAS</td>
                      <td>$3,298,125.00</td>
                      <td>PELEMIX MÉXICO</td>
                      <td>$2,828,465.00</td>
                      <td></td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>TRANSPORTES LIPU SA</td>
                      <td>$4,898,725.00</td>
                      <td>PROPAGADORA GANFER</td>
                      <td>$2,828,465.00</td>
                      <td></td>
                      <td></td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                  <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                </ul>
              </div>
            </div>
            <!-- /.card -->

            <!-- /.card -->
          </div>
          <!-- /.col -->
          <!-- /.col -->
        </div>
        <!-- Map card -->
        <div class="card bg-gradient-primary" style="display: none">
          <div class="card-header border-0"></div>
          <div class="card-body">
            <div id="world-map" style="height: 250px; width: 100%;"></div>
          </div>
          <!-- /.card-body-->
          <div class="card-footer bg-transparent">
            <div class="row">
              <div class="col-4 text-center">
                <div id="sparkline-1"></div>
                <div class="text-white">Visitors</div>
              </div>
              <!-- ./col -->
              <div class="col-4 text-center">
                <div id="sparkline-2"></div>
                <div class="text-white">Online</div>
              </div>
              <!-- ./col -->
              <div class="col-4 text-center">
                <div id="sparkline-3"></div>
                <div class="text-white">Sales</div>
              </div>
              <!-- ./col -->
            </div>
            <!-- /.row -->
          </div>
        </div>
        <!-- /.card -->

        <!-- solid sales graph -->
        <div class="card bg-gradient-info">
          <div class="card-header border-0">
            <h3 class="card-title">
              <i class="fas fa-th mr-1"></i>
              Gráfica de pesos en la báscula de empaque
            </h3>

            <div class="card-tools">
              <button type="button" class="btn bg-info btn-sm" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button>
              <button type="button" class="btn bg-info btn-sm" data-card-widget="remove">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
          <div class="card-body">
            <canvas class="chart" id="line-chart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
          </div>
          <!-- /.card-body -->
          <div class="card-footer bg-transparent">
            <div class="row">
              <!-- ./col -->
              <div class="col-4 text-center">
                <input type="text" class="knob" data-readonly="true" value="67" data-width="60" data-height="60"
                       data-fgColor="#39CCCC">

                <div class="text-white">Over 67%</div>
              </div>
              <!-- ./col -->
              <!-- ./col -->
            </div>
            <!-- /.row -->
          </div>
          <!-- /.card-footer -->
        </div>
        <!-- /.card -->

        <!-- Calendar -->
        <!-- /.card -->
      </section>
      <!-- right col -->
    </div>
    <!-- /.row (main row) -->
  </div><!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>

@endsection
