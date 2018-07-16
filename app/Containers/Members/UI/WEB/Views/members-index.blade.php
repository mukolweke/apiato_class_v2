@extends('welcome::layouts.app')

@section('content')

    <section class="grid-container">
        <div class="grid-x">
            <div class="medium-3 columns">
                <div style="text-align: left;">
                    <p style="margin-left: 20px;"><strong>MENU</strong></p>
                    <ul class="side-nav">
                        <li><a href="{{route('web_members_index')}}">View Members</a></li>
                        <li><a href="{{route('web_members_create')}}">Create Members</a></li>
                    </ul>
                </div>
            </div>
            <div class="medium-9 columns" style="float: left">
                <div class="card" style="">
                    <h4>Members</h4>
                    <table>

                        <tr>
                            <td>Member Id</td><td>Member`s Name</td><td>Email</td><td>Date of Registration</td><td></td>
                        </tr>
                        @if ($members != null)
                            @foreach($members as $member)
                                <tr>
                                    <td>{{$member->id}}</td><td>{{$member->name}}</td><td>{{$member->email}}</td><td>{{$member->created_at}}</td><td>

                                        <form action="" method="post">

                                            <button type="button" class="button">Add To </button></td>
                                        </form>


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

