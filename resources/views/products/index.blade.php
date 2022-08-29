<x-app-layout title="Product">
    <div class="container">
        <x-card title='Product'>
            <H1>Products list</H1>
            <button type="button" class="btn btn-success" data-bs-toggle="modal"
            data-bs-target="#addModal">Add new data</button>
            <div class="modal fade" id="addModal" tabindex="-1" role="dialog"
            aria-labelledby="addModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addModalLabel">Add Data</h5>
                        <button type="button" class="close" data-bs-dismiss="modal"
                            aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control"
                                    id="exampleFormControlInput1" placeholder="joko">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Store Name</label>
                                <select class="form-control" id="exampleFormControlSelect1">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="price">Price</label>
                                <input type="number" class="form-control"
                                    id="exampleFormControlInput1" placeholder="444444">
                            </div>
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="name">Image URL</label>
                                <input type="url" class="form-control"
                                    id="exampleFormControlInput1" placeholder="www.address.com">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary"
                            data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
            <table class="table">
                <thead>
                    <th>#</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Description</th>
                    <th>Photo</th>
                    <th>Store Name</th>
                    <th>Actions</th>
                </thead>
                <tbody>
                    @forelse ($products as $key => $products)
                        <tr>
                            <td>{{ ++$key }}</td>
                            <td>{{ $products['name'] }}</td>
                            <td>{{ $products['price'] }}</td>
                            <td>{{ $products['description'] }}</td>
                            <td><img src={{ $products['photo'] }} alt=""></td>
                            <td>{{ $products['store_id'] }}</td>
                            <td><button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#updateModal">Update</button>
                                <div class="modal fade" id="updateModal" tabindex="-1" role="dialog"
                                    aria-labelledby="updateModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="updateModalLabel">Update</h5>
                                                <button type="button" class="close" data-bs-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form>
                                                    <div class="form-group">
                                                        <label for="name">Name</label>
                                                        <input type="text" class="form-control"
                                                            id="exampleFormControlInput1" placeholder="joko">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleFormControlSelect1">Store Name</label>
                                                        <select class="form-control" id="exampleFormControlSelect1">
                                                            <option>1</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option>4</option>
                                                            <option>5</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="price">Price</label>
                                                        <input type="number" class="form-control"
                                                            id="exampleFormControlInput1" placeholder="444444">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="description">Description</label>
                                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="name">Image URL</label>
                                                        <input type="url" class="form-control"
                                                            id="exampleFormControlInput1" placeholder="www.address.com">
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Save changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div><button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                data-bs-target="#deleteModal">Delete</button>

                                  <!-- Modal -->
                                  <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title" id="deleteModalLabel">Modal title</h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                          </button>
                                        </div>
                                        <div class="modal-body">
                                          <h1>Are you sure want to delete this data?</h1>
                                        </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                          <button type="button" class="btn btn-danger">Yes</button>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4">
                                <div class='text-center'>
                                    Data not found
                                </div>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </x-card>
    </div>
</x-app-layout>
