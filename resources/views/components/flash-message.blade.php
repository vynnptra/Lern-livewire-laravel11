@if (flash()->message)

    <div class="alert alert-{{ flash()->class ?? 'success' }}" role="alert">


        @if (flash()->class === 'warning')

        <i class="bi bi-exclamation-triangle-fill"></i>
            
        @endif

        @if (flash()->class === 'info')

        <i class="bi bi-info-circle-fill"></i>
        
        @endif

        @if (!flash()->class || flash()->class === 'success' )
        
        <i class="bi bi-check-circle-fill"></i>
            
        @endif

        {{ flash()->message }}
    </div>
        
    @endif
