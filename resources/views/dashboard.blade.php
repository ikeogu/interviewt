@extends('layouts.app')
@section('content')
<div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        
                        <div class="alert alert-success" role="alert">
                        SuperAdmin Dashboard
                                </div>
                        
                        <div class="card-body">
                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif

                            You are logged in!
                        </div>
                        <table>
                        <th>
                        <td>Name</td>
                        <td>Email</td>
                        <td>Ability</td>
                        </th>
                        @foreach($users as $user)
                        <tr>
                        <td></td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>
                                <form method="post" action="{{route('users.update',[$user->id])}}">
                                {{csrf_field()}}
                                <input type="hidden" name="_method" value="PATCH">
                                <div class="row"> 
                                <div class="col col-lg-8">
                                    <select name="ability" class="form-control">
                                        <option value="1"> Enable</option>
                                        <option value="0"> Disable</option>
                                    </select>
                                    </div>
                                    <div class="col col-lg-4">
                                    <button type="submit" class="btn primary-btn">
                                    Update
                                </button>
                                </div>
                                </div>
                                </form>
                                
                            </td>
                        </tr>
                        @endforeach
                        </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection        