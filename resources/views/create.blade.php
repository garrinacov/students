@extends('layout')

@section('content')
<style>
          .uper {
                    margin-top: 40px;
          }
</style>
<div class="card uper">
          <div class="card-header">
                    Add Students
          </div>
          <div class="card-body">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                              <ul>
                                        @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                        @endforeach
                              </ul>
                    </div><br />
                    @endif
                    <form method="post" action="{{ route('school.store') }}">
                              <div class="form-group">
                                        @csrf
                                        <label for="country_name">Name :</label>
                                        <input type="text" class="form-control" name="name" />
                              </div>
                              <div class="form-group">
                                        <label for="symptoms">Gender :</label>
                                        <textarea rows="5" columns="5" class="form-control" name="gender"></textarea>
                              </div>
                              <div class="form-group">
                                        <label for="cases">Age :</label>
                                        <input type="text" class="form-control" name="age" />
                              </div>
                              <div class="form-group">
                                        <label for="cases">Address :</label>
                                        <input type="text" class="form-control" name="address" />
                              </div>
                              <button type="submit" class="btn btn-primary">Add Data</button>
                    </form>
          </div>
</div>
@endsection