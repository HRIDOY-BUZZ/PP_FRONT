<div class="event-banner py-3 mt-3 mb-4">
    <div class="banner-image">
        @if($event->banner != NULL && $event->banner != "")
            <img src="{{ $eim_root.$event->banner }}" alt="{{ $event->event_name }}">
        @else
            <img src="{{ $eim_root.$placeholder }}" alt="{{ $event->event_name }}">
        @endif
    </div>
</div>