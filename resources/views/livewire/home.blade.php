<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="card mt-4">
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
              <form class="row row-cols-lg-auto g-3 align-items-center" wire:submit.prevent="submit()">
                <div class="col-12">
                  <label class="visually-hidden" for="inlineFormInputGroupUsername">Comapny Name</label>
                  <div class="input-group">
                    <div class="input-group-text"><i class="fa-solid fa-building"></i></div>
                    <input type="text" class="form-control" id="inlineFormInputGroupUsername" placeholder="Comapny Name" name='name' wire:model="name" />
                  </div>
                  @error('name') <span class="mt-1 ml-1 text-sm text-red-700">{{ $message }}</span> @enderror
                  <!--- input name end-->
                </div>
                <div class="col-12">
                  <label class="visually-hidden" for="inlineFormInputGroupUsername">Email</label>
                  <div class="input-group">
                    <div class="input-group-text">@</div>
                    <input type="text" class="form-control" id="inlineFormInputGroupUsername" placeholder="Email" name='email' wire:model="email" />
                  </div>
                </div>
                @error('email') <span class="mt-1 ml-1 text-sm text-red-700">{{ $message }}</span> @enderror
                <!--- input email end-->
                <div class="col-12">
                  <label class="visually-hidden" for="inlineFormInputGroupUsername">Address</label>
                  <div class="input-group">
                    <div class="input-group-text">@</div>
                    <input type="text" class="form-control" id="inlineFormInputGroupUsername" placeholder="Address" name='address' wire:model="address" />
                  </div>
                </div>
                @error('address') <span class="mt-1 ml-1 text-sm text-red-700">{{ $message }}</span> @enderror
                <!--- input address end-->
                <div class="col-12">
                  <label class="visually-hidden" for="inlineFormInputGroupUsername">location</label>
                  <div class="input-group">
                    <div class="input-group-text">@</div>
                    <input type="text" class="form-control" id="inlineFormInputGroupUsername" placeholder="location" name='location' wire:model="location" />
                  </div>
                </div>
                @error('address') <span class="mt-1 ml-1 text-sm text-red-700">{{ $message }}</span> @enderror
                <!--- input location end-->
                <div class="col-12">
                  <label class="visually-hidden" for="inlineFormInputGroupUsername">phone</label>
                  <div class="input-group">
                    <div class="input-group-text">@</div>
                    <input type="text" class="form-control" id="inlineFormInputGroupUsername" placeholder="phone" name='phone' wire:model="phone" />
                  </div>
                </div>
                @error('phone') <span class="mt-1 ml-1 text-sm text-red-700">{{ $message }}</span> @enderror
                <!--- input phone end-->
                <div class="col-12">
                  <label class="visually-hidden" for="inlineFormInputGroupUsername">Website</label>
                  <div class="input-group">
                    <div class="input-group-text"><i class="fa-solid fa-location-pin"></i></div>
                    <input type="text" class="form-control" id="inlineFormInputGroupUsername" placeholder="Website" name="website" wire:model="website" />
                  </div>
                </div>
                @error('website') <span class="mt-1 ml-1 text-sm text-red-700">{{ $message }}</span> @enderror
                <!--- input website end-->
                <div class="col-12">
                  <label class="visually-hidden" for="inlineFormSelectPref">Preference</label>
                  <select class="select" name="category" wire:model="category">
                    <option value="">Select category...</option>
                    <option value="2">Hotel</option>
                    <option value="3">Tour</option>
                  </select>
                </div>
                @error('category') <span class="mt-1 ml-1 text-sm text-red-700">{{ $message }}</span> @enderror
                <!--- input category end-->
                <div class="col-12">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-12">
      <div class="card mt-4">
        <div class="card-body">
          <form action="" method="post" class="w-25 me-5 ms-auto">
            @csrf
            <div class="input-group mb-3">
              <input type="text" name="search" required value="" class="form-control" placeholder="Search data" wire:model="newsearch">
            </div>
          </form>
          <table class="table table-bordered">
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
              </tr>
              @endforeach
            </tbody>
          </table>
          <div class="d-flex justify-content-center">
            {!! $detail->links()!!}
          </div>
        </div>
      </div>
    </div>
  </div>
</div>