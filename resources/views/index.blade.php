@extends('layout')

@section('content')
<style>
          .uper {
                    margin-top: 40px;
          }
</style>
<div class="uper">
          @if(session()->get('success'))
          <div class="alert alert-success">
                    {{ session()->get('success') }}
          </div><br />
          @endif
          <table class="table table-striped">
                    <thead>
                              <tr>
                                        <td>ID</td>
                                        <td>Name</td>
                                        <td>Gender</td>
                                        <td>Age</td>
                                        <td>Address</td>
                                        <td colspan="2">Action</td>
                              </tr>
                    </thead>
                    <tbody>
                              @foreach($schoolcases as $case)
                              <tr>
                                        <td>{{$case->id}}</td>
                                        <td>{{$case->name}}</td>
                                        <td>{{$case->gender}}</td>
                                        <td>{{$case->age}}</td>
                                        <td>{{$case->address}}</td>
                                        <td><a href="{{ route('school.edit', $case->id)}}"
                                                            class="btn btn-primary">Edit</a></td>
                                        <td>
                                                  <form action="{{ route('school.destroy', $case->id)}}" method="post">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button class="btn btn-danger" type="submit">Delete</button>
                                                  </form>
                                        </td>
                              </tr>
                              @endforeach
                    </tbody>
          </table>
          <div>
                    @endsection