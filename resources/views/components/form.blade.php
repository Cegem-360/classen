<div class="grid grid-cols-1 gap-6">
    <div>
        <x-input-label class="hidden" for="first_name">{{ __('First Name') }}</x-input-label>
        <x-text-input class="mt-0 border-t-0 form-input" name="first_name"
            placeholder="{{ __('First Name') }}"></x-text-input>
    </div>
    <div>
        <x-input-label class="hidden" for="last_name">{{ __('Last Name') }}</x-input-label>
        <x-text-input class="mt-0 border-t-0 form-input" name="last_name"
            placeholder="{{ __('Last Name') }}"></x-text-input>
    </div>
    <div>
        <x-input-label class="hidden" for="contactEmail">{{ __('Email') }}</x-input-label>
        <x-text-input class="mt-0 border-t-0 form-input" id="contactEmail" name="contactEmail" type="email"
            placeholder="{{ __('Email') }}"></x-text-input>
    </div>
    <div>
        <x-input-label class="hidden" for="phone">{{ __('Phone') }}</x-input-label>
        <x-text-input class="mt-0 border-t-0 form-input" id="phone" name="phone" type="tel"
            placeholder="{{ __('Phone') }}"></x-text-input>
    </div>
    <div>
        <x-input-label class="hidden" for="emailMessage">{{ __('Message') }}</x-input-label>

        <textarea
            class="block w-full mt-4 border-t-0 border-gray-400 form-textarea border-x-0 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
            id="emailMessage" name="emailMessage" placeholder="{{ __('Message') }}"></textarea>
    </div>
    <div class="hidden">
        <x-input-label class="hidden" for="website">{{ __('Website') }}</x-input-label>
        <x-text-input class="mt-0 border-t-0 form-input" id="website" name="website"
            placeholder="{{ __('Website') }}"></x-text-input>
    </div>
    <x-primary-button class="w-fit" type="submit">{{ __('Submit') }}</x-primary-button>
</div>
