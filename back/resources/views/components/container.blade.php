 // slots anonimos
 
 @props(['width' => '7xl'])
 <div {{ $attributes->merge(['class' => "max-w-{$width} mx-auto px-4 sm:px-6 lg:px-8 py-12"]) }}>
    {{ $slot }}
</div>