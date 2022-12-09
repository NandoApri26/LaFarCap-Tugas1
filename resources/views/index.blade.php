@extends('template.main')

@section('icon','images/home.ico')
@section('title','biodata')
@section('content')
@php
    $users = [
            [
                "image" => "ariel.jpg",
                "nama" => "Ariel",
                "email" => "ariel@gmail.com",
                "active" => true,
                "alamat" => "jalan satu",
                "role" => "admin"
            ],
            [
                "image" => "sule.jpg",
                "nama" => "Sule",
                "email" => "sule@gmail.com",
                "active" => true,
                "alamat" => "jalan dua",
                "role" => "user"
            ],
            [
                "image" => "bcl.jpg",
                "nama" => "bunga",
                "email" => "bcl.bunga@gmail.com",
                "active" => true,
                "alamat" => "jalan tiga",
                "role" => "admin"
            ],
            [
                "image" => "virza.jpg",
                "nama" => "virza",
                "email" => "virza@gmail.com",
                "active" => true,
                "alamat" => "jalan empat",
                "role" => "user"
            ],
            [
                "image" => "kimihime.jpg",
                "nama" => "kimihime",
                "email" => "kimihime@gmail.com",
                "active" => true,
                "alamat" => "jalan lima",
                "role" => "user"
            ],
            [
                "image" => "ciman.jpg",
                "nama" => "ciman",
                "email" => "ciman@gmail.com",
                "active" => true,
                "alamat" => "jalan enam",
                "role" => "user"
            ],
            [
                "image" => "bayu.jpg",
                "nama" => "bayu",
                "email" => "bayu@gmail.com",
                "active" => true,
                "alamat" => "jalan tuju",
                "role" => "user"
            ],
            [
                "image" => "latif.jpg",
                "nama" => "latif",
                "email" => "latif@gmail.com",
                "active" => true,
                "alamat" => "jalan delapan",
                "role" => "admin"
            ],
            [
                "image" => "daffa.jpg",
                "nama" => "daffa",
                "email" => "daffa@gmail.com",
                "active" => true,
                "alamat" => "jalan sembilan",
                "role" => "admin"
            ],
            [
                "image" => "fakhry.jpg",
                "nama" => "fakhry",
                "email" => "fakhry@gmail.com",
                "active" => true,
                "alamat" => "jalan sepuluh",
                "role" => "admin"
            ],
        ];
    $filter = [
        "active"=>true,
        "role"=>"admin"
        ];
@endphp
<div class="flex flex-wrap gap-8">
    @foreach($users as $user)
        @if($user['active']===$filter['active'] && $user['role']===$filter['role'])
            @include('biodata')
        @endif
    @endforeach
</div>

@endsection