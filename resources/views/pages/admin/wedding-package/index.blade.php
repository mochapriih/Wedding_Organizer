@extends('layouts.admin')

@section('content')
 <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Paket Wedding</h1>
                
                        <a href="{{route ('wedding-package.create')}}" class="btn btn-sn btn-primary shadow-sm">
                            <i class="fas fa-plus fa-sm text-white-50"></i>Tambah Paket Wedding
                        </a>
                    
                    </div>

                    
    <div class="row">
        <div class="card-bod">
            <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Price</th>
                            <th>Description</th>
                        </tr>
                    </thead>
                    <tbody>
                    <tr>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                    </tr>
                    </tbody>

                </table>
            </div>
        </div>
    </div>
                    
                      


</div>
            <!-- End of Main Content -->

@endsection