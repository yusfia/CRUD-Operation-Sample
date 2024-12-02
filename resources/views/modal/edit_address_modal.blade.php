<div class="modal fade" id="editModal{{$item->id}}" tabindex="-1" aria-labelledby="editModalLabel"
     aria-hidden="true">
    <div class="modal-dialog">
        <form action="{{ route('address.update', $item->id) }}" method="POST" style="display:inline;">
            @csrf
            @method('PUT')
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="editModalLabel">Edit <b>{{$item->city}}</b></h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="city" class="form-label">City</label>
                        <input type="text" class="form-control" id="city" aria-describedby="cityHelp" name="city"
                               value="{{$item->city}}">
                        <div id="cityHelp" class="form-text">Please enter your city!</div>
                    </div>
                    <div class="mb-3">
                        <label for="street" class="form-label">Street</label>
                        <input type="text" class="form-control" id="street" aria-describedby="streetHelp" name="street"
                               value="{{$item->street}}">
                        <div id="streetHelp" class="form-text">Please enter your street!</div>
                    </div>
                    <div class="mb-3">
                        <label for="postal_code" class="form-label">Postal Code</label>
                        <input type="text" class="form-control" id="postal_code" aria-describedby="pscodeHelp"
                               name="postal_code" value="{{$item->postal_code}}">
                        <div id="pscodeHelp" class="form-text">Please enter your postal code!</div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-danger">Edit</button>
                </div>
            </div>
        </form>
    </div>
</div>
