<div class="mb-4">
    <form wire:submit.prevent="addStudent">
        <div class="form-group">
            <label for="name">Student Name</label>
            <input type="text" name="name" wire:model="name" class="form-control @error('name') is-invalid @enderror">
            @error('name')
            <span class="invalid-feedback">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        <div class="mt-2">
            <button type="submit" class="btn btn-primary">Add</button>
        </div>

    </form>
</div>
