@extends('layouts.app')

@section('content')
    @if(auth()->user()->role_id==1)
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">SuperAdmin Dashboard</div>

                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif

                            You are logged in!
                        </div>
                        <div class="card-body">
                            
                          
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
    @if(auth()->user()->role_id==2)
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header"> Moderator Dashboard</div>

                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif

                            You are logged in!
                        </div>
                        <div class="card-body">
                            
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
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

                            You are logged in!
                        </div>
                        <div class="card-body">
                           
                           <div>
                           <div></div>
                            <form method="POST" action="{{ route('action.store') }}">
                                    @csrf

                           
                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Fish') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
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
                           
                           <div>
                            <form method="POST" action="{{ route('action.store') }}">
                                    @csrf

                           
                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Hunt') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
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
                            
                        <div class="card-body">
                           
                           <div>
                            <form method="POST" action="{{ route('action.store') }}">
                                    @csrf

                            
                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Farm') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
@endsection
