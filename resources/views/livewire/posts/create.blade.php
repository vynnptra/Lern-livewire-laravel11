<div>

    <x-flash-message/>


            
               
                <form action="" wire:submit="save">
    
                  
                    <div class="mb-2">
    

                        <label for="body" class="visually-hidden" >Body</label>
    
                        <textarea wire:model="form.body" placeholder="wahts in your mind?" class="form-control" id="body"></textarea>
    
                        <div class="text-danger">
                            @error('form.body')
                                <small class="d-block mt-1 text-danger">{{ $message }}</small>
                            @enderror
                        </div>
    
                    </div>
                    <div class="flex justify-content-end">
                        <button class="btn btn-primary">Save</button>
                    </div>
                </form>

</div>
