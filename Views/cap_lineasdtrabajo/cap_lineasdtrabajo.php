<?php headerAdmin($data);

?>

<div id="contentAjax"></div>
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0"><?= $data['page_title'] ?></h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">MRP</a></li>
                                <li class="breadcrumb-item active"><?= $data['page_tag'] ?></li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->


            <div class="card">
                <div class="card-header">
                    <ul class="nav nav-tabs-custom card-header-tabs border-bottom-0" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="tab" href="#listlineasdetrabajo" role="tab">
                                LINEAS DE TRABAJO
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#agregarlineasdetrabajo" role="tab">
                                NUEVO
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- end card header -->
                <div class="card-body">
                    <div class="tab-content">
                        <div class="tab-pane active" id="listlineasdetrabajo" role="tabpanel">

                            <table id="tableLineas"
                                class="table table-bordered dt-responsive nowrap table-striped align-middle"
                                style="width:100%">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>NOMBRE</th>
                                        <th>DESCRIPCIÓN</th>
                                        <th>ESTATUS</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>

                        </div>
                        <!-- end tab-pane -->




                        <div class="tab-pane" id="agregarlineasdetrabajo" role="tabpanel">
                            <form action="#" class="form-steps was-validated" autocomplete="off">
                                <div class="row">
                                    <!-- NOMBRE -->
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="nombre-linea-input">NOMBRE</label>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="nombre-linea-addon">Nom</span>
                                                <input type="text" class="form-control"
                                                    placeholder="Ingresa el nombre de la línea" id="nombre-linea-input"
                                                    aria-describedby="nombre-linea-addon" required>
                                                <div class="invalid-feedback">El campo de nombre es obligatorio</div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- PROCESO -->
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="proceso-linea-input">PROCESO</label>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="proceso-linea-addon">Proc</span>
                                                <input type="text" class="form-control"
                                                    placeholder="Ingresa el proceso de la línea"
                                                    id="proceso-linea-input" aria-describedby="proceso-linea-addon"
                                                    required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row">
                                    <!-- ESTÁNDAR -->
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="estandar-input">ESTÁNDAR</label>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="estandar-addon">Std</span>
                                                <input type="text" class="form-control" id="estandar-input"
                                                    placeholder="Ingresa el estándar" aria-describedby="estandar-addon"
                                                    required>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- UNIDAD DE MEDIDA -->
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="unidad-medida-input">UNIDAD DE MEDIDA</label>
                                            <div class="input-group has-validation mb-3">
                                                <span class="input-group-text" id="unidad-medida-addon">UM</span>
                                                <input type="text" class="form-control" id="unidad-medida-input"
                                                    placeholder="Ingresa la unidad de medida"
                                                    aria-label="Unidad de medida" aria-describedby="unidad-medida-addon"
                                                    required>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- MERMA FIJA -->
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="merma-fija-input">MERMA FIJA</label>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="merma-fija-addon">%</span>
                                                <input type="text" class="form-control" id="merma-fija-input"
                                                    placeholder="Ingresa la merma fija" aria-label="Merma fija"
                                                    aria-describedby="merma-fija-addon">
                                            </div>
                                        </div>
                                    </div>

                                    <!-- MERMA DE PROCESO -->
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="merma-proceso-input">MERMA DE PROCESO</label>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="merma-proceso-addon">%</span>
                                                <input type="text" class="form-control" id="merma-proceso-input"
                                                    placeholder="Ingresa la merma de proceso"
                                                    aria-label="Merma de proceso" aria-describedby="merma-proceso-addon"
                                                    required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row">
                                    <!-- TIEMPO DE AJUSTE -->
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="tiempo-ajuste-input">TIEMPO DE AJUSTE</label>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="tiempo-ajuste-addon">min</span>
                                                <input type="text" class="form-control" id="tiempo-ajuste-input"
                                                    placeholder="Ingresa el tiempo de ajuste"
                                                    aria-describedby="tiempo-ajuste-addon" required>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- UNIDAD DE ENTRADA -->
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="unidad-entrada-input">UNIDAD DE
                                                ENTRADA</label>
                                            <div class="input-group has-validation mb-3">
                                                <span class="input-group-text" id="unidad-entrada-addon">IN</span>
                                                <input type="text" class="form-control" id="unidad-entrada-input"
                                                    placeholder="Ingresa la unidad de entrada"
                                                    aria-label="Unidad de entrada"
                                                    aria-describedby="unidad-entrada-addon" required>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- UNIDAD DE SALIDA -->
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="unidad-salida-input">UNIDAD DE SALIDA</label>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="unidad-salida-addon">OUT</span>
                                                <input type="text" class="form-control" id="unidad-salida-input"
                                                    placeholder="Ingresa la unidad de salida"
                                                    aria-label="Unidad de salida"
                                                    aria-describedby="unidad-salida-addon">
                                            </div>
                                        </div>
                                    </div>

                                    <!-- USD -->
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="usd-input">USD</label>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="usd-addon">$</span>
                                                <input type="text" class="form-control" id="usd-input"
                                                    placeholder="Ingresa el costo en USD" aria-describedby="usd-addon"
                                                    required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row">
                                    <!-- MX -->
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="mx-input">MX</label>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="mx-addon">MXN</span>
                                                <input type="text" class="form-control" id="mx-input"
                                                    placeholder="Ingresa el valor equivalente en MXN"
                                                    aria-describedby="mx-addon" required>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- ESTADO -->
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="estado-select">ESTADO</label>
                                            <div class="input-group has-validation mb-3">
                                                <span class="input-group-text" id="estado-addon">Est</span>
                                                <select class="form-select" id="estado-select"
                                                    aria-describedby="estado-addon" required disabled>
                                                    <option value="1" selected>Activo</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end row -->

                                <!-- DESCRIPCIÓN -->
                                <div class="mb-3">
                                    <label class="form-label" for="descripcion-linea-textarea">DESCRIPCIÓN</label>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="descripcion-linea-addon">Desc</span>
                                        <textarea class="form-control" id="descripcion-linea-textarea"
                                            placeholder="Ingresa una descripción sobre esta línea" rows="3"
                                            aria-describedby="descripcion-linea-addon"></textarea>
                                    </div>
                                </div>


                                <div class="d-flex align-items-start gap-3 mt-4">
                                    <button type="button"
                                        class="btn btn-success btn-label right ms-auto nexttab nexttab"
                                        data-nexttab="steparrow-description-info-tab"><i
                                            class="ri-arrow-right-line label-icon align-middle fs-16 ms-2"></i>REGISTRAR</button>
                                </div>


                            </form>
                        </div>

                        <!-- end tab pane -->
                    </div>
                    <!-- end tab content -->
                </div>
                <!-- end card body -->
            </div>
            <!-- end card -->


            <!--end row-->

        </div>
        <!-- container-fluid -->
    </div>
    <!-- End Page-content -->



    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <script>document.write(new Date().getFullYear())</script> © Velzon.
                </div>
                <div class="col-sm-6">
                    <div class="text-sm-end d-none d-sm-block">
                        Design & Develop by Themesbrand
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
<!-- end main content-->
<?php footerAdmin($data); ?>