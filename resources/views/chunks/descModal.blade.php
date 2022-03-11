<!-- Modal -->
<div class="modal fade" id="descModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                {{-- <h5 class="modal-title" id="exampleModalLabel">Modal title</h5> --}}
                <div class="modal-img">
                    <img src="{{ $img_root.$shop->Image }}" alt="">
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p style="text-align: justify">
                    @if(strlen($shop->introductiontext)>0)
                        <b>ABOUT: </b>{{ $shop->introductiontext }}
                    @endif
                </p>
            </div>
        </div>
    </div>
</div>
