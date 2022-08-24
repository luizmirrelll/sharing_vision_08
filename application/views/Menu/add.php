<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Add New</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="#">Dashboard</a></li>
                    <li><a href="#">Forms</a></li>
                </ol>
            </div>
        </div>
    </div>
</div>
<div class="col-lg-12">
<div class="card">
<form class="forms-sample" autocomplete="off">
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label"> Title </label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="title" name="Title">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label"> Content </label>
                        <div class="col-sm-9">
                          <textarea rows="10" cols="50"></textarea>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label"> Category </label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="category" name="Category">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label"> Status </label>
                        <div class="col-sm-9">
                          <select name="Status" class="form-control">
                              <option value="" disabled selected> --- Pilih Status --- </option>
                              <option value="Publish"> Publish </option>
                              <option value="Draft"> Draft </option>
                          </select>
                        </div>
                      </div>
                      <button type="submit" class="btn btn-primary me-2"><i class="mdi mdi-content-save"></i> Submit</button>
                      <button class="btn btn-danger"><i class="mdi mdi-close"></i> Cancel</button>
                    </form>
</div>
</div>