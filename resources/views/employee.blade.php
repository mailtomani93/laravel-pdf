@include('Layout.header')

<div class="container mt-5">
        <div class="row">
            <div class="col-md-3">
                <img src="{{ URL::to('assets/ocs-logo.png') }}" width="200" />
            </div>
            <div class="col-md-6">
            <h2 class="text-center mb-3">O Clock Software Employee List</h2>
            </div>
            <div class="col-md-3">
                <div class="d-flex justify-content-end mb-4">
                <a class="btn btn-primary mr-10" href="{{ URL::to('/create') }}">Add New</a>
                &nbsp;&nbsp;
                <a class="btn btn-primary" href="{{ URL::to('/employee/pdf') }}">Export to PDF</a>
                </div>
            </div>
        </div>
        <table class="table table-bordered mb-5">
            <thead>
                <tr class="table-danger">
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">DOB</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($employee ?? '' as $data)
                <tr>
                    <th scope="row">{{ $data->id }}</th>
                    <td>{{ $data->name }}</td>
                    <td>{{ $data->email }}</td>
                    <td>{{ $data->phone_number }}</td>
                    <td>{{ $data->dob }}</td>
                    <td>
                        <a class="btn btn-primary text-white" href="{{ url('/edit/'.$data->id) }}">
                            Edit
                        </a>
                        <form id="delete-form-{{$data->id}}" action="{{url('/destroy/'.$data->id)}}" method="post" style=" display: inline-block;">
                            @csrf @method('DELETE')
                            <button class="btn btn-danger text-white" type="submit">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    @include('Layout.footer')