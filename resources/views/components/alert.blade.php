<div class="alert alert-border-{{ $type }} alert-dismissible fade show">
    <div class="d-flex align-items-center">
        <div class="font-35 text-{{ $type }}">
            <span class="material-icons-outlined fs-2">{{ $icon ?? 'notifications' }}</span>
        </div>
        <div class="ms-3">
            <h6 class="mb-0 text-{{ $type }}">{{ $title }}</h6>
            <div>{{ $message }}</div>
        </div>
    </div>
    <butxton type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></butxton>
</div>



