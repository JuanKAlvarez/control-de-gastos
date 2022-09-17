
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Gastos</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Gastos </li>
                    </ol>
                </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <!-- Formulario de Ingreso de Informacion -->
                    <div class="row">
                        <div class="col-lg-2 col-1">
                        </div>
                        <div class="col-lg-8 col-10">
                            <!-- general form elements -->
                            <div class="card card-primary">
                                <div class="card-header">
                                <h3 class="card-title">Captura de Gastos</h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                <form>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-4">
                                                <div class="form-group">
                                                    <!-- select -->
                                                    <label for="tipoGasto">Tipo Gastos</label>
                                                    <select placeholder="Tipo Gasto" class="custom-select">
                                                        <option>option 1</option>
                                                        <option>option 2</option>
                                                        <option>option 3</option>
                                                        <option>option 4</option>
                                                        <option>option 5</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="form-group">
                                                    <label for="valorGasto">Valor</label>
                                                    <input type="number" class="form-control" id="valorGasto" placeholder="Valor">
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="form-group">
                                                    <label>Fecha:</label>
                                                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                                        <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate"/>
                                                        <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="descriopcionGastos">Descripcion</label>
                                                    <input type="text" class="form-control" id="descriopcionGastos" placeholder="Descripcion">
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="InputFileComprobante">Comprobante</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="InputFileComprobante">
                                                    <label class="custom-file-label" for="InputFileComprobante">Comprobante</label>
                                                </div>
                                                <div class="input-group-append">
                                                    <span class="input-group-text">Subir Archivo</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.card-body -->
                    
                                    <div class="card-footer">
                                        <button type="button" class="btn btn-primary btn-block">Enviar</button>
                                    </div>
                                </form>
                            </div>
                            <!-- /.card -->
                        </div>
                        <div class="col-lg-2 col-1">
                        </div>
                    </div>
                    <!-- Tabla de registros -->
                    <div class="row">
                        <div class="col-lg-2 col-1">
                        </div>
                        <div class="col-lg-8 col-10">
                            <div class="row">
                                <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                    <h3 class="card-title">Registros</h3>
                    
                                    <div class="card-tools">
                                        <div class="input-group input-group-sm" style="width: 150px;">
                                        <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                    
                                        <div class="input-group-append">
                                            <button type="submit" class="btn btn-default">
                                            <i class="fas fa-search"></i>
                                            </button>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body table-responsive p-0" style="height: 300px;">
                                    <table class="table table-head-fixed text-nowrap">
                                        <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Tipo Gastos</th>
                                            <th>Fecha</th>
                                            <th>Valor</th>
                                            <th>Descripcion</th>
                                            <th>Estado</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>183</td>
                                            <td>John Doe</td>
                                            <td>11-7-2014</td>
                                            <td>$50.000,00</td>
                                            <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                                            <td><span class="tag tag-success">Approved</span></td>
                                        </tr>
                                        <tr>
                                            <td>219</td>
                                            <td>Alexander Pierce</td>
                                            <td>11-7-2014</td>
                                            <td>$50.000,00</td>
                                            <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                                            <td><span class="tag tag-warning">Pending</span></td>
                                        </tr>
                                        <tr>
                                            <td>657</td>
                                            <td>Bob Doe</td>
                                            <td>11-7-2014</td>
                                            <td>$50.000,00</td>
                                            <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                                            <td><span class="tag tag-primary">Approved</span></td>
                                        </tr>
                                        <tr>
                                            <td>175</td>
                                            <td>Mike Doe</td>
                                            <td>11-7-2014</td>
                                            <td>$50.000,00</td>
                                            <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                                            <td><span class="tag tag-danger">Denied</span></td>
                                        </tr>
                                        <tr>
                                            <td>134</td>
                                            <td>Jim Doe</td>
                                            <td>11-7-2014</td>
                                            <td>$50.000,00</td>
                                            <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                                            <td><span class="tag tag-success">Approved</span></td>
                                        </tr>
                                        <tr>
                                            <td>494</td>
                                            <td>Victoria Doe</td>
                                            <td>11-7-2014</td>
                                            <td>$50.000,00</td>
                                            <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                                            <td><span class="tag tag-warning">Pending</span></td>
                                        </tr>
                                        <tr>
                                            <td>832</td>
                                            <td>Michael Doe</td>
                                            <td>11-7-2014</td>
                                            <td>$50.000,00</td>
                                            <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                                            <td><span class="tag tag-primary">Approved</span></td>
                                        </tr>
                                        <tr>
                                            <td>982</td>
                                            <td>Rocky Doe</td>
                                            <td>11-7-2014</td>
                                            <td>$50.000,00</td>
                                            <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                                            <td><span class="tag tag-danger">Denied</span></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                                <!-- /.card -->
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-1">
                        </div>
                    </div>     
               
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content Main content-->
        </div>
