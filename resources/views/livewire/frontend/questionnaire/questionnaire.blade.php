<div>
    <form wire:submit.prevent="submit">
        <div>
            <label for="name">Name:</label>
            <input type="text" wire:model="name" id="name">
            @error('name') <span class="error">{{ $message }}</span> @enderror
        </div>

        <div>
            <label for="email">Email:</label>
            <input type="email" wire:model="email" id="email">
            @error('email') <span class="error">{{ $message }}</span> @enderror
        </div>

        <div>
            <label for="age">Age:</label>
            <input type="number" wire:model="age" id="age">
            @error('age') <span class="error">{{ $message }}</span> @enderror
        </div>

        <div>
            <label for="gender">Gender:</label>
            <select wire:model="gender" id="gender">
                <option value="">Select Gender</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
            </select>
            @error('gender') <span class="error">{{ $message }}</span> @enderror
        </div>

        <div>
            <label for="medication">Medication:</label>
            <select wire:model="medication" id="medication">
                <option value="">Select Medication</option>
                <option value="medication1">Medication 1</option>
                <option value="medication2">Medication 2</option>
                <option value="medication3">Medication 3</option>
            </select>
            @error('medication') <span class="error">{{ $message }}</span> @enderror
        </div>

        <div>
            <label for="medical_history">Medical History:</label>
            <textarea wire:model="medical_history" id="medical_history"></textarea>
            @error('medical_history') <span class="error">{{ $message }}</span> @enderror
        </div>

        <button type="submit">Submit</button>
    </form>
</div>
