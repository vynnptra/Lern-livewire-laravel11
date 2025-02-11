<div>

    <x-flash-message/>

    <div class="card">
        <div class="card-body">
            
            <div class="card-body">
                <h5 class="card-title">New Post</h5>
               
                <form action="" wire:submit="save">
    
                    <div class="mb-4">
    
                        <label for="title" class="form-label" >Title</label>
    
                        <input type="text" wire:model="form.title" class="form-control" id="title" rows="3" ></input>
    
                        <div class="text-danger">
                            @error('form.title')
                               <small class="d-block mt-1 text-danger">{{ $message }}</small> 
                            @enderror
                        </div>
    
                    </div>
                    <div class="mb-4">
    
                        <label for="body" class="form-label" >Body</label>
    
                        <textarea wire:model="form.body" class="form-control" id="body" rows="3" ></textarea>
    
                        <div class="text-danger">
                            @error('form.body')
                                <small class="d-block mt-1 text-danger">{{ $message }}</small>
                            @enderror
                        </div>
    
                    </div>
    
                    <button class="btn btn-primary">Save</button>
                </form>
    
            </div>
    
        </div>
    </div>
    
</div>
