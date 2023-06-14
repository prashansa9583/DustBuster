@extends('layouts.supervisor')
@section('title','DashBoard')
@section('content') 

<section class="home-section" style="background-color:#F2F6F8;">
<br>
<br>
<br>
    <section class="page-contain">

        <a href="bus_show" class="data-card" style="background-color:#7fc8f8;margin-bottom:225px;margin-top:80px;">
            
            <?php $number=0; 
                foreach ($busArr as $bus){
                    $number++;
                }
            ?>
            <h3>{{$number}}</h3>
            <h4>BUSES</h4>
            <p>Checkout the buses & manage them !!</p>
            <span class="link-text">
                View All Buses
                <svg width="25" height="16" viewBox="0 0 25 16" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M17.8631 0.929124L24.2271 7.29308C24.6176 7.68361 24.6176 8.31677 24.2271 8.7073L17.8631 15.0713C17.4726 15.4618 16.8394 15.4618 16.4489 15.0713C16.0584 14.6807 16.0584 14.0476 16.4489 13.657L21.1058 9.00019H0.47998V7.00019H21.1058L16.4489 2.34334C16.0584 1.95281 16.0584 1.31965 16.4489 0.929124C16.8394 0.538599 17.4726 0.538599 17.8631 0.929124Z"
                        fill="#753BBD" />
                </svg>
            </span>
        </a>


        <a href="scheduled_cleaning" class="data-card" style="background-color:#fec5bb;margin-bottom:226px;margin-top:80px;">
            
            <h3>56</h3>
            <h4>SCHEDULE</h4>
            <p>Manage the Buses to be cleaned today</p>
            <span class="link-text">
                View Schedule
                <svg width="25" height="16" viewBox="0 0 25 16" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M17.8631 0.929124L24.2271 7.29308C24.6176 7.68361 24.6176 8.31677 24.2271 8.7073L17.8631 15.0713C17.4726 15.4618 16.8394 15.4618 16.4489 15.0713C16.0584 14.6807 16.0584 14.0476 16.4489 13.657L21.1058 9.00019H0.47998V7.00019H21.1058L16.4489 2.34334C16.0584 1.95281 16.0584 1.31965 16.4489 0.929124C16.8394 0.538599 17.4726 0.538599 17.8631 0.929124Z"
                        fill="#753BBD" />
                </svg>
            </span>
        </a>


        <a href="phases" class="data-card" style="background-color:#ffe45e;margin-bottom:226px;margin-top:80px;">
            
            <h3>4</h3>
            <h4>Cleaning Phases</h4>
            <p>Checkout all the cleaning phases and manage them!!</p>
            <span class="link-text">
                View All Phases
                <svg width="25" height="16" viewBox="0 0 25 16" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M17.8631 0.929124L24.2271 7.29308C24.6176 7.68361 24.6176 8.31677 24.2271 8.7073L17.8631 15.0713C17.4726 15.4618 16.8394 15.4618 16.4489 15.0713C16.0584 14.6807 16.0584 14.0476 16.4489 13.657L21.1058 9.00019H0.47998V7.00019H21.1058L16.4489 2.34334C16.0584 1.95281 16.0584 1.31965 16.4489 0.929124C16.8394 0.538599 17.4726 0.538599 17.8631 0.929124Z"
                        fill="#753BBD" />
                </svg>
            </span>
        </a>


        <a href="generate_report" class="data-card" style="background-color:#ff6392;margin-bottom:226px;margin-top:80px;">
            
            <h3>787</h3>
            <h4>Report</h4>
            <p>Generate the report for Cleaned Buses on Daily Basis!!</p>
            <span class="link-text">
                Generate Report
                <svg width="25" height="16" viewBox="0 0 25 16" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M17.8631 0.929124L24.2271 7.29308C24.6176 7.68361 24.6176 8.31677 24.2271 8.7073L17.8631 15.0713C17.4726 15.4618 16.8394 15.4618 16.4489 15.0713C16.0584 14.6807 16.0584 14.0476 16.4489 13.657L21.1058 9.00019H0.47998V7.00019H21.1058L16.4489 2.34334C16.0584 1.95281 16.0584 1.31965 16.4489 0.929124C16.8394 0.538599 17.4726 0.538599 17.8631 0.929124Z"
                        fill="#753BBD" />
                </svg>
            </span>
        </a>

    </section>
</section>
 

@endsection