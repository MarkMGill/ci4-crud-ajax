<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <title>Codeigniter AJAX Tutorial - Fetch Data from Database Example</title>
</head>

<body>
  <div class="modal fade" id="addModal">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <div class="card-body text-center">
                      <h3>Add User</h3>
                  </div>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body">
                  <div class="card mt-3">
                      <div class="card-body">
                          <form method="post" id="addUser" action="<?php echo site_url('CrudController/add'); ?>">
                              <div class="form-group">
                                  <label>Name</label>
                                  <input type="text" name="txtName" id="txtName" class="form-control" placeholder="Enter Name" autocomplete="off">
                              </div>
                              <div class="form-group">
                                  <label>Email</label>
                                  <input type="text" name="txtEmail" id="txtEmail" class="form-control" placeholder="Description" autocomplete="off">
                              </div>
                              <button type="submit" name="submit" class="btn btn-primary btnAdd">Submit</button>
                          </form>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <div class="modal fade" id="updateModal">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <div class="card-body text-center">
                      <h3>Update User</h3>
                  </div>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body">
                  <div class="card mt-3">
                      <div class="card-body">
                          <form method="post" id="updateUser" action="<?php echo site_url('CrudController/update'); ?>">
                            <input type="hidden" name="hdnUserId" id="hdnUserId"/>
                              <div class="form-group">
                                  <label>Name</label>
                                  <input type="text" name="txtUpdateName" id="txtUpdateName" class="form-control" autocomplete="off">
                              </div>
                              <div class="form-group">
                                  <label>Email</label>
                                  <input type="text" name="txtUpdateEmail" id="txtUpdateEmail" class="form-control" autocomplete="off">
                              </div>
                              <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                          </form>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
          <a class="navbar-brand" href="/">CI Blog</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav mr-auto">
                  <li class="nav-item">
                      <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="/about">About Us</a>
                  </li>
              </ul>
              <ul class="navbar-nav">
                  <!--<li><a href="/blog/create" class="">Add User</a></li>
                  <input type="button" class="btn btn-primary btn-lg mr-5" value="Create New" data-toggle="modal" data-target="#createModal">-->
                  <li><input type="button" class="btn btn-outline-success" value="Create New" data-toggle="modal" data-target="#addModal"></li>
              </ul>
          </div>
      </div>
  </nav>