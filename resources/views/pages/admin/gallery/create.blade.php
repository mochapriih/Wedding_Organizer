@extends('layouts.admin')

@section('content')
 <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Tambah Galeri</h1>
                
                       
                    
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
        <form action="{{ route('gallery.store')}}" method="post" enctype="multipart/form-data">
            @csrf
           
            <div class="form-group">
                 <label for="image">Image</label>
                 <input type="file" class="form-control" name="image" placeholder="Image" value="{{old ('image')}}">
            </div>
            
            <button type="submit" class="btn btn-primary btn-block">Simpan</button>
        </form>
    </div>
</div>
            <!-- End of Main Content -->

@endsection