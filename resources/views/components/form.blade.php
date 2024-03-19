<div class="grid grid-cols-1 gap-6">
    <div>
        <x-input-label class="hidden" for="first_name">{{ __('First Name') }}</x-input-label>
        <x-text-input class="form-input mt-0 border-t-0" name="first_name"
            placeholder="{{ __('First Name') }}"></x-text-input>
    </div>
    <div>
        <x-input-label class="hidden" for="last_name">{{ __('Last Name') }}</x-input-label>
        <x-text-input class="form-input mt-0 border-t-0" name="last_name"
            placeholder="{{ __('Last Name') }}"></x-text-input>
    </div>
    <div>
        <x-input-label class="hidden" for="email">{{ __('Email') }}</x-input-label>
        <x-text-input class="form-input mt-0 border-t-0" id="email" name="email" type="email"
            placeholder="{{ __('Email') }}"></x-text-input>
    </div>
    <div>
        <x-input-label class="hidden" for="phone">{{ __('Phone') }}</x-input-label>
        <x-text-input class="form-input mt-0 border-t-0" id="phone" name="phone" type="tel"
            placeholder="{{ __('Phone') }}"></x-text-input>
    </div>
    <div>
        <x-input-label class="hidden" for="message">{{ __('Message') }}</x-input-label>

        <textarea class="form-textarea mt-4 block w-full border-x-0 border-t-0 border-gray-400 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
            id="message" name="message" placeholder="{{ __('Message') }}"></textarea>
    </div>
    <x-primary-button class="w-fit" type="submit">{{ __('Submit') }}</x-primary-button>
</div>
