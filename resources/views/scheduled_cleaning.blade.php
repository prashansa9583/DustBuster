@extends('layouts.supervisor')
@section('title','Scheduled Cleaning')
@section('content') 
<br><br>
<section class="home-section" style="background-color:#F2F6F8;">

<br><br>
<br>
<div class="inputfield">
    <a  href = "#">
        <input type="submit" value="Todays Cleaning Schedule" class="btn">
    </a>
    <?php
        // print_r($finalArr);
    ?>

</div>
 
<br>

<?php 
$number=1;
$count = count($finalArr);
$bus = '';
?>

    <div >
        <table  style="width:100%;text-align:center;" class="content-table" id=myTable>
            <thead>
                <tr>
                    <th>Serial No.</th>
                    <th>Registration Plate</th>
                    <th>Deep Cleaning Status</th>
                    <th>Vaccum Cleaning Status</th>
                    <th>Interior Cleaning Status</th>
                    <th>Exterior Cleaning Status</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($finalArr as $final)
                @for ($i=-1; $i< count($final); $i++)
                        <tr style="text-align:center;">
                                <td>{{$number++}}</td>
                                <td>
                                    <?php
                                        $bus = $final[++$i];
                                        echo $bus;
                                    ?>
                                </td>
                                <td>
                                    <?php   
                                        $index = $final[++$i];
                                        $type=1;
                                        // echo $index1;

                                        if ($index == 1){
                                            echo "<a href='change_status/{{$type}}/{{$bus}}'><button style='cursor:pointer;border:none;background-color: transparent;font-size: xxx-large;'>
                                                    <i style='font-weight: bold;color: #f04141;' title='Change status to Cleaned' class='bx bx-x-circle'></i></button></a>";
                                        }
                                        else{
                                            echo "<p style='color: green;font-weight: 600;'>Already Cleaned</p>";

                                        }
                                    ?>
                                </td>
                                <td>
                                <?php   
                                        $index = $final[++$i];
                                        $type=2;

                                        if ($index == 1){
                                            echo "<a href='change_status/{{$type}}/{{$bus}}'><button style='cursor:pointer;border:none;background-color: transparent;font-size: xxx-large;'>
                                                    <i style='font-weight: bold;color: #f04141;' title='Change status to Cleaned' class='bx bx-x-circle'></i></button></a>";
                                        }
                                        else{
                                            echo "<p style='color: green;font-weight: 600;'>Already Cleaned</p>";

                                        }
                                    ?>
                                </td>
                                <td>
                                <?php   
                                    $index = $final[++$i];
                                    $type = 3;

                                    if ($index == 1){
                                        echo "<a href='change_status/{{$type}}/{{$bus}}'><button style='cursor:pointer;border:none;background-color: transparent;font-size: xxx-large;'>
                                                    <i style='font-weight: bold;color: #f04141;' title='Change status to Cleaned' class='bx bx-x-circle'></i></button></a>";
                                    }
                                    else{
                                        echo "<p style='color: green;font-weight: 600;'>Already Cleaned</p>";

                                    }
                                    ?>
                                </td>
                                <td><?php   
                                        $index = $final[++$i];
                                        $type = 4;

                                        if ($index == 1){
                                            echo "<a href='change_status/{{$type}}/{{$bus}}'><button style='cursor:pointer;border:none;background-color: transparent;font-size: xxx-large;'>
                                                    <i style='font-weight: bold;color: #f04141;' title='Change status to Cleaned' class='bx bx-x-circle'></i></button></a>";
                                        }
                                        else{
                                            echo "<p style='color: green;font-weight: 600;'>Already Cleaned</p>";
                                        }
                                    ?></td>   
                            </tr>
                    @endfor
                @endforeach
            </tbody>
            </table>
            </div>


<br>
<br>
</section>
@endsection