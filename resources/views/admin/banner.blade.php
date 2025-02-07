<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Widgets - Kaiadmin Bootstrap 5 Admin Dashboard</title>
    <meta content="width=device-width, initial-scale=1.0, shrink-to-fit=no" name="viewport" />
    @include('admin.layouts._css')

    <!-- Bootstrap & jQuery (Ensure you include these in your layout) -->

</head>

<body>
    <div class="wrapper">
        @include('admin.layouts._sidebar')

        <div class="main-panel">
            @include('admin.layouts._mainHeader')

            <div class="container">
                <div class="page-inner">
                    <h3 class="fw-bold mb-3">Banners</h3>

                    <div class="row">
                        <!-- Left Side: Table -->
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header d-flex justify-content-between align-items-center">
                                    <h4 class="mb-0">Existing Entries</h4>
                                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addEntryModal">
                                        + Add New
                                    </button>
                                </div>
                                <div class="card-body">
                                    <table class="table">
                                        <thead class="table-light">
                                            <tr>
                                                <th>#ID</th>
                                                <th>Image</th>
                                                <th>Name</th>
                                                <th>Description</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!-- Dynamic Data Here -->

                                        </tbody>
                                    </table>
                                    <div class="pagination">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @include('admin.layouts._footer')
        </div>

        @include('admin.layouts._customTemplate')
    </div>

    @include('admin.layouts._js')

    <!-- Add Entry Modal -->
    <div class="modal fade" id="addEntryModal" tabindex="-1" aria-labelledby="addEntryModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addEntryModalLabel">Create New Entry</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="#" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror"
                                name="name" value="{{ old('name') }}" required>
                            @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Upload Image</label>
                            <input type="file" class="form-control @error('image') is-invalid @enderror"
                                name="image" accept="image/*">
                            @error('image') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Heading <span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('heading') is-invalid @enderror"
                                name="heading" value="{{ old('heading') }}" required>
                            @error('heading') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Content</label>
                            <input type="number" class="form-control @error('number') is-invalid @enderror"
                                name="number" value="{{ old('number') }}" required>
                            @error('number') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>


                        <button type="submit" class="btn btn-primary w-100">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>