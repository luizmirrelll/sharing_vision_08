<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Preview</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="#">Preview</a></li>
                </ol>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4>Default Tab</h4>
            </div>
            <div class="card-body">
                <div class="default-tab">
                    <div class="tab-content pl-3 pt-2" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                            <div class="content mt-3">
                                <div class="animated fadeIn">
                                    <div class="row">

                                        <div class="col-md-12">
                                            <div class="card">
                                                <div class="card-header">
                                                    <strong class="card-title">Data Table Published</strong>
                                                </div>
                                                <div class="card-body">
                                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                                        <thead>
                                                            <tr>
                                                                <th>No.</th>
                                                                <th>Title</th>
                                                                <th>Category</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php
                                                            $no = 1;
                                                            foreach($data as $row)
                                                            {
                                                                ?>
                                                                    <tr>
                                                                        <td><?php echo $no++; ?></td>
                                                                        <td><?php echo $row->Title; ?></td>
                                                                        <td><?php echo $row->Category; ?></td>
       
                                                                    </tr>
                                                                <?php
                                                            }
                                                        ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </div><!-- .animated -->
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>