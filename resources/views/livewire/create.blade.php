<form>
    <div class='form-group'>
        <label for="exampleFromControlInput1">Title: </label>
        <input type="text" class="form-control" id="exampleFromControlInput1" placeholder="Enter Title" wire:model='title'>
           @error('title') 
                <span class='text-danger'>{{ $message }}</span>
           @enderror
    </div>
    <div class='form-group'>
        <label for="exampleFormControlInput2">Body: </label>
        <textArea type='email' class='form-control' id='exampleFromControlInput2' wire:model='body' placeholder='Enter Body'></textArea>
        @error('body')
            <span class='text-danger'>{{ $message }}</span>
        @enderror
    </div>
    <button wire:click.prevent='store()' class='btn btn-success'> Save</button>
</form>