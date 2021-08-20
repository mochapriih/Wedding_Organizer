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
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Image</th>
                            <th>Price</th>
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($items as $item)
                        <tr>
                            <td>{{ $item->id}}</td>
                            <td>{{ $item->title}}</td>
                            <td><img src="{{ Storage::url($item->image) }}" alt="" style="width: 150px" class="img-thumbnail"/ ></td>
                            <td>{{ $item->price}}</td>
                            <td>{{ $item->description}}</td>
                            <td>
                                <a href="{{ route('wedding-package.edit', $item->id) }}" class="btn btn-info">
                                   <i class="fa fa-pencil-alt"></i> 
                                </a>
                                <form action="{{ route('wedding-package.destroy', $item->id) }}" method="POST" class="d-inline">
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
            </div>
        
        </div>
    </div>
                    
                      


</div>
            <!-- End of Main Content -->

@endsection