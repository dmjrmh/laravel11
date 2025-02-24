<!-- I begin to speak only when I am certain what I will say is not better left unsaid. - Cato the Younger -->
@props(['active' => false])

<a {{ $attributes }}
    class="{{ $active ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} block rounded-md px-3 py-2 text-base font-medium"
    aria-current="{{ $active ? 'page' : false }}">{{ $slot }}</a>
