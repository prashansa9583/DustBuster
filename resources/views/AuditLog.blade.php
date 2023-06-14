@extends('layouts.admin')
@section('title','Audit Log')
@section('content') 
<br><br>
<section class="home-section" style="background-color:#F2F6F8;">

<br><br>
<br>
<div class="inputfield">
    <a  href = "#">
        <input type="submit" value="AUDIT LOG DETAILS" class="btn">
    </a>
</div>
 
<br>

<?php $number=1; ?>

    <div >
        <table  style="width:100%;text-align:center;" class="content-table" id=myTable>
            <thead>
                <tr>
                    <th>Serial No.</th>
                    <th>Action By</th>
                    <th>Action</th>
                    <th>Description</th>
                    <th>Created Date</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($auditlogArr as $auditlog)
                <tr style="text-align:center;">
                    <td>{{$number++}}</td>
                    <td>{{$auditlog->actionBy}}</td>
                    <td>{{$auditlog->action}}</td>
                    <td>{{$auditlog->actionDescription}}</td>
                    <td>{{$auditlog->created_at}}</td>
                </tr>
            @endforeach
            </tbody>
            </table>
            </div>


<br>
<br>
</section>
@endsection