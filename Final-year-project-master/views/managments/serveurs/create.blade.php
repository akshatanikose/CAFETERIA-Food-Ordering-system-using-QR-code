@extends('layouts.app')


@section("content")
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                @include('layouts.sidebar')
                            </div>
                            <div class="col-md-8">
                                <h3 class="text-secondary border-bottom mb-3 p-2">
                                    <i class="fas fa-plus"></i> Add a server
                                </h3>
                                <form action="{{ route("servants.store") }}" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <input
                                            type="text" name="name" id="name"
                                            class="form-control"
                                            placeholder="Name"
                                        >
                                    </div>
                                    <div class="form-group">
                                        <input
                                            type="text" name="address" id="address"
                                            class="form-control"
                                            placeholder="Address"
                                        >
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-primary">
                                            Submit
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
