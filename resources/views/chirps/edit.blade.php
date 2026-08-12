<x-layout>
    <x-title>
        Edit Chirp
    </x-title>

    <div class="max-w-2xl mx=auto">
        <h1 class="text-3xl font-bold">Edit Chirp</h1>

        <div class="card bg-base shadow mt-4">
            <div class="card-body">
                <form method="POST" action="/chirps/{{ $chirp->id }}">
                    @csrf
                    @method('PUT')

                    <div class="form-control w-full">
                        <textarea 
                        name="message" 
                        id="message" 
                        rows="4" 
                        class="textarea textarea-bordered w-full resize-none @error('message') textarea-error @enderror"
                        maxlength="255"
                        requried
                        >{{ old('message', $chirp->message) }}</textarea>

                        @error('message')
                            <div class="label">
                                <span class="label-alt text-error text-sm">{{ $message }}</span>
                            </div>
                        @enderror
                    </div>

                    <div class="card-actions justify-between mt-4">
                        <a href="/chirps/{{ $chirp->id }}" class="btn btn-ghost">
                            Cancel
                        </a>

                        <button type="submit" class="btn btn-primary">
                            Update Chirp
                        </button>

                    </div>
                </form>
            </div>
        
        </div>

    
    </div>


</x-layout>