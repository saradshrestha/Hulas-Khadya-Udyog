<div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <div class="modal_header">
                <div class="text">Let's talk</div>
                <div class="para">
                    We are here in your service through a live chat. Ask your confusion and query here to get an instant response from our technical team. Let’s talk right now and solve your problem simultaneously. You can get the best home solution for your device issues here.
                </div>
            </div>
            <button
                type="button"
                class="close"
                data-dismiss="modal"
                aria-label="Close"
            >
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form action="">
                <div class="form-group">
                    <input
                        type="text"
                        class="form-control"
                        placeholder="Contact Full Name"
                    />
                </div>
                <div class="form-group">
                    <input
                        type="number"
                        class="form-control"
                        placeholder="Contact Phone"
                    />
                </div>
                <div class="form-group">
                    <input
                        type="email"
                        class="form-control"
                        placeholder="Contact Email"
                    />
                </div>
                <div class="form-group">
                    @if(isset($services))
                    <label>Select Services</label>
                    <select class="form-control selectetwo" style="width: 100%;display: block">
                        @foreach($services as $service)
                        <option value="{{ $service->title }}">{{ $service->title }}</option>
                            @endforeach
                    </select>
                        @elseif(isset($products))
                        <label>Select Products</label>
                        <select class="form-control selectetwo" style="width: 100%;display: block">
                        @foreach($products as $product)
                            <option value="{{ $product->title }}">{{ $product->title }}</option>
                        @endforeach
                        </select>
                    @else
                    <input
                        type="text"
                        class="form-control"
                        value="Query about {{ $gobalPost->title }}"
                    />
                        @endif
                </div>
                <div class="form-group">
                <textarea
                    name=""
                    class="form-control"
                    id=""
                    cols="30"
                    rows="3"
                    placeholder="Your Message ..."
                ></textarea>
                </div>
            </form>
        </div>
        <div class="modal-footer">
            <div class="modal_btn">
                <a href="">
                    <i class="far fa-paper-plane"></i>
                </a>
            </div>
        </div>
    </div>
</div>



<script>
    $(document).ready(function() {
        $('.selectetwo').select2();
    });
</script>