@if(Session::has('account'))
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Centro Atletico - Schedule</title>

    <!-- Bootstrap core CSS-->
    <link href={{asset("vendor/bootstrap/css/bootstrap.min.css")}} rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href={{asset("vendor/fontawesome-free/css/all.min.css")}} rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href={{asset("vendor/datatables/dataTables.bootstrap4.css")}} rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href={{asset("css/sb-admin.css")}} rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css"/>

    <style>
      .parsley-success {
    color: #468847;
    background-color: #DFF0D8;
    border: 1px solid #D6E9C6;
  }

  .parsley-error {
    color: #B94A48;
    background-color: #F2DEDE;
    border: 1px solid #EED3D7;
  }

  .parsley-errors-list {
    margin: 2px 0 3px;
    padding: 0;
    list-style-type: none;
    font-size: 0.9em;
    line-height: 0.9em;
    opacity: 1;
    color: red;

    transition: all .3s ease-in;
    -o-transition: all .3s ease-in;
    -moz-transition: all .3s ease-in;
    -webkit-transition: all .3s ease-in;
  }

  .parsley-errors-list.filled {
    opacity: 1;
  }
    </style>

  </head>

  <body id="page-top">

    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

      <a class="navbar-brand mr-1" href="index.html">Centro Atletico</a>

      <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
      </button>

      <!-- Navbar Search -->
    
      <button class="btn btn-default" id="btnLogout">Logout</button>
    
    </nav>

    <div id="wrapper">

      <!-- Sidebar -->
      <ul class="sidebar navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/admin/dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/admin/reservation') }}">
            <i class="fas fa-book"></i>
            <span>Reservation</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="{{ url('/admin/schedule') }}">
            <i class="fas fa-fw fa-table"></i>
            <span>Schedule</span></a>
        </li>
      </ul>

      <div id="content-wrapper">

        <div class="container-fluid">

             <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Schedule Overview</div>
            <div class="card-body">
             

            </div>
           
          </div>
        


        </div>
        <!-- /.container-fluid -->

       
      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->
    <!-- Modal -->
    <div class="modal fade bd-example-modal-lg" id="acceptModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">ADD PAYMENT</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form id="paymentForm">
            @csrf
          <div class="modal-body">

            <label class="col-md-2">Name: </label><label id="name"></label><br>
            <label class="col-md-2">Date: </label><label id="date"></label><br><br>
        
            <table style="width: 100%">
             
              <thead>
                <tr>
                  <th style="width: 30%">TYPE OF FEE</th>
                  <th style="width: 25%">QTY</th>
                  <th>ASSESSMENT</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>COURT FEE</td>
                  <td>PHP 300</td>
                  <td></td>
                </tr>
                <tr>
                  <td>PEOPLE ATTENDING</td>
                  <td id="people"></td>
                  <td></td>
                </tr>
                <tr>
                  <td></td>
                  <td></td>
                  <td>
                    <label>TOTAL ASSESSMENT: </label> <label id="totalAssessment"></label><br>
                    <label>MINIMUM PAYMENT REQUIREMENT: </label> <label id="minimum"></label><br>
                    <label>PAYMENT :</label>
                    <input type="text" name="payment" id="payment" required data-parsley-error-message="You should pay at least 50% of the assessment">

                  </td>
                </tr>
              </tbody>
              <input type="hidden" name="id" id="id" value="">
            </table>


          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">CANCEL</button>
            <button type="submit" class="btn btn-primary" id="btnSave">SAVE</button>
            </form>
          </div>
        </div>
      </div>
    </div>


    <!-- Bootstrap core JavaScript-->
    <script src={{asset("vendor/jquery/jquery.min.js")}}></script>
    <script src={{asset("vendor/bootstrap/js/bootstrap.bundle.min.js")}}></script>

    <!-- Core plugin JavaScript-->
    <script src={{asset("vendor/jquery-easing/jquery.easing.min.js")}}></script>

    <!-- Page level plugin JavaScript-->
    <script src={{asset("vendor/chart.js/Chart.min.js")}}></script>
    <script src={{asset("vendor/datatables/jquery.dataTables.js")}}></script>
    <script src={{asset("vendor/datatables/dataTables.bootstrap4.js")}}></script>

    <!-- Custom scripts for all pages-->
    <script src={{asset("js/sb-admin.min.js")}}></script>

    <!-- Demo scripts for this page-->
    <script src={{asset("js/demo/datatables-demo.js")}}></script>
    <script src={{asset("js/demo/chart-area-demo.js")}}></script>
    <script src={{asset("js/Parsley.js-2.8.1/dist/parsley.min.js")}}></script>
    <script src={{asset("js/sweetalert2-7.28.8/package/dist/sweetalert2.all.min.js")}}></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js"></script>
   
    <script>
      $(document).ready(function(){
         $('#btnLogout').click(function(){
          $.ajax({
            url: '/admin/logout',
            type: 'get',
            success: function(output){
              window.location.href = '/login'
            }
          });
        });
      });
    </script>

  </body>

</html>
@else 
  <script>
    window.location.href = '/login';
  </script>
@endif