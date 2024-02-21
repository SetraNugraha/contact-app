@extends('layouts.main')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Contact Page</h1>
                    </div><!-- /.col -->

                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                {{-- Button Create Contact --}}
                <div class="my-2">
                    <a href={{ route('input-contact') }} class="btn btn-primary">Tambah Contact</a>
                </div>
                <table id="contactsTable" class="table">
                    <thead>
                        <tr>
                            <th class="text-center">No. </th>
                            <th class="text-center">Name</th>
                            <th class="text-center">Email</th>
                            <th class="text-center">Phone</th>
                            <th class="text-center">Address</th>
                            <th class="text-center">Date Added</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($contacts as $contact)
                            <tr>
                                <td class="text-center">{{ $loop->iteration }}</td>
                                <td class="text-center">{{ $contact->name }}</td>
                                <td class="text-center">{{ $contact->email }}</td>
                                <td class="text-center">{{ $contact->phone }}</td>
                                <td class="text-center">{{ $contact->address }}</td>
                                <td class="text-center">{{ $contact->created_at->format('d-m-Y') }}</td>
                                <td class="text-center">
                                    <a href='/edit-contact/{{ $contact->id }}' class="btn btn-warning"><i
                                            class="bi bi-pencil-square"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>

    @if (Session::has('message'))
        <script>
            Swal.fire({
                title: "{{ Session::get('status') }}",
                text: "{{ Session::get('message') }}",
                icon: "{{ Session::get('status') }}",
                timer: 2000
            });
        </script>
    @endif
@endsection
