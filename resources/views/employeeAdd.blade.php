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
                <a class="btn btn-primary" href="{{ URL::to('/') }}">List</a>
                </div>
            </div>
        </div>

        <section class="vh-100">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-lg-12 col-xl-11">
                <div class="card text-black" style="border-radius: 25px;">
                <div class="card-body p-md-5">
                    <div class="row justify-content-center">
                    <div class="col-md-12 order-2 order-lg-1">
                        <form class="mx-1 mx-md-4" method="POST" action="{{ url('/') }}">
                        {{ csrf_field() }}
                        <div class="d-flex flex-row align-items-center mb-4">
                            <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                            <div class="form-outline flex-fill mb-0">
                            <label class="form-label" for="form3Example1c"> Name</label>
                            <input type="text" id="form3Example1c" name="name" class="form-control" required />
                            </div>
                        </div>

                        <div class="d-flex flex-row align-items-center mb-4">
                            <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                            <div class="form-outline flex-fill mb-0">
                            <label class="form-label" for="form3Example3c">Email</label>
                            <input type="email" name="email" id="form3Example3c" class="form-control" required />
                            </div>
                        </div>

                        <div class="d-flex flex-row align-items-center mb-4">
                            <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                            <div class="form-outline flex-fill mb-0">
                            <label class="form-label" for="form3Example4c">Phone</label>
                            <input type="phone" id="form3Example4c" name="phone_number" class="form-control" required />
                            </div>
                        </div>

                        <div class="d-flex flex-row align-items-center mb-4">
                            <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                            <div class="form-outline flex-fill mb-0">
                            <label class="form-label" for="form3Example4cd">Date Of Birth</label>
                            <input type="date" id="form3Example4cd" name="dob" class="form-control" required />
                            </div>
                        </div>

                        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                            <button type="submit" class="btn btn-primary btn-lg">Add New</button>
                        </div>

                        </form>

                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        </section>
</div>

@include('Layout.footer')