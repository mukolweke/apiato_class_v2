@extends('welcome::layouts.app')

@section('content')

    <section class="grid-container">
        <div class="grid-x">
            <div class="medium-3 columns">
                <div style="text-align: left;">
                    <p style="margin-left: 20px;"><strong>MENU</strong></p>
                    <ul class="side-nav" >
                        <li><a href="#">Create Board</a></li>
                        <li><a href="#">View Board</a></li>
                        <li><a href="#">View Members</a></li>
                    </ul>
                </div>
            </div>
            <div class="medium-9 columns" style="float: left">
                <div class="card" style="">
                    <h3 class="text-center"> View Boards</h3>

                </div>
            </div>
        </div>
    </section>

@endsection

