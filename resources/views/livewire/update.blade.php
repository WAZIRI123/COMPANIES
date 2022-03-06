<!-- Modal -->
<div wire:ignore.self class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="updateModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateModalLabel">edit Company</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="row g-3" method="post">
                    <input type="hidden" id="id" wire:model="ids">
                    <div class="col-md-6">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Comapny Name" name='name' wire:model="name">
                        <div>
                            @error('name') <span class="mt-1 ml-1 text-sm text-red-700">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <!--- input name end-->
                    <div class="col-6">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" class="form-control" id="email" placeholder="Email" name='email' wire:model="email">
                        <div>
                            @error('email') <span class="mt-1 ml-1 text-sm text-red-700">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <!--- input email end-->
                    <div class="col-6">
                        <label for="address" class="form-label">address</label>
                        <input type="text" class="form-control" id="address" placeholder="address" name='address' wire:model="address">
                        <div>
                            @error('address') <span class="mt-1 ml-1 text-sm text-red-700">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <!--- input address end-->
                    <div class="col-6">
                        <label for="phone" class="form-label">phone</label>
                        <input type="text" class="form-control" id="phone" placeholder="phone" name='phone' wire:model="phone">
                        <div>
                            @error('phone') <span class="mt-1 ml-1 text-sm text-red-700">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <!--- input phone end-->
                    <div class="col-6">
                        <label for="website" class="form-label">website</label>
                        <input type="text" class="form-control" id="website" placeholder="website" name='website' wire:model="website">
                        <div>
                            @error('website') <span class="mt-1 ml-1 text-sm text-red-700">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <!--- input website end-->
                    <div class="col-6">
                        <label for="location" class="form-label">location</label>
                        <input type="text" class="form-control" id="location" placeholder="location" name='location' wire:model="location">
                        <div>
                            @error('location') <span class="mt-1 ml-1 text-sm text-red-700">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <!--- input location end-->
                    <div class="col-md-6">
                        <label for="inputState" class="form-label">Category</label>
                        <select id="inputState" class="form-select" name="category" wire:model="category">
                            <option selected>Choose...</option>
                            <option value=" Lodge 3 Star - Outside Attraction Area"> Lodge 3 Star - Outside Attraction Area
                            </option>
                            <option value=" Lodge Unclassified - Outside Attraction Area"> Lodge Unclassified - Outside Attraction Area
                            </option>
                            <option value=" Tour Operator (1-3 Vehicles)"> Tour Operator (1-3 Vehicles)
                            </option>
                            <option value=" Town Hotel Unclassified"> Town Hotel Unclassified
                            </option>
                            <option value="Lodge 2 Star - Inside Attraction Area">Lodge 2 Star - Inside Attraction Area
                            </option>
                            <option value="Lodge 2 Star - Outside Attraction Area">Lodge 2 Star - Outside Attraction Area
                            </option>
                            <option value="Lodge 3 Star - Outside Attraction Area">Lodge 3 Star - Outside Attraction Area
                            </option>
                            <option value="Lodge Unclassified - Outside Attraction Area">Lodge Unclassified - Outside Attraction Area
                            </option>
                            <option value="Tour Operator (11-50 Vehicles)">Tour Operator (11-50 Vehicles)
                            </option>
                            <option value="Tour Operator (4-10 Vehicles)">Tour Operator (4-10 Vehicles)
                            </option>
                            <option value="Town Hotel 2 Star">Town Hotel 2 Star
                            </option>
                            <option value="Town Hotel 3 Star">Town Hotel 3 Star
                            </option>
                            <option value="Town Hotel 4 Star">Town Hotel 4 Star
                            </option>
                            <option value="Town Hotel Unclassified">Town Hotel Unclassifie
                            </option>
                            <option value="Vacation Hotel Unclassified">Vacation Hotel Unclassified
                            </option>
                        </select>
                        <div class="">
                            @error('category') <span class="mt-1 ml-1 text-sm text-red-700">{{ $message }}</span> @enderror
                            <!--- input category end-->
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="inputState" class="form-label">sent</label>
                        <select id="inputState" class="form-select" name="sent" wire:model="sent">
                            <option selected>Choose...</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                        <div class="">
                            @error('sent') <span class="mt-1 ml-1 text-sm text-red-700">{{ $message }}</span> @enderror

                        </div>
                    </div>
                    <!--- input sent end-->
                    <div class="col-md-6">
                        <label for="inputState" class="form-label">status</label>
                        <select id="inputState" class="form-select" name="status" wire:model="status">
                            <option selected>Choose...</option>
                            <option value="Active">Active</option>
                            <option value="Inaactive">Inactive</option>
                        </select>
                        <div class="">
                            @error('status') <span class="mt-1 ml-1 text-sm text-red-700">{{ $message }}</span> @enderror

                        </div>
                    </div>
                    <!--- input status end-->
                    <div class="col-md-6">
                        <label for="inputState" class="form-label">responded</label>
                        <select id="inputState" class="form-select" name="responded" wire:model="responded">
                            <option selected>Choose...</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                        <div class="">
                            @error('responded') <span class="mt-1 ml-1 text-sm text-red-700">{{ $message }}</span> @enderror

                        </div>
                    </div>
                    <!--- input responded end-->
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <input  type="submit" class="btn btn-primary" wire:click.prevent="update()"></input>
            </div>
        </div>
    </div>
</div>