@extends('layouts.main')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid w-50">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Create New Contact</h1>
                    </div><!-- /.col -->

                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid w-50">
                <form action="/create" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Name</label>
                        <input type="text" name="name" class="form-control" id="formGroupExampleInput"
                            placeholder="Enter Name" required>
                    </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" id="formGroupExampleInput2"
                            placeholder="Enter Email" required>
                    </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">Phone</label>
                        <input type="number" name="phone" class="form-control" id="formGroupExampleInput2"
                            placeholder="Enter Phone Number" required>
                    </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">Address</label>
                        <textarea class="form-control" name="address" placeholder="Enter Your Address" id="floatingTextarea2"
                            style="height: 100px" required></textarea>
                    </div>

                    <div>
                        <button type="submit" class="btn btn-primary">Add New Contact</button>
                        <a href={{ route('contact') }} class="btn btn-danger">Cancel</a>
                    </div>
                </form>
            </div><!-- /.container-fluid -->


        </section>
        <!-- /.content -->
    </div>
@endsection
