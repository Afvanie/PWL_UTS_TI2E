@extends('gilang_13.layout') @section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mt-2">
                <h2>UTS PEMGROGRAMAN WEB LANJUT MESIN CUCI</h2> 
            </div>
            <div class="float-right my-2">
                <a class="btn btn-success" href="{{ route('mesincuci13.create') }}"> Input Data Mesin Cuci</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>Kode Barang</th>
            <th>Nama</th>
            <th>Spesifikasi</th>
            <th>Merk</th>
            <th>Harga</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($mc as $mesin)
            <tr>

                <td>{{ $mesin->kodebarang }}</td>
                <td>{{ $mesin->nama }}</td>
                <td>{{ $mesin->spesifikasi }}</td>
                <td>{{ $mesin->merk }}</td>
                <td>{{ $mesin->harga }}</td>
                <td>
                    <form action="{{ route('mesincuci13.destroy', $mesin->kodebarang) }}" method="POST">

                        <a class="btn btn-info" href="{{ route('mesincuci13.show', $mesin->kodebarang) }}">Show</a>

                        <a class="btn btn-primary" href="{{ route('mesincuci13.edit', $mesin->kodebarang) }}">Edit</a>
                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection