@extends('layout')

@section('content')
<style>
          .uper {
                    margin-top: 40px;
          }
</style>
<div class="card uper">
          <div class="card-header">
                    Edit School Data
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
                    <form method="post" action="{{ route('school.update', $schoolcase->id ) }}">
                              <div class="form-group">
                                        @csrf
                                        @method('PATCH')
                                        <label for="name">Name:</label>
                                        <input type="text" class="form-control" name="name"
                                                  value="{{ $schoolcase->name }}" />
                              </div>
                              <div class="form-group">
                                        <label for="gender">Gender :</label>
                                        <textarea rows="5" columns="5" class="form-control"
                                                  name="gender">{{ $schoolcase->gender }}</textarea>
                              </div>
                              <div class="form-group">
                                        <label for="age">Age :</label>
                                        <input type="text" class="form-control" name="age"
                                                  value="{{ $schoolcase->age }}" />
                              </div>
                              <div class="form-group">
                                        <label for="address">Address :</label>
                                        <input type="text" class="form-control" name="address"
                                                  value="{{ $schoolcase->address }}" />
                              </div>
                              <button type="submit" class="btn btn-primary">Update Data</button>
                    </form>
          </div>
</div>
@endsection