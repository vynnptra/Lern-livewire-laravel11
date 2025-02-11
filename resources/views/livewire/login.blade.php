<div>
    <div class="card">
        <div class="card-body">
            
            <h5 class="card-title">Login</h5>
            <form action="" wire:submit='login'>

                <div class="mb-4">
                    <label for="email" class="form-label">Email</label>
                    <input wire:model='form.email' class="form-control" type="email" name="email" id="emial">

                    @error('form.email')

                    <small class="d-block mt-1 text-danger">{{ $message }}</small>
                        
                    @enderror

                </div>

                <div class="mb-4">
                    <label for="password" class="form-label">Password</label>
                    <input wire:model='form.password' class="form-control" type="password" name="password" id="emial">

                    @error('form.password')

                    <small class="d-block mt-1 text-danger">{{ $message }}</small>
                        
                    @enderror

                </div>

                <button  class="btn btn-primary">Kirim</button>

            </form>
        </div>
    </div>
</div>
