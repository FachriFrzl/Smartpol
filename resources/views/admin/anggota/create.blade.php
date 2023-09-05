@extends('admin.layout.app')
@section('content')
<main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-300">
    <div class="container mx-auto px-6 py-8">

        <div class="p-6 bg-white rounded-md shadow-md">
            <h2 class="text-lg text-gray-700 font-semibold capitalize">TAMBAH</h2>
            <hr class="mt-4">
            <form action="{{route('admin.anggota.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="p-4">
                    <label class="">PAS FOTO</label>
                    <input class="form-control" type="file" name="image">
                </div>
                <div class="p-4">
                    <label class="">Nama</label>
                    <input class="form-control" type="text" name="name" value="{{ old('name') }}" placeholder="Full Name !">
                    @error('name')
                               <div class="w-full bg-red-200 shadow-sm rounded-md overflow-hidden mt-2">
                                   <div class="p-4">
                                       <p class="text-gray-600 text-sm">{{ $message }}</p>
                                   </div>
                               </div>
                           @enderror
                </div>
                <div class="p-4">
                    <label class="">NIK</label>
                    <input class="form-control" type="text" name="nik" value="{{ old('nik') }}" placeholder="Nomor Induk KTP">
                    @error('nik')
                               <div class="w-full bg-red-200 shadow-sm rounded-md overflow-hidden mt-2">
                                   <div class="p-4">
                                       <p class="text-gray-600 text-sm">{{ $message }}</p>
                                   </div>
                               </div>
                    @enderror
                </div>
                <div class="p-4">
                    <label class="text-gray-700">TEMPAT & TANGGAL LAHIR</label>
                   <div class="row">
                       <div class="col-md-3">
                           <input class="form-control" type="text" name="birth_place" value="{{ old('birth_place') }}" placeholder="Place of birth">
                           @error('birth_place')
                               <div class="w-full bg-red-200 shadow-sm rounded-md overflow-hidden mt-2">
                                   <div class="p-4">
                                       <p class="text-gray-600 text-sm">{{ $message }}</p>
                                   </div>
                               </div>
                           @enderror
                       </div>
                       <div class="col-md-3">
                           <input class="form-control" type="date" name="birth_date" value="{{ old('birth_date') }}">
                           @error('birth_date')
                               <div class="w-full bg-red-200 shadow-sm rounded-md overflow-hidden mt-2">
                                   <div class="px-3 py-2">
                                       <p class="text-gray-600 text-sm">{{ $message }}</p>
                                   </div>
                               </div>
                           @enderror
                            </div>
                       </div>
                    </div>
                       <div class="col-md-2">
                         <label class="">Select Gender </label>
                            <select class="form-control" name="gender">
                                <option value="laki-laki">Laki-Laki</option>
                                <option value="perempuan">Perempuan</option>
                            </select>
                        </div>
                    <div class="p-4">
                        <label class="text-gray-700" for="address">Alamat</label>
                        <textarea class="w-full mt-2 rounded-md bg-gray-200 focus:bg-white" name="alamat" rows="3">{{ old('alamat') }}</textarea>
                        @error('alamat')
                            <div class="w-full bg-red-200 shadow-sm rounded-md overflow-hidden mt-2">
                                <div class="px-4 py-2">
                                    <p class="text-gray-600 text-sm">{{ $message }}</p>
                                </div>
                            </div>
                        @enderror
                    </div>
                <div class="p-4">
                    <label class="">Silahkan pilih provinsi ! </label>
                    <select class="form-control" id="provinsi" name="province_id">
                        <option>Pilih Provinsi</option>
                        @foreach($provinces as $provinsi)
                            <option value="{{$provinsi->id}}">{{$provinsi -> name}}</option>
                        @endforeach
                    </select>  
                </div>
                <div class="p-4">
                    <label class="">Silahkan pilih Kota ! </label>
                    <select class="form-control" id="kabupaten" name="regency_id">
                        <option>Pilih Kota</option>
                    </select>  
                </div>
                <div class="p-4">
                    <label class="">Silahkan pilih Kecamatan ! </label>
                    <select class="form-control" id="kecamatan" name="district_id">
                        <option>Pilih Kecamatan</option>
                    </select>  
                </div>
                <div class="p-4">
                    <label class="">Silahkan pilih Kelurahan ! </label>
                    <select class="form-control" id="kelurahan" name="village_id">
                        <option>Pilih Kelurahan</option>
                    </select>  
                </div>
                <div class="row" style="margin-left:1px">
                <div class="col-md-2">
                         <label class="">Tulis Rt </label>
                           <input class="form-control" name="rt">
                           @error('rt')
                               <div class="w-full bg-red-200 shadow-sm rounded-md overflow-hidden mt-2">
                                   <div class="p-4">
                                       <p class="text-gray-600 text-sm">{{ $message }}</p>
                                   </div>
                               </div>
                           @enderror
                </div>
                <div class="col-md-2" style="margin-bottom:25px">
                         <label class="">Tulis Rw </label>
                            <input class="form-control" name="rw">
                            @error('rw')
                               <div class="w-full bg-red-200 shadow-sm rounded-md overflow-hidden mt-2">
                                   <div class="p-4">
                                       <p class="text-gray-600 text-sm">{{ $message }}</p>
                                   </div>
                               </div>
                           @enderror
                </div>
            </div>
            </div>
                <div class="flex justify-start mt-4">
                    <button type="submit" class="px-4 py-2 bg-gray-600 text-gray-200 rounded-md hover:bg-gray-700 focus:outline-none focus:bg-gray-700">SIMPAN</button>
                </div>
            </form>
        </div>
        
    </div>
</main>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/5.7.0/tinymce.min.js"></script>
<script>
    tinymce.init({
        selector:'textarea',
        forced_root_block: false,
    });
</script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(function () {
        $.ajaxSetup({
            headers: { 'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content') }
        });

        $(function() {
            $('#provinsi').on('change',function(){
                let id_provinsi = $('#provinsi').val();
                
                $.ajax({
                    type : 'POST',
                    url : "{{route('getkabupaten')}}",
                    data : {id_provinsi:id_provinsi},
                    cache : false,

                    success:function(msg){
                        $('#kabupaten').html(msg);
                    },
                    error:function(data){
                        console.log('error:',data)
                    }
                })
            })

            $('#kabupaten').on('change',function(){
                let id_kabupaten = $('#kabupaten').val();
                
                $.ajax({
                    type : 'POST',
                    url : "{{route('getkecamatan')}}",
                    data : {id_kabupaten:id_kabupaten},
                    cache : false,

                    success:function(msg){
                        $('#kecamatan').html(msg);
                    },
                    error:function(data){
                        console.log('error:',data)
                    }
                })
            })

            $('#kecamatan').on('change',function(){
                let id_kecamatan = $('#kecamatan').val();
                
                $.ajax({
                    type : 'POST',
                    url : "{{route('getkelurahan')}}",
                    data : {id_kecamatan:id_kecamatan},
                    cache : false,

                    success:function(msg){
                        $('#kelurahan').html(msg);
                    },
                    error:function(data){
                        console.log('error:',data)
                    }
                })
            })
        })
    })
</script>
@endsection