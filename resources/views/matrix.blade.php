@extends('layouts.web')

@section('title', "Referrals || CBA")

@section('breadtitle', "My Referrals")

@section('breadli')
<li class="breadcrumb-item active">Referrals</li>               
@endsection

@section('content')
         
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Direct Referrals</h4>
                              
                                <div class="table-responsive">
                                    <table id="one" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Username</th>
                                                <th>level</th>
                                                <th>Joined</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($ones as $one)
                                            <tr>
                                                <td>{{$one->name}}</td>
                                                <td>{{$one->username}}</td>
                                                <td>{{$one->level}}</td>
                                                <td>{{date("d-M-Y", strtotime($one->created_at))}}</td>
                                            </tr>

                          
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
  
  
  <!-- level two -->

  @if($twos->count())
         
         <div class="card">
             <div class="card-body">
                 <h4 class="card-title">Level Two Referrals</h4>
               
                 <div class="table-responsive">
                     <table id="two" class="table table-bordered table-striped">
                         <thead>
                             <tr>
                                 <th>Name</th>
                                 <th>Username</th>
                                 <th>level</th>
                                 <th>Joined</th>
                             </tr>
                         </thead>
                         <tbody>
                         @foreach ($twos as $two)
                             <tr>
                                 <td>{{$two->name}}</td>
                                 <td>{{$two->username}}</td>
                                 <td>{{$two->level}}</td>
                                 <td>{{date("d-M-Y", strtotime($two->created_at))}}</td>
                             </tr>

           
                         @endforeach
                         </tbody>
                     </table>
                 </div>
             </div>
         </div>
@endif

<!-- level three -->

@if($threes->count())
         
         <div class="card">
             <div class="card-body">
                 <h4 class="card-title">Level Three Referrals</h4>
               
                 <div class="table-responsive">
                     <table id="three" class="table table-bordered table-striped">
                         <thead>
                             <tr>
                                 <th>Name</th>
                                 <th>Username</th>
                                 <th>level</th>
                                 <th>Joined</th>
                             </tr>
                         </thead>
                         <tbody>
                         @foreach ($threes as $three)
                             <tr>
                                 <td>{{$three->name}}</td>
                                 <td>{{$three->username}}</td>
                                 <td>{{$three->level}}</td>
                                 <td>{{date("d-M-Y", strtotime($three->created_at))}}</td>
                             </tr>

           
                         @endforeach
                         </tbody>
                     </table>
                 </div>
             </div>
         </div>
@endif

<!-- level four -->


@endsection