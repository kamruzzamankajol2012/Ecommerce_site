@extends('admin.master.master')
@section('body')
   <div class="offset-1 col-lg-10">
        <div class="card">
            <div class="card-header">
                <strong>Edit Contact</strong>
                <h3 class="text-center text-success"></h3>
            </div>
            <div class="card-body card-block">
                <form action="{{route('update-contact')}}" method="post" class="form-horizontal">
                    @csrf
                    <div class="row form-group">
                        <div class="col col-md-3"><label class=" form-control-label">Address</label></div>
                        <div class="col-12 col-md-9"><input type="text" name="address" class="form-control" value="{{$contact->address}}"></div>
                        <div class="col-12 col-md-9"><input type="hidden" name="id" class="form-control" value="{{$contact->id}}"></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label class=" form-control-label">Phone</label></div>
                        <div class="col-12 col-md-9"><input type="text" name="phone" class="form-control" value="{{$contact->phone}}"></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label class=" form-control-label">Email</label></div>
                        <div class="col-12 col-md-9"><input type="text" name="email" class="form-control" value="{{$contact->email}}"></div>
                    </div>
                    <div class="col col-md-3"><label class=" form-control-label">Publication Status</label></div>
                    <div class="col col-md-9">
                        <div class="form-check-inline form-check">
                            <label for="inline-radio1" class="form-check-label ">
                                <input type="radio" id="inline-radio1" name="publication_status" value="1" {{$contact->publication_status == 1 ? 'checked' : ''}} class="form-check-input">Published
                            </label>
                            <label for="inline-radio2" class="form-check-label ">
                                <input type="radio" id="inline-radio2" name="publication_status" value="0" {{$contact->publication_status == 0 ? 'checked' : ''}} class="form-check-input">Unpublished
                            </label>
                        </div>
                    </div>
                    <div>
                        <input type="submit" name="btn" class="btn btn-primary btn-sm" value="Submit">
                    </div>
                </form>
            </div>


        </div>
    </div>
@endsection

