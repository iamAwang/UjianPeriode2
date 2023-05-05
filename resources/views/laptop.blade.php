@extends('layouts.app')
@section('content')
    <div class="m-5">
        <a class="btn btn-primary" href="{{route('home')}}" style="margin-bottom: 25px">Home</a>
        <a class="btn btn-primary" href="{{route('laptop.create')}}" style="margin-bottom: 25px">Tambah Laptop +</a>
        <table class="table table-bordered">
            <thead style="text-align: center">
                <tr>
                    <th>No</th>
                    <th>Nama Laptop</th>
                    <th>Series Laptop</th>
                    <th>Merek Laptop</th>
                    <th>Gambar Laptop</th>
                    <th>Harga Laptop</th>
                    <th colspan="2">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php
                $no = $laptops ->firstItem()
                @endphp
                @foreach ($laptops as $laptop)
                <tr style="text-align: center">
                    <td>{{$no}}</td>
                    <td>{{$laptop->name}}</td>
                    <td>{{$laptop->series}}</td>
                    <td>{{$laptop->brand}}</td>
                    <td><a target="_blank" href="{{asset('storage/photos')}}/{{$laptop->gambar}}">
                        <img src="{{asset('storage/photos')}}/{{@$laptop->gambar}}" alt="laptop" srcset="" style="height: 50%; width: 50%"/></a></td>
                    <td>{{$laptop->harga}}</td>
                    <td><span class="badge text-bg-warning"><a href="{{route('laptop.edit',[$laptop->id])}}" style="text-decoration: none; color:white">Edit</a></span></td></td>
                    <td><form action="{{route('laptop.delete',@$laptop->id)}}" method="POST" onsubmit="return confirm('Are you sure you want to delete this laptop?')">
                        @csrf
                        <button type="submit" class="badge text-bg-danger">Delete</button>
                    </form></td>
                </tr>
                @php
                $no++;
                @endphp
                @endforeach
            </tbody>
        </table>
        {{$laptops->Links()}}
@endsection