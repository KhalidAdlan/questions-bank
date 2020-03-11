@extends('layouts.app')

@section('navbar-header')
 <ul class="nav navbar-nav">
                    <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    Topics <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('topics') }}">
                                           All
                                        </a>

                                    </li>
                                </ul>
                            </li>

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    Chapters <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    @foreach($topics as $topic)
                                    <li>
                                        <a href="{{ route('chapters', ['id' => $topic->id ]) }}">
                                           {{ $topic->name }}
                                        </a>

                                    </li>
                                    @endforeach
                                </ul>
                            </li>



                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    Questions <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="">
                                           All
                                        </a>

                                    </li>
                                </ul>
                            </li>
                    </ul>
@endsection
