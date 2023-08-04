<div>
    <form wire:submit.prevent="search" class="mb-4">
        <div class="input-group">
            <input type="text" wire:model="vin" class="form-control @error('vin') is-invalid @enderror" placeholder="Enter Vehicle VIN">
            <button type="submit" class="btn btn-primary">Search</button>
        </div>
        @error('vin')
        <span class="invalid-feedback">{{ $message }}</span>
        @enderror
    </form>

    @if ($response)
    <div class="alert alert-success">
        <h2>Vehicle Documents:</h2>
        @foreach ($response as $key => $value)
        <p>{{ $key }}: {{ $value }}</p>
        @endforeach
    </div>
    @elseif (isset($response) && empty($response))
    <div class="alert alert-warning">
        No documents found for the provided VIN.
    </div>
    @endif
</div>