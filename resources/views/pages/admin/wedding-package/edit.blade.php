@extends('layouts.admin')

@section('content')
 <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Edit Paket Wedding</h1>
                
                    </div>

                    
    @if ($errors->any())
   <div class="alert alert-danger">
       <ul>
           @foreach ($errors->all() as $error)
           <li>{{ $error }}</li>
           @endforeach
       </ul>
   </div>
    @endif            
                      
<div class="card shadow">
    <div class="card-body">
        <form action="{{ route('wedding-package.update', $item->id) }}" method="post" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                 <label for="title">Title</label>
                 <input type="text" class="form-control" name="title" placeholder="Title" value="{{ $item->title }}">
            </div>

            <div class="form-group">
                 <label for="image">Image</label>
                 <input type="file" class="form-control" name="image" placeholder="Image" value="">
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input type="number" class="form-control" name="price" placeholder="price" value="{{ $item->price }}">
            </div>
            <div class="form-group">
                 <label for="description">Description</label>
                 <textarea name="description" rows="10" class="d-block w-100 form-control">{{ $item->description }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Simpan Perubahan</button>
        </form>
    </div>
</div>
            <!-- End of Main Content -->

@endsection