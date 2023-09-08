@extends('layouts.app')

@push('style')
<style>

    .cardBackground{
      background-position: center;
      background-image: url('/img/card_bg.svg');
      background-repeat: no-repeat;
      background-size: fill;
      border-radius: 15px;
    }

    .btn-info{
        background-color: #41A0E4; color: white;
    }
</style>
@endpush

@section('content')
<div class="container">
    <div class="mb-5">
        <h4>Manajemen Produk</h4>
    </div>

    <div class="mt-5">
        @if (Session::has('message'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{Session::get('message')}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        <div class="col-md-12 text-right mb-2">
            <button type="button" class="btn btn-info" data-toggle="modal" data-tooltip="tooltip" data-placement="bottom" data-target="#createModal">
                TAMBAH PRODUK
            </button>
        </div>
        <table class="table">
            <thead class="thead-light">
              <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Produk</th>
                <th scope="col">Harga</th>
                <th scope="col">Image</th>
                <th scope="col">Tanggal Dibuat</th>
                <th scope="col">Status</th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                <tr>
                  <td>{{ $products->firstItem() + $loop->index }}</td>
                  <td><img src="{{ $product->image }}" alt="" style="max-height: 10px"></td>
                  <td>{{ $product->name }}</td>
                  <td>Rp. {{ number_format($product->price) }}</td>
                  <td>
                    @if ($product->status == 'enable')
                    <span class="badge badge-success badge-pill">AKTIF</span>
                    @else
                    <span class="badge badge-danger badge-pill">TIDAK AKTIF</span>
                    @endif
                  </td>
                  {{-- <td>
                      <div>
                          <button class="btn btn-success rounded-circle"><i class="fa fa-eye"></i></button>
                          <button class="btn btn-warning rounded-circle" data-toggle="modal" data-tooltip="tooltip" data-placement="bottom" data-target="#editModal{{ $user->id }}"><i class="fa fa-edit" style="color: white"></i></button>
                            <!-- Modal Edit Confirmation -->
                            <div class="modal fade" id="editModal{{ $user->id }}" tabindex="-1" role="dialog" aria-labelledby="insertModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-" role="document">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Ubah User</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{route('superadmin.user.update', $user->id)}}" enctype="multipart/form-data" method="post" style="display: inline">
                                        @csrf
                                        @method('PUT')
                                        <div class="form-group">
                                            <label for="name" class="col-form-label">Nama</label>
                                            <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $user->name) }}">
                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="phone_number" class="col-form-label">Nomor Telepon</label>
                                            <input type="text" class="form-control" id="phone_number" name="phone_number" value="{{ old('phone_number', $user->phone_number) }}">
                                            @error('phone_number')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="email" class="col-form-label">Email</label>
                                            <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $user->email) }}">
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="profile" class="col-form-label">Profile</label>
                                            <div class="mt-2">
                                                <img id="preview" src="{{ $user->profile ?? asset('img/upload_image.svg') }}" alt="preview image" style="max-height: 250px;">
                                            </div>
                                            <input type="file" name="profile" accept="profile/*" class="form-control" id="profile">
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="form-control btn btn-info">Simpan</button>
                                        </div>
                                        </form>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Modal -->

                          <button class="btn btn-danger rounded-circle" data-toggle="modal" data-tooltip="tooltip" data-placement="bottom" data-target="#deleteModal{{ $user->id }}"><i class="fa fa-trash" style="color: white"></i></button>
                          <!-- Modal Create Confirmation -->
                            <div class="modal fade" id="deleteModal{{ $user->id }}" tabindex="-1" role="dialog" aria-labelledby="insertModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-" role="document">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Hapus User</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{route('superadmin.user.destroy', $user->id)}}" enctype="multipart/form-data" method="post" style="display: inline">
                                        @csrf
                                        @method('DELETE')
                                        <div class="text-center">
                                            <h4>Konfirmasi Hapus</h4>
                                            <p class="text-gray">Apakah Kamu Yakin Menghapus {{ $user->name }}?</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default waves-effect remove-data-from-delete-form" data-dismiss="modal">Batal</button>
                                            <button type="submit" class="btn btn-danger">HAPUS</button>
                                        </div>
                                        </form>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Modal -->
                      </div>
                  </td> --}}
                </tr>
                @endforeach
            </tbody>
          </table>
          <div class="pagination pagination-info d-flex">
            {{ $products->links() }}
          </div>
    </div>
</div>

<!-- Modal Create Confirmation -->
<div class="modal fade" id="createModal" tabindex="-1" role="dialog" aria-labelledby="insertModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Tambah Produk</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="{{route('superadmin.product.store')}}" enctype="multipart/form-data" method="post" style="display: inline">
            @csrf
              <div class="form-group">
                <label for="name" class="col-form-label">Nama Produk</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>
              <div class="form-group">
                <label for="price" class="col-form-label">Harga</label>
                <input type="text" class="form-control" id="price" name="price" value="{{ old('price') }}">
                @error('price')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>
              <div class="form-group">
                <label for="image" class="col-form-label">Gambar</label>
                <div class="mt-2">
                    <img id="preview2" src="{{ asset('img/upload_image.svg') }}" alt="preview image" style="max-height: 250px;">
                </div>
                <input type="file" name="image" accept="image2/*" class="form-control" id="image2">
              </div>
              <div class="modal-footer">
                <button type="submit" class="form-control btn btn-info">Simpan</button>
              </div>
            </form>
          </div>
        </div>
      </div>
</div>
<!-- End Modal -->
@endsection

@push('script')
<script type="text/javascript">
    $(document).ready(function (e) {
       $('#image').change(function(){
        let reader = new FileReader();
        reader.onload = (e) => {
          $('#preview').attr('src', e.target.result).attr('class', '');
        }
        reader.readAsDataURL(this.files[0]);
       });

    });
</script>

<script type="text/javascript">
    $(document).ready(function (e) {
       $('#image2').change(function(){
        let reader = new FileReader();
        reader.onload = (e) => {
          $('#preview2').attr('src', e.target.result).attr('class', '');
        }
        reader.readAsDataURL(this.files[0]);
       });

    });
</script>
@endpush
