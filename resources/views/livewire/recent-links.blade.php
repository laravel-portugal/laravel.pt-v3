<div class="relative bg-gray-50 pt-16 pb-20 px-4 sm:px-6 lg:pt-24 lg:pb-28 lg:px-8">
    <div class="absolute inset-0">
        <div class="bg-white h-1/3 sm:h-2/3"></div>
    </div>
    <div class="relative max-w-7xl mx-auto">
        <div class="text-center">
            <h2 class="text-3xl leading-9 tracking-tight font-extrabold text-gray-900 sm:text-4xl sm:leading-10">
                {{ $title }}
            </h2>
            <p class="mt-3 max-w-2xl mx-auto text-xl leading-7 text-gray-500 sm:mt-4">
                {{ $description }}
            </p>
        </div>
        <div class="mt-12 grid gap-5 max-w-lg mx-auto lg:grid-cols-3 lg:max-w-none">
            @foreach($links as $link)
                <livewire:link :key="$link['id']" :link="$link"/>
            @endforeach
        </div>
    </div>
</div>
