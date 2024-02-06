@extends ('layouts.master')

@section('body')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Insert file</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Add file</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card pt-2">
                            <div class="card-body">
                                <x-alert class="p-3 mb-4" />
                                <form class="form-horizontal" action="{{ route('post.profile') }}" method="POST">
                                    <div class="form-group">
                                        <label for="exampleInputTitle">File title</label>
                                        <input type="text" class="form-control" id="exampleInputTitle"
                                            placeholder="Enter file title">
                                    </div>
                                    <div class="form-group">
                                        <label for="customFile">File input</label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="customFile">
                                            <label class="custom-file-label" for="customFile">Choose file</label>
                                        </div>
                                    </div>

                                    <x-danger-button type="submit" />
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
