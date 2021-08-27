@extends('layouts.admin')

@section('content')
 <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Tentang Kami</h1>
                
                        <a href="{{route ('about.create')}}" class="btn btn-sn btn-primary shadow-sm">
                            <i class="fas fa-plus fa-sm text-white-50"></i>Tambah Tentang Kami
                        </a>
                    
                    </div>
    


                    
<div class="row">
    <form method="GET" action="/admin/about"
            class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
                <input type="search" name="search" class="form-control bg-light border-0 small" placeholder="Cari data" 
                    aria-label="Search" aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="submit">
                        <i class="fas fa-search fa-sm"></i>
                    </button>
                </div>
            </div>
    </form>   
</div>                     
    <div class="row">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Image</th>
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($itemAbout as $item)
                        <tr>
                            <td>{{ $item->id}}</td>
                            <td>{{ $item->title}}</td>
                            <td><img src="{{ Storage::url($item->image) }}" alt="" style="width: 150px" class="img-thumbnail"/ ></td>
                            <td>{{ $item->description}}</td>
                            <td>
                                <a href="{{ route('about.edit', $item->id) }}" class="btn btn-info">
                                   <i class="fa fa-pencil-alt"></i> 
                                </a>
                                <form action="{{ route('about.destroy', $item->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger">
                                <i class="fa fa-trash"></i> 
                                </button>
                                </form>
                            </td>
                        </tr>

                        @empty
                        <tr>
                            <td collspan="4" class="text-center">
                                Data Kosong
                            </td>
                        </tr>

                        @endforelse
                    
                    </tbody>
                </table>   
                    Halaman : {{ $itemAbout->currentPage() }} <br/>
                    Jumlah Data : {{ $itemAbout->total() }} <br/>
                    Data Per Halaman : {{ $itemAbout->perPage() }} <br/>
                
                    <br/>
                    {{ $itemAbout->links() }} 
            </div>
        
        </div>
    </div>
                    
                      


</div>
            <!-- End of Main Content -->

@endsection