<div class="form-container">

    <h2>Alumni Registration Form</h2>

    @if($successMessage)
        <div style="background:#d4edda; padding:12px; margin-bottom:15px; border-radius:6px; color:#155724;">
            {{ $successMessage }}
        </div>
    @endif

    <form wire:submit.prevent="register" enctype="multipart/form-data">

        <!-- FULL NAME -->
        <div class="fields">
            <div class="label">Full Name</div>
            <input type="text" wire:model="name" placeholder="Surname First Other">
            @error('name') <div class="require">{{ $message }}</div> @enderror
        </div>

        <!-- NICKNAME -->
        <div class="fields">
            <div class="label">Nick Name</div>
            <input type="text" wire:model="nickname" placeholder="Optional">
        </div>

        <!-- ENTRY YEAR -->
        <div class="fields">
            <div class="label">Class (Year of Entry)</div>
            <input type="text" wire:model="entry" placeholder="e.g., 1998">
            @error('entry') <div class="require">{{ $message }}</div> @enderror
        </div>

        <!-- PAST CLASS CAPTAIN -->
        <div class="fields">
            <div class="label">Past Class Captain's Name</div>
            <input type="text" wire:model="past_class_captain">
        </div>

        <!-- HOUSE -->
        <div class="fields">
            <div class="label">House</div>
            <input type="text" wire:model="house" placeholder="e.g., Cozens, Niger, Simpson...">
            @error('house') <div class="require">{{ $message }}</div> @enderror
        </div>

        <!-- OLD PRINCIPAL -->
        <div class="fields">
            <div class="label">Old Principal's Name</div>
            <input type="text" wire:model="old_principal">
        </div>

        <!-- RESIDENCE -->
        <div class="fields">
            <div class="label">Current Residence</div>
            <input type="text" wire:model="residence" placeholder="City / State / Country">
        </div>

        <!-- COUNTRY -->
        <div class="fields">
            <div class="label">Country</div>
            <input type="text" wire:model="country">
        </div>

        <!-- CITY -->
        <div class="fields">
            <div class="label">City</div>
            <input type="text" wire:model="location">
        </div>

        <!-- PROFESSION -->
        <div class="fields">
            <div class="label">Profession</div>
            <select wire:model="profession">
                <option value="">Select Profession</option>
                <option>Academia</option><option>Accountant</option><option>Activist</option>
                <option>Teacher</option><option>Medical Doctor</option><option>Entrepreneur</option>
                <!-- You can paste full profession list later -->
            </select>
        </div>

        <!-- BUSINESS CATEGORY -->
        <div class="fields">
            <div class="label">Business Category</div>
            <input type="text" wire:model="business_category">
        </div>

        <!-- BUSINESS INTEREST -->
        <div class="fields">
            <div class="label">Business Interest</div>
            <input type="text" wire:model="business_interest">
        </div>

        <!-- TRADE -->
        <div class="fields">
            <div class="label">Current Trade</div>
            <input type="text" wire:model="trade">
        </div>

        <!-- CONTACT -->
        <div class="fields">
            <div class="label">Contact Phone</div>
            <input type="text" wire:model="contact" placeholder="Phone number / WhatsApp">
        </div>

        <!-- NIN -->
        <div class="fields">
            <div class="label">NIN (Optional)</div>
            <input type="text" wire:model="nin">
        </div>

        <!-- IMAGE UPLOAD -->
        <div class="fields">
            <div class="label">Passport Photo</div>
            <input type="file" wire:model="image" accept="image/*">
            @if($image)
                <img src="{{ $image->temporaryUrl() }}" width="120" style="margin-top:10px; border-radius:6px;">
            @endif
        </div>

        <!-- EMAIL -->
        <div class="fields">
            <div class="label">Your Email</div>
            <input type="email" wire:model="email">
            @error('email') <div class="require">{{ $message }}</div> @enderror
        </div>

        <!-- PASSWORD -->
        <div class="fields">
            <div class="label">Password</div>
            <input type="password" wire:model="password">
            @error('password') <div class="require">{{ $message }}</div> @enderror
        </div>

        <button type="submit">Submit</button>

    </form>
</div>

