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
                    <h3 class="fw-bold mb-3">Whos Comming</h3>

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
                                                <th>Name</th>
                                                <th>Image</th>
                                                <th>Desgination</th>
                                                <th>Social Media ID</th>
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
  <!-- Add Entry Modal -->
<div class="modal fade" id="addEntryModal" tabindex="-1" aria-labelledby="addEntryModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addEntryModalLabel">Create New Entries</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="#" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div id="entryContainer">
                        <div class="entry-group">
                            <div class="mb-3">
                                <label class="form-label">Name</label>
                                <input type="text" class="form-control" name="entries[0][name]" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Upload Image</label>
                                <input type="file" class="form-control" name="entries[0][image]" accept="image/*">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Designation</label>
                                <input type="text" class="form-control" name="entries[0][desgination]">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Social Media ID</label>
                                <input type="text" class="form-control" name="entries[0][social]">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Description</label>
                                <textarea class="form-control" name="entries[0][description]" rows="3"></textarea>
                            </div>
                            
                          
                        </div>
                    </div>
                    
                    <button type="button" class="btn btn-success mb-3" id="addEntryBtn">+ Add More</button>
                    <button type="submit" class="btn btn-primary w-100">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    let entryIndex = 1;

document.getElementById('addEntryBtn').addEventListener('click', function () {
    let entryContainer = document.getElementById('entryContainer');

    let newEntry = document.createElement('div');
    newEntry.classList.add('entry-group', 'p-3', 'border', 'rounded', 'mb-2');
    newEntry.innerHTML = `
        <div class="mb-3">
            <label class="form-label">Name</label>
            <input type="text" class="form-control" name="entries[${entryIndex}][name]" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Upload Image</label>
            <input type="file" class="form-control" name="entries[${entryIndex}][image]" accept="image/*">
        </div>
        <div class="mb-3">
            <label class="form-label">Designation</label>
            <input type="text" class="form-control" name="entries[${entryIndex}][desgination]">
        </div>
        <div class="mb-3">
            <label class="form-label">Social Media ID</label>
            <input type="text" class="form-control" name="entries[${entryIndex}][social]">
        </div>
        <div class="mb-3">
            <label class="form-label">Description</label>
            <textarea class="form-control" name="entries[${entryIndex}][description]" rows="3"></textarea>
        </div>
        <button type="button" class="btn btn-danger remove-entry">Remove</button>
        
    `;

    entryContainer.appendChild(newEntry);
    entryIndex++;
});


document.getElementById('entryContainer').addEventListener('click', function (event) {
    if (event.target.classList.contains('remove-entry')) {
        event.target.closest('.entry-group').remove();
    }
});

</script>

</body>

</html>