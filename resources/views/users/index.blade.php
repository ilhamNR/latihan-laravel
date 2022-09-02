<x-app-layout title="Users">
    <div class="container">
        <x-card title='Users'>
            <H1>User Lists</H1>
            <table class="table" id="table-dummy">
                <thead>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>City</th>
                    <th>Action</th>
                </thead>
                <tbody>
                </tbody>
            </table>
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <form method="post" enctype="multipart/form-data">
                                <input type="hidden" name="_token" value="7oMH5ssTHLB2nHQSQt8skuCx94NEQyiE6qpKbcHA">                                    <div class="d-flex justify-content-center pb-4">
                                    <div class="h4">Import User</div>
                                </div>
                                <label>Pilh File</label>
                                <div class="custom-file">
                                    <input required="" type="file" class="form-control" name="file" id="customFile">
                                </div>
                                <label style="font-size: 10px">Tipe file : csv,xls,xlsx</label>
                                <div class="d-flex justify-content-center pb-5">
                                    <button id="tarif-import" type="submit" class="btn btn-primary" formaction="{{ route('import.user') }}">Import User</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card h-100">
                        <div class="card-body">
                            <div class="d-flex justify-content-center pb-4">
                                <div class="h4">Export User</div>
                            </div>
                            <div class="d-flex justify-content-center pb-5">
                                <a class="btn btn-primary" href="/usersexport">Export User</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </x-card>
        <script>
        $(document).ready(function () {
            var datatable;
            $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
            });

            $(function() {
                datatable = $('#table-dummy').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: "{{url()->current()}}",
                    columns: [
                        {data: 'DT_RowIndex'},
                        {data: 'name'},
                        {data: 'email'},
                        {data: 'city'},
                        {data: 'action'},
                    ],
                });
            });
        });
    </script>



    </div>
</x-app-layout>
