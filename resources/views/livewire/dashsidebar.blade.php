<div>
    <div class="bg-white max-h-screen px-2 py-3 rounded-md">
        <ul class="p-2">
            <li class="bg-indigo-400 text-white capitalize font-bold w-full py-2 px-3 rounded-lg my-2 shadow-md">
                <button wire:click="sectionid('id')"> <a href="#mountainId">
                        <div class="fas fa-mountain"></div> Mountains API
                    </a></button>
            </li>
        </ul>
    </div>



    {{-- @livewire('master-mountain') --}}
    @livewire('master-mountain')

</div>
