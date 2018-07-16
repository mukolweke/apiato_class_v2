@extends('welcome::layouts.app')

@section('content')

    <section class="grid-container">
        <div class="grid-x">
            <div class="medium-3 columns">
                <div style="text-align: left;">
                    <p style="margin-left: 20px;"><strong>MENU</strong></p>
                    <ul class="side-nav">
                        <li><a href="{{route('web_committee_index')}}">View Committees</a></li>
                        <li><a href="{{route('web_committee_create')}}">Create Commitee</a></li>
                        <li><a href="#">View Members</a></li>
                    </ul>
                </div>
            </div>
            <div class="medium-9 columns" style="float: left">
                <div class="card" style="">
                    <h4>View Boards</h4>
                    {{--<table>--}}
                        {{--<tr>--}}
                            {{--<td>Member Id</td><td>Name</td><td>Description</td><td>Date of Registration</td><td></td>--}}
                        {{--</tr>--}}
                        {{--@if (count($boards) > 0)--}}
                            {{--@foreach($boards as $board)--}}
                                {{--<tr>--}}
                                    {{--<td>{{$board->id}}</td><td>{{$board->name}}</td><td>{{$board->description}}</td><td>{{$board->created_at}}</td><td> <a type="button" href="boards/{{$board->id}}">Delete</a></td>--}}
                                {{--</tr>--}}
                            {{--@endforeach--}}
                        {{--@else--}}
                            {{--<p>No members</p>--}}
                        {{--@endif--}}
                    {{--</table>--}}
                </div>
            </div>
        </div>
    </section>

@endsection

