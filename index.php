<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>crud</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
</head>
<body>
<div class="container">
    <div class="row mt-4">
        <div class="col-md-4 border border-info rounded p-3">
            <!--<div class="alert alert-success"><strong>Success:</strong>This is Message</div>
            <div class="alert alert-danger"><strong>Error:</strong>This is Error</div>-->
            <div class="msg"></div>
            <div class="form-group mt-3">
                <label for="name">Name</label>
                <input type="text" placeholder="Enter your name" class="form-control name">
            </div>
            <div class="form-group mt-3">
                <label for="phone">Phone</label>
                <input type="text" placeholder="Enter your phone" class="form-control phone">
            </div>
            <div class="form-group mt-3">
                <label for="email">Email</label>
                <input type="text" placeholder="Enter your email" class="form-control email">
            </div>
            <div class="form-group mt-3">
            <label for="status">Status</label>
            <select class="form-control status">
            <option value="">--Select option--</option>   
            <option value="1">Active</option>
            <option value="2">Inactive</option>
            </select>
            </div>
            <div class="form-control mt-3">
              
            <button class="save btn btn-info">Save Info</button>
            <button style="display:none" class=" updateinfo btn btn-info">Update</button>
           
            </div>




        </div>
        <div class="col-md-8 border border-info rounded p-3">
        <button data-bs-toggle="modal" data-bs-target="#insertModal" class="btn btn-success"><i class="fa fa-add"></i></button>
        <table class="table table-striped" border="1" id="mytable">
            <thead>
              <tr>
                <th>#sl</th>
                <th>Student Name</th>
                <th>Phone Number</th>
                <th>Email Address</th>
                <th>Status</th>
                <th>Action</th>
              </tr>      
            </thead>
            <tbody class="tableData">
            
            </tbody>
            <tfoot>
            <tr>
                <th>#sl</th>
                <th>Student Name</th>
                <th>Phone Number</th>
                <th>Email Address</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
            </tfoot>
        </table>


        </div>
    </div>
</div>
<!-- Insert-Modal -->
<div class="modal fade" id="insertModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Add New Student</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="form-group mt-3">
                <label for="name">Name</label>
                <input type="text" placeholder="Enter your name" class="form-control" id="name">
            </div>
            <div class="form-group mt-3">
                <label for="phone">Phone</label>
                <input type="text" placeholder="Enter your phone" class="form-control" id="phone">
            </div>
            <div class="form-group mt-3">
                <label for="email">Email</label>
                <input type="text" placeholder="Enter your email" class="form-control" id="email">
            </div>
            <div class="form-group mt-3">
            <label for="status">Status</label>
            <select class="form-control" id="status">
            <option value="">--Select option--</option>   
            <option value="1">Active</option>
            <option value="2">Inactive</option>
            </select>
            </div>
          
      </div>
      <div class="modal-footer">
        <button type="button" class=" btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" id="save" class="btn btn-primary">Save Info</button>
        <button style="display:none" id="updateinfo" class="btn btn-info">Update</button>

      </div>
    </div>
  </div>
</div>


<!-- Delete-Modal -->
<div class="modal fade" id="deleteModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Confirmation Message</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      Are you sure want to delete this ITEM?
          
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
        <button type="button" id="mdelete" class="btn btn-danger">Yes</button>
       
      </div>
    </div>
  </div>
</div>







<script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
     <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
     <script src="ajax.js"></script>
 
</body>
</html>