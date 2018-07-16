@extends('welcome::layouts.app')

@section('content')

    <section class="grid-container">
        <div class="grid-x">
            <div class="medium-3 columns">
                <div style="text-align: left;">
                    <p style="margin-left: 20px;"><strong>MENU</strong></p>
                    <ul class="side-nav" >
                        <li><a href="{{route('web_boards_create')}}">Create Board</a></li>
                        <li><a href="{{route('web_boards_index')}}">View Board</a></li>
                        <li><a href="#">View Members</a></li>
                    </ul>
                </div>
            </div>
            <div class="medium-9 columns" style="float: left">
                <div class="card" style="">
                    <h3 class="text-center"> Create A New Board</h3>
                    <p class="text-center"> please fill details below correctly</p>
                    <form method="post" action="{{route('web_boards_store')}}" style="position: center; margin-top:30px;margin-left: 200px;">
                        {{csrf_field()}}
                        <div class="grid-x grid-padding-x">
                            <div class="small-3 cell">
                                <label for="right-label" class="text-left">Board Name: </label>
                            </div>
                            <div class="small-9 cell">
                                <input type="text" id="right-label" name="name">
                            </div>
                            <br><br><br>
                            <div class="small-3 cell">
                                <label for="right-label" class="text-left">Board Description: </label>
                            </div>
                            <div class="small-9 cell">
                                <input type="text" name="description" id="right-label">
                            </div>
                            <br><br><br>
                            <input type="submit" style="margin-left: 185px;" class="button" value="Submit">
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </section>

@endsection

