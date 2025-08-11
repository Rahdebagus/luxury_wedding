<div class="d-flex justify-content-center align-items-center gap-2">
    <button class="btn btn-sm btn-icon btn-danger w-30px h-30px" onclick="onDeleteFlower('{{ $query->id }}')">
        <i class="fa fa-times"></i>
    </button>
    <button class="btn btn-sm btn-icon btn-warning w-30px h-30px"
        onclick="onEditFlower(
            '{{ $query->id }}',
            '{{ $query->name }}',
            '{{ $query->description }}',
            '{{ $query->stock }}', 
            '{{ $query->base_price }}',
            '{{ $query->status }}' 
          
            )">
        <i class="fa fa-pen"></i>
    </button>
</div>
