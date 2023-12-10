<div {{$attributes->merge()}} class="md:col-span-1 flex flex-wrap justify-between">

    <div class="px-4 sm:px-0  lg:w-1/2 w-full">
        <h3 class="text-lg font-medium text-gray-900">{{ $title }}</h3>

        <p class="mt-1 text-sm text-gray-600 ">
            {{ $description }}
        </p>
    </div>

    <div class="px-4 sm:px-0 lg:w-1/2 w-full">
        {{ $aside ?? '' }}
    </div>
</div>
