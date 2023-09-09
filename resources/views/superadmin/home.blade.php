@extends('layouts.app')

@section('content')
<div class="container">
    <div class="mb-5">
        <h4>Dashboard</h4>
    </div>
    <div class="row">
        <div class="col-md-3 mb-4">
            <div class="card shadow h-100" style="border-radius: 15px">
                <div class="card-body cardBackground">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs mb-1" style="color: #597393;">Jumlah User</div>
                            <div class="h5 mb-0 text-gray-800" style="color: #002060;">{{ $user->count() }} User</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="card shadow h-100" style="border-radius: 15px">
                <div class="card-body cardBackground">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs mb-1" style="color: #597393;">Jumlah User Aktif</div>
                            <div class="h5 mb-0 text-gray-800" style="color: #002060;">{{ $user_active }} user</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="card shadow h-100" style="border-radius: 15px">
                <div class="card-body cardBackground">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs mb-1" style="color: #597393;">Total Produk</div>
                            <div class="h5 mb-0 text-gray-800" style="color: #002060;">{{ $product->count() }} Produk</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="card shadow h-100" style="border-radius: 15px">
                <div class="card-body cardBackground">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs mb-1" style="color: #597393;">Total Produk Aktif</div>
                            <div class="h5 mb-0 text-gray-800" style="color: #002060;">{{ $product_active }} Produk</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-5">
        <h4>Produk Terbaru</h4>
        <table class="table">
            <thead class="bg-primary">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Gambar</th>
                <th scope="col">Produk</th>
                <th scope="col">Tanggal Dibuat</th>
                <th scope="col">Harga (Rp)</th>
              </tr>
            </thead>
            <tbody>
                <?php $no = 1 ?>
                @foreach ($latest as $item)
                <tr>
                  <td>{{ $no++ }}</td>
                  <td><img src="{{ $item->image }}" alt="" style="max-height: 150px"></td>
                  <td>Otto</td>
                  <td>{{ date('d F Y', strtotime($item->created_at)) }}</td>
                  <td>Rp. {{ number_format($item->price) }}</td>
                </tr>
                @endforeach
            </tbody>
          </table>

    </div>
</div>

<style>

.cardBackground{
  background-position: center;
  background-image: url('/img/card_bg.svg');
  background-repeat: no-repeat;
  background-size: fill;
  border-radius: 15px;
}
</style>
@endsection
