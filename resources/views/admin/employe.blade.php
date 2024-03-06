@extends('layouts.main')

@section('content')
<div class="page-content-wrapper">
    <div class="page-content">
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Admin Profile</div>
        </div>
       
        <hr>
        <div class="card">
            <div class="card-body">
                <h4>Change Password</h4>
       
            <!-- Add new employe form -->
            <form id="employeform" class="employeform" method="POST">
            @csrf

<div  id="successMsg"></div>
<div id="validation-errors"></div>

<div class="form-group">
    <label for="fullname">Full Name</label>
    <input type="text" class="form-control" name="fullname" id="fullname" aria-describedby="fullnameHelp" placeholder="Write a name..." required>
    <small id="fullnameHelp" class="form-text text-muted"></small>
</div></br>

<!-- Email Field -->
<div class="form-group">
    <label for="email">Email or Address</label>
    <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="Email or Address" required>
    <small id="emailHelp" class="form-text text-muted"></small>
</div></br>


<!-- Phone No Field -->
<div class="form-group">
    <label for="number">Phone no</label>
    <input type="number" class="form-control" name="number" id="number" aria-describedby="numberHelp" placeholder="Phone no"  pattern="[789][0-9]{9}">
    <small id="numberHelp" class="form-text text-muted"></small>
</div></br>




<div class="form-group">
<label for="exampleInputEmail1">Department</label>
<select class="form-control" name="department" id="department" aria-describedby="department" required>
    <option class="form-control" value="">Select a department</option>
</select>
<small id="departmentHelp" class="form-text text-muted"></small>
</div></br>




<div class="form-group">
<label for="exampleInputEmail1">Skills</label>
<select class="tags form-control" id="skills" name="skills[]" multiple="multiple" Required>
<option class="form-control" value="PHP">PHP</option>
<option class="form-control" value="Mysql">Mysql</option>
<option class="form-control" value="Ajax">Ajax</option>
<option class="form-control" value="Jquery">Jquery</option>
<option class="form-control" value="Laravel">Laravel</option>
<option class="form-control" value="Node">Node</option>
 </select>
<small id="emailHelp" class="form-text text-muted"></small>
</div></br>




<button type="button" id="addemployeBtn" class="btn btn-primary">Add</button>
</form>
            <!-- end employe form -->
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')

<script>
    $('.ajaxForm').submit(function(e) {
        e.preventDefault();
        $('#update_profile').prop('disabled', true);
        var url = $(this).attr('action');
        var formData = new FormData(this);
        my_ajax(url, formData, 'post', function(res) {
        },true);
        $('#update_profile').prop('disabled', false);
    });





    $('.ajaxForm1').submit(function(e) {
        e.preventDefault();
        $('#change-password').prop('disabled', true);
        var url = $(this).attr('action');
        var formData = new FormData(this);
        my_ajax(url, formData, 'post', function(res) {
        },false);
        $('#change-password').prop('disabled', false);
    });
</script>
@endsection