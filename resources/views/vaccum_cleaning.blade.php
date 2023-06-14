@extends('layouts.supervisor')
@section('title','Vaccum Cleaning List')
@section('content') 

<section class="home-section" style="background-color:#F2F6F8;">
<div class="inputfield">
    <br>
        <br>
        <br>
        <br>
        <a href="">
            <input type="submit" value="VACCUM CLEANING LIST" class="btn">
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
                    <th>Bus Registration Plate Number</th>
                    <th>Cleaned Date</th>
                    <th>Next Due date</th>
                </tr> 
            </thead>
            @foreach ($vaccumArr as $bus)
            <tr>
                <td style="text-align:center;">{{$number++}}</td>
                <td style="text-align:center;">{{$bus->bus_reg_plate}}</td>
                <td style="text-align:center;">{{$bus->cleaned_date}}</td>
                <td style="text-align:center;">{{$bus->next_due_date}}</td>                
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