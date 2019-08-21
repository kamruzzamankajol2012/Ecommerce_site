@extends('admin.master.master');
@section('body')
  <div class="col-lg-10 offset-1">
        <div class="card">
            <h3 class="text-success text-center" id="msg">{{Session::get('message')}}</h3>
            <div class="card-body">
                <table class="table table-bordered">
                    <tr>
                        <th>Sl No.</th>
                        <th>Address</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Publication Status</th>
                        <th>Action</th>
                    </tr>
                 @php($i=1)
                    @foreach($contacts as $contact)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$contact->address}}</td>
                        <td>{{$contact->phone}}</td>
                        <td>{{$contact->brand_email}}</td>
                        <td>{{$contact->publication_status == 1?'Published' : 'Unpublished'}}</td>
                        <td>
                         @if($contact->publication_status == 1)   
                        <a href="{{route('unpublished-contact',['id'=>$contact->id])}}" class="btn btn-info">
                                    <span><i class="fa fa-arrow-up"></i></span>
                                </a>
                        @else
                        <a href="{{route('published-contact',['id'=>$contact->id])}}" class="btn btn-warning">
                                    <span><i class="fa fa-arrow-down"></i></span>
                                </a>
                        @endif
                            <a href="{{route('edit-contact',['id'=>$contact->id])}}" class="btn btn-success">
                                <span><i class="fa fa-edit"></i></span>
                            </a>
                            <a href="{{route('delete-contact',['id'=>$contact->id])}}" class="btn btn-danger">
                                <span><i class="fa fa-trash"></i></span>
                            </a>
                        </td>
                    </tr>
                  @endforeach
                </table>
            </div>
        </div>
    </div>
  

     <script>
        $(document).ready(function () {
            $('#msg').click(function () {
                $(this).text(' ');
            })
        })
    </script>
@endsection