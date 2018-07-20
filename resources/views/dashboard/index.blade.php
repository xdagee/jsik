@extends('layouts.master')

@section('content')
    <section id="content">
        {{-- @include('flash::message') --}}
        {{-- @include('flash::message')
        <div class="container">
            <div class="card">
                <div class="card-header">
                    <div class="card-body">
                        <p>Welcome to jsik | where you find the skill you need.</p>
                    </div>
                </div>
            </div>
        </div> --}}

        <div class="container">
            <div class="card">
                <div class="card-header">
                    <h2>Employee Statistics <small>distribution of employees and their respective specialities and area of residence.</small></h2>
                    
                    <ul class="actions">
                        <li>
                            <a href="#">
                                <i class="zmdi zmdi-refresh-alt"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="zmdi zmdi-download"></i>
                            </a>
                        </li>
                        <li class="dropdown">
                            <a href="#" data-toggle="dropdown">
                                <i class="zmdi zmdi-more-vert"></i>
                            </a>
                            
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li>
                                    <a href="#">Change Date Range</a>
                                </li>
                                <li>
                                    <a href="#">Change Graph Type</a>
                                </li>
                                <li>
                                    <a href="#">Other Settings</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                
                <div class="card-body">
                    <div class="chart-edge">
                        <div id="curved-line-chart" class="flot-chart "></div>
                    </div>
                </div>
            </div>
            
            <div class="mini-charts">
                <div class="row">
                    <div class="col-sm-6 col-md-3">
                        <div class="mini-charts-item bgm-cyan">
                            <div class="clearfix">
                                <div class="chart stats-bar"></div>
                                <div class="count">
                                    <small>Employees</small>
                                    <h2>54</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-sm-6 col-md-3">
                        <div class="mini-charts-item bgm-lightgreen">
                            <div class="clearfix">
                                <div class="chart stats-bar-2"></div>
                                <div class="count">
                                    <small>Skills</small>
                                    <h2>57</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-sm-6 col-md-3">
                        <div class="mini-charts-item bgm-orange">
                            <div class="clearfix">
                                <div class="chart stats-line"></div>
                                <div class="count">
                                    <small>Females</small>
                                    <h2>18</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-sm-6 col-md-3">
                        <div class="mini-charts-item bgm-bluegray">
                            <div class="clearfix">
                                <div class="chart stats-line-2"></div>
                                <div class="count">
                                    <small>Males</small>
                                    <h2>46</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection