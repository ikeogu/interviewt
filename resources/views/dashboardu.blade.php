
@extends('layouts.app')
@section('content')

@if(auth()->user()->type_id==2)
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Fisherman Dashboard</div>

                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif

                             </div>
                        <div class="card-body">
                           
                           <div>
                           

                        </div>
                            
                        @if (auth()->user()->ability==1)                          
                            
                        <form method="post" action="{{ route('count') }}">
                            @method('PUT')
                            @csrf
                            <input class="btn btn-primary" name="submit" value="Fish" type="submit">
                        </form>
                         @elseif(auth()->user()->ability==0)  
                         <h3>Sorry! you have been blocked</h3>
                         @endif
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
    @if(auth()->user()->type_id==3)
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Hunter Dashboard</div>

                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif

                            You are logged in!
                        </div>
                        <div class="card-body">
                           
                         
                        @if (auth()->user()->ability==1)                          
                            
                        <form method="post" action="{{ route('count') }}">
                            @method('PUT')
                            @csrf
                            <input class="" name="submit" value="Hunt" type="submit">
                        </form>
                         @elseif(auth()->user()->ability==0)  
                         <h3>Sorry! you have been blocked</h3>
                         @endif
                                                
                        </div>
                           </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    @endif
    @if(auth()->user()->type_id==4)
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header"> Farmer Dashboard</div>

                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif

                           
                        </div>
                        <div class="card-body">
                            
                        @if (auth()->user()->ability==1)                          
                            
                        <form method="post" action="{{ route('count') }}">
                            @method('PUT')
                            @csrf

                            <button class="" name="submit"  type="submit">Farm</button>
                        </form>
                         @elseif(auth()->user()->ability==0)  
                         <h3>Sorry! you have been blocked</h3>
                         @endif
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
    @endsection