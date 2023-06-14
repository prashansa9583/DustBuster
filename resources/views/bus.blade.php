@extends('layouts.admin')
@section('title','Bus Details')
@section('content') 

<section class="home-section" style="background-color:#F2F6F8;">
<div class="inputfield">
    <br>
        <br>
        <br>
        <br>
        <a href="create_bus">
            <input type="submit" value="ADD NEW BUS" class="btn">
        </a>
    </div> 
    <div style="text-align: center;">
        {{session('msg')}}
    </div>
    <?php $number=1; ?> 
    <div >
        <table style="width:100%;" class="content-table" id=myTable>
            <thead>
                <tr>
                    <th>Serial No.</th>
                    <th>Bus ID</th>
                    <th>Bus Registration Plate Number</th>
                    <th>Bus Model</th>
                    <th>Registered On</th>
                    <th style="width:105px;">Action</th>
                </tr> 
            </thead>
            @foreach ($busArr as $bus)
            <tr>
                <td style="text-align:center;">{{$number++}}</td>
                <td style="text-align:center;">{{$bus->id}}</td>
                <td style="text-align:center;">{{$bus->reg_plate}}</td>
                <td style="text-align:center;">{{$bus->model}}</td>
                <td style="text-align:center;">{{$bus->created_at}}</td>
                <td  style="text-align:center;">
                    <a onclick="return confirm('Are you sure?')" href="bus_delete/{{$bus->id}}"><i style="color: #ce3333;" class='del bx bx-trash'></i></a>
                    <a href="bus_edit/{{$bus->id}}"><i style="color: #023e8a;" class='edit bx bx-edit'></i></a>
                </td>
                
            </tr>
            @endforeach
        </table>
    </div>
    <br>
    <br>
    <br>
    <br>
</section>
@endsection