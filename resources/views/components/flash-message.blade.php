@if (session()->has('message'))
    <div x-data="{show: true}" x-init="setTimeout(() => show = false , 1000)" x-show="show" class="fixed z-20 top-0 left-1/2 -translate-x-1/2 transform bg-blue-400 text-black font-semibold px-48 py-3 rounded-b-xl">
        <p>
            {{session('message')}}
        </p>
    </div>
@endif