@extends('layouts.admin')
@section('title','Supervisor Details')
@section('content') 

<section class="home-section" style="background-color:#F2F6F8;">
<div class="inputfield">
    <br>
        <br>
        <br>
        <br>
        <a href="create_supervisor">
            <input type="submit" value="ADD NEW SUPERVISOR" class="btn">
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
                    <th>Supervisor ID</th>
                    <th>UserName</th>
                    <th>Phone</th>
                    <th>Email-ID</th>
                    <th style="width:105px;">Action</th>
                </tr> 
            </thead>
            @foreach ($supervisorArr as $supervisor)
            <tr>
                <td style="text-align:center;">{{$number++}}</td>
                <td style="text-align:center;">{{$supervisor->id}}</td>
                <td style="text-align:center;">{{$supervisor->username}}</td>
                <td style="text-align:center;">{{$supervisor->phone}}</td>
                <td style="text-align:center;">{{$supervisor->email}}</td>
                <td  style="text-align:center;">
                    <a onclick="return confirm('Are you sure?')" href="supervisor_delete/{{$supervisor->id}}"><i style="color: #ce3333;" class='del bx bx-trash'></i></a>
                    <a href="supervisor_edit/{{$supervisor->id}}"><i style="color: #023e8a;" class='edit bx bx-edit'></i></a>
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