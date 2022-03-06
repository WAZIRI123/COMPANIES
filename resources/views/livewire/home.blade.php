<div class="container">
  @include('livewire.create')
  @include('livewire.update')
  @include('livewire.deletemodal')
  <div class="col-md-12">
    <div class="card mt-4 mb-5">
      <div class="card-header">
        <h4 class="text-center">Client Email Database</h4>
      </div>
      <div class="card-body">
        <div class="row">
          <div class="col-12 mx-auto">
            <p class="text-center">Add Company</p>
            <div>
              @if (session()->has('message'))
              <div class="alert alert-success text-center">
                {{ session('message') }}
              </div>
              @endif
            </div>
            <!-- Button trigger modal -->
            <div class="row">
              <button type="button" class="btn btn-primary  mb-3 col-sm-12 col-md-2 " data-bs-toggle="modal" data-bs-target="#createModal"
              wire:click.prevent="resetInput()">
              <i class="fa-solid fa-circle-plus"></i> company
              </button>
              <form action="" method="post" class="me-5 ms-auto col-sm-12 col-md-4">
                @csrf
                <div class="input-group mb-3">
                  <input type="text" name="search" required value="" class="form-control" placeholder="Search data" wire:model="newsearch">
                </div>
              </form>
            </div>
            <div class="table-responsive">
              <table class="table table-bordered ">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Compnay</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>website</th>
                    <th>location</th>
                    <th>phone</th>
                    <th>category</th>
                    <th>update</th>
                    <th>delete</th>
                    <th>status</th>
                    <th>sent</th>
                    <th>responded</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($detail as $details)
                  <tr>
                    <th scope="row"> {{$details->id}}</th>
                    <td> {{$details->name}}</td>
                    <td> {{$details->website}}</td>
                    <td> {{$details->email}}</td>
                    <td> {{$details->address}}</td>
                    <td> {{$details->location}}</td>
                    <td> {{$details->phone}}</td>
                    <td> {{$details->category}}</td>
                    <td>
                      <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#updateModal" wire:click.prevent="edit({{$details->id}})">
                        edit
                      </button>
                    </td>
                    <td>

                      <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal"
                      wire:click.prevent="deletemodal({{$details->id}})">
                      <i class="fa-solid fa-trash "></i>
                      </button>
                    </td>
                    <td> {{$details->sent}}</td>
                    <td> {{$details->status}}</td>
                    <td> {{$details->responded}}</td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
            <div class="d-flex justify-content-center flex-wrap">
              {{ $detail->links('vendor.pagination.bootstrap-4')}}
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>