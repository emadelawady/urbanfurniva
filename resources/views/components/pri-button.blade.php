<div class="w-full flex flex-col justify-end items-start gap-4 sm:flex-row md:mt-8 lg:mt-10">

    <a href="{{ $link }}" class="group relative inline-flex border border-red-400 rounded-md focus:outline-none w-full sm:w-auto">
        <span class="w-full inline-flex items-center justify-center self-stretch px-4 py-2 text-sm rounded-md text-red-600 text-center font-bold uppercase bg-white ring-1 ring-red-400 ring-offset-1 transform transition-transform group-hover:-translate-y-1 group-hover:-translate-x-1 group-focus:-translate-y-1 group-focus:-translate-x-1">
            {{ $slot  }}
        </span>
    </a>

</div>
