<section>
          <style>
            body {
              background: #f5f5f5;
              margin-top: 20px;
            }

            /* ===== Career ===== */
            .career-form {
              background-color: #4e63d7;
              border-radius: 5px;
              padding: 0 16px;
            }

            .career-form .form-control {
              background-color: rgba(255, 255, 255, 0.2);
              border: 0;
              padding: 12px 15px;
              color: #fff;
            }

            .career-form .form-control::-webkit-input-placeholder {
              /* Chrome/Opera/Safari */
              color: #fff;
            }

            .career-form .form-control::-moz-placeholder {
              /* Firefox 19+ */
              color: #fff;
            }

            .career-form .form-control:-ms-input-placeholder {
              /* IE 10+ */
              color: #fff;
            }

            .career-form .form-control:-moz-placeholder {
              /* Firefox 18- */
              color: #fff;
            }

            .career-form .custom-select {
              background-color: rgba(255, 255, 255, 0.2);
              border: 0;
              padding: 12px 15px;
              color: #fff;
              width: 100%;
              border-radius: 5px;
              text-align: left;
              height: auto;
              background-image: none;
            }

            .career-form .custom-select:focus {
              -webkit-box-shadow: none;
              box-shadow: none;
            }

            .career-form .select-container {
              position: relative;
            }

            .career-form .select-container:before {
              position: absolute;
              right: 15px;
              top: calc(50% - 14px);
              font-size: 18px;
              color: #ffffff;
              content: '\F2F9';
              font-family: "Material-Design-Iconic-Font";
            }

            .filter-result .job-box {
              -webkit-box-shadow: 0 0 35px 0 rgba(130, 130, 130, 0.2);
              box-shadow: 0 0 35px 0 rgba(130, 130, 130, 0.2);
              border-radius: 10px;
              padding: 10px 35px;
            }

            ul {
              list-style: none;
            }

            .list-disk li {
              list-style: none;
              margin-bottom: 12px;
            }

            .list-disk li:last-child {
              margin-bottom: 0;
            }

            .job-box .img-holder {
              height: 65px;
              width: 65px;

              background-image: -webkit-gradient(linear, left top, right top, from(rgba(78, 99, 215, 0.9)), to(#5a85dd));
              background-image: linear-gradient(to right, rgba(78, 99, 215, 0.9) 0%, #5a85dd 100%);
              font-family: "Open Sans", sans-serif;
              color: #fff;
              font-size: 22px;
              font-weight: 700;
              display: -webkit-box;
              display: -ms-flexbox;
              display: flex;
              -webkit-box-pack: center;
              -ms-flex-pack: center;
              justify-content: center;
              -webkit-box-align: center;
              -ms-flex-align: center;
              align-items: center;
              border-radius: 65px;
            }

            .career-title {
              background-color: #4e63d7;
              color: #fff;
              padding: 15px;
              text-align: center;
              border-radius: 10px 10px 0 0;
              background-image: -webkit-gradient(linear, left top, right top, from(rgba(78, 99, 215, 0.9)), to(#5a85dd));
              background-image: linear-gradient(to right, rgba(78, 99, 215, 0.9) 0%, #5a85dd 100%);
            }

            .job-overview {
              -webkit-box-shadow: 0 0 35px 0 rgba(130, 130, 130, 0.2);
              box-shadow: 0 0 35px 0 rgba(130, 130, 130, 0.2);
              border-radius: 10px;
            }

            @media (min-width: 992px) {
              .job-overview {
                position: -webkit-sticky;
                position: sticky;
                top: 70px;
              }
            }

            .job-overview .job-detail ul {
              margin-bottom: 28px;
            }

            .job-overview .job-detail ul li {
              opacity: 0.75;
              font-weight: 600;
              margin-bottom: 15px;
            }

            .job-overview .job-detail ul li i {
              font-size: 20px;
              position: relative;
              top: 1px;
            }

            .job-overview .overview-bottom,
            .job-overview .overview-top {
              padding: 35px;
            }

            .job-content ul li {
              font-weight: 600;
              opacity: 0.75;
              border-bottom: 1px solid #ccc;
              padding: 10px 5px;
            }

            @media (min-width: 768px) {
              .job-content ul li {
                border-bottom: 0;
                padding: 0;
              }
            }

            .job-content ul li i {
              font-size: 20px;
              position: relative;
              top: 1px;
            }

            .mb-30 {
              margin-bottom: 30px;
            }
          </style>
          <div class="container">
          <h1 class="text-center">DIRECTORIO</h1>
            <div class="row">
              
              <div class="col-lg-10 mx-auto">
                <div class="career-search mb-60">

                  <form action="#" class="career-form mb-60">
                    <div class="row">
                      <div class="col-md-6 col-lg-8 my-3">
                        <div class="input-group position-relative">
                          <input type="text" name="txtbusca" id="txtbusca" placeholder="Busca un empleado" class="form-control">
                        </div>
                      </div>

                      <div class="col-md-6 col-lg-4 my-3">
                        <div class="select-container">
                          <select class="custom-select">
                            <option selected="">Select Job Type</option>
                            <option value="1">Ui designer</option>
                            <option value="2">JS developer</option>
                            <option value="3">Web developer</option>
                          </select>
                        </div>
                      </div>

                    </div>
                  </form>

                  <div class="filter-result">
                    <p class="mb-30 ff-montserrat">Total empleados : 89</p>

                    <div class="salida"></div>


                    <?php
                    require "assets/php/bd.php";

                    $user = new conBD();
                    $u = $user->seleccionar(
                        "empleados",
                        " status = 1 order by nombre ASC "
                    );

                    //   print_r($u );
                    $html = "";
                    $img = "'img/people-03.jpg'";

                    if (count($u) == 0) {
                        echo "No se han encontrado resultados.";
                    } else {
                        $row["imagen"] = '"img/people-01.jpg"';

                        foreach ($u as $row) {
                            $html .=
                                '
                                               
                                               <div class="job-box d-md-flex align-items-center justify-content-between mb-30 item">
                                                    <div class="job-left my-4 d-md-flex align-items-center flex-wrap">
                                                        <div class="img-holder mr-md-4 mb-md-0 mb-4 mx-auto mx-md-0 d-md-none d-lg-flex"  style=" background-image: url(' .
                                $img .
                                ');">
                                                        </div>
                                                        <div class="job-content">
                                                            <h5 class="text-center text-md-left">' .
                                $row["nombre"] .
                                " " .
                                $row["apellido_pat"] .
                                " " .
                                $row["apellido_mat"] .
                                '</h5>
                                                            <ul class="d-md-flex flex-wrap text-capitalize ff-open-sans">
                                                                <li class="mr-md-4">
                                                                    <i class="zmdi zmdi-pin mr-2"></i> ' .
                                $row["correo"] .
                                '
                                                                </li>
                                                                <li class="mr-md-4">
                                                                    <i class="zmdi zmdi-money mr-2"></i> Departamento de marketing
                                                                </li>
                                                                <li class="mr-md-4">
                                                                    <i class="zmdi zmdi-time mr-2"></i> Secretaria
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                               
                                               ';
                        }

                        echo $html;
                    }
                    ?>



                  </div>
                </div>

                


                    <!-- START Pagination -->
                    <nav aria-label="Page navigation">
                      <ul class="pagination pagination-reset justify-content-center">
                        <li class="page-item disabled">
                          <a class="page-link" href="#" tabindex="-1" aria-disabled="true">
                            <i class="zmdi zmdi-long-arrow-left"></i>
                          </a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item d-none d-md-inline-block"><a class="page-link" href="#">2</a></li>
                        <li class="page-item d-none d-md-inline-block"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">...</a></li>
                        <li class="page-item"><a class="page-link" href="#">8</a></li>
                        <li class="page-item">
                          <a class="page-link" href="#">
                            <i class="zmdi zmdi-long-arrow-right"></i>
                          </a>
                        </li>
                      </ul>
                    </nav>
                    <!-- END Pagination -->
                  </div>
                </div>

              </div>

</section>