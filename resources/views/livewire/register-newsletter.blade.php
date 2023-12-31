@php
$disabled = $errors->any() || empty($this->email) ? true : false;
@endphp
<div>
    <form wire:submit.prevent="register" class="flex flex-col space-y-4">
        <div class="flex flex-row gap-2">
            {{-- Email --}}
            <x-jet-input wire:model.debounce.500ms="email" class="w-full block text-gray-600 bg-gray-200
            text-sm placeholder-gray-400 rounded-lg shadow-md pointer-events-auto ring-[0.1px] ring-[#5ba057] 
            border border-transparent focus:outline-none focus:ring focus:ring-[#5ba057]" name="email" id="email" type="email" placeholder="newsletter@gmail.com" />

            {{-- Submit Button --}}
            <x-buttons.btn-primary wire:target='register' wire:loading.attr='disabled' type="submit" :disabled="$disabled">
                {{ ('Subscrever') }}
            </x-buttons.btn-primary>
        </div>

        {{-- Display warning error --}}
        <div class="w-full">
            @error('email')
            <x-jet-input-error for='email' class="text-orange-300" />
            @enderror
        </div>

    </form>
</div>

{{-- Pop up to inform subscription success --}}
@push('scripts')
<script>
    // Emit Browser Event
    Livewire.on('created', function(e) {
        Swal.fire({
            title: e.title,
            icon: e.icon,
            iconColor: e.iconColor,
            timer: 3000,
            toast: true,
            position: 'top-right',
            timerProgressBar: true,
            showConfirmButton: false
        });
    });
</script>
@endpush