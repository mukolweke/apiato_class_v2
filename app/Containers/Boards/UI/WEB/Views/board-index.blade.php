@extends('welcome::layouts.app')

@section('content')

    <section class="grid-container">
        <div class="grid-x">
            <div class="medium-3 columns">
                <div style="text-align: left;">
                    <p style="margin-left: 20px;"><strong>MENU</strong></p>
                    <ul class="side-nav">
                        <li><a href="{{route('web_boards_index')}}">View Board</a></li>
                        <li><a href="{{route('web_boards_create')}}">Create Board</a></li>
                        <li><a href="#">View Members</a></li>
                    </ul>
                </div>
            </div>
            <div class="medium-9 columns" style="float: left">
                <div class="card" style="">
                    <h4>View Boards</h4>
                    <table>
                        <tr>
                            <td>Member Id</td><td>Name</td><td>Description</td><td>Date of Registration</td><td></td>
                        </tr>
                        @if (count($boards) > 0)
                            @foreach($boards as $board)
                                <tr>
                                    <td>{{$board->id}}</td><td>{{$board->name}}</td><td>{{$board->description}}</td><td>{{$board->created_at}}</td>
                                    <td>
                                        {{--{!!Form::open(['action'=>['web_boards_delete', $board->id], 'method' => 'POST', 'class'=>'pull-right'])!!}--}}
                                        {{--{{csrf_field()}}--}}
                                        {{--{{Form::hidden('_method','DELETE')}}--}}
                                        {{--{{FORM::submit('DELETE', ['class'=> 'btn btn-danger'])}}--}}
                                        {{--{!!Form::close()!!}--}}


                                        {{--<a type="button" href="boards/{{$board->id}}">Delete</a>--}}

                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <p>No members</p>
                        @endif
                    </table>
                </div>
            </div>
        </div>
    </section>

@endsection

